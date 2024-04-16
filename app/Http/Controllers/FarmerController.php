<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmer;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FarmerController extends Controller
{
    public function index()
    {
        $farmer = Farmer::with('user')->get();
        return view('owner.farmer.index', compact('farmer'));
    }

    public function create()
    {
        return view('owner.farmer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        DB::beginTransaction();

        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 2,
            ]);

            $user->farmer()->create([]);

            DB::commit();

            return redirect()->route('farmer.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('farmer.index')->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $farmer = Farmer::with('user')->find($id);
        return view('owner.farmer.edit', compact('farmer'));
    }

    public function update(Request $request,$id)
    {
        $farmer = Farmer::with('user')->find($id);

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $farmer->user->id,
            'name' => 'required',
        ]);

        $farmer = Farmer::with('user')->find($id);

        DB::beginTransaction();

        try {

            $farmer->user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 2,
            ]);

            if (empty($request->password)) {
                $farmer->user->update([
                    'email' => $request->email,
                    'name' => $request->name,
                ]);


            } else {
                $farmer->user->update([
                    'email' => $request->email,
                    'name' => $request->name,
                    'password' => Hash::make($request->password),
                ]);


            }

            //$user->farmer()->create([]);

            DB::commit();

            return redirect()->route('farmer.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('farmer.index')->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy(Request $request, $id)
    {
        $farmer = Farmer::with('user')->find($id);
        if ($farmer) {
            $farmer->user()->delete();
        }

        return redirect()->route('farmer.index');
    }
}
