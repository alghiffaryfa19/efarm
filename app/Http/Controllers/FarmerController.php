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
        $farmer = User::with('role')->get();
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

            if ($request->role_id == 1) {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id' => 1,
                ]);
            } else {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id' => 2,
                ]);

                $user->farmer()->create([]);
            }




            DB::commit();

            return redirect()->route('farmer.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('farmer.index')->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $farmer = User::find($id);
        return view('owner.farmer.edit', compact('farmer'));
    }

    public function update(Request $request,$id)
    {
        $farmer = User::find($id);

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $farmer->id,
            'name' => 'required',
        ]);

        //$farmer = Farmer::with('user')->find($id);

        DB::beginTransaction();

        try {

            // $farmer->update([
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'password' => Hash::make($request->password),
            // ]);

            if (empty($request->password)) {
                $farmer->update([
                    'email' => $request->email,
                    'name' => $request->name,
                ]);


            } else {
                $farmer->update([
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
        $farmer = User::find($id);
        if ($farmer) {
            $farmer->delete();
        }

        return redirect()->route('farmer.index');
    }
}
