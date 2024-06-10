<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screening;
use App\Models\Plant;

class ScreeningController extends Controller
{
    public function index()
    {
        $screening = Screening::with('plant')->where('user_id',auth()->user()->id)->get();
        return view('farmer.screening.index', compact('screening'));
    }

    public function create()
    {
        $plants = Plant::all();
        return view('farmer.screening.create', compact('plants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date_time' => 'required',
            'plant_id' => 'required',
        ]);

        Screening::create([
            'date_time' => $request->date_time,
            'plant_id' => $request->plant_id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('screening.index');
    }

    public function edit($id)
    {
        $screening = Screening::find($id);
        $plants = Plant::all();
        return view('farmer.screening.edit', compact('screening','plants'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'date_time' => 'required',
            'plant_id' => 'required',
        ]);

        $screening = Screening::find($id);

        $screening->update([
            'date_time' => $request->date_time,
            'plant_id' => $request->plant_id,
        ]);

        return redirect()->route('screening.index');
    }

    public function destroy(Request $request, $id)
    {
        $screening = Screening::find($id);
        if ($screening) {
            $screening->delete();
        }

        return redirect()->route('screening.index');
    }
}
