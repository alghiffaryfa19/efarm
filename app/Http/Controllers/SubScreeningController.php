<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screening;
use Illuminate\Support\Str;
use App\Models\SubScreening;

class SubScreeningController extends Controller
{
    public function index($id)
    {
        $screening = Screening::find($id);
        $sub_screening = SubScreening::where('screening_id',$screening->id)->get();
        return view('farmer.sub_screening.index', compact('screening','sub_screening'));
    }

    public function create($id)
    {
        $screening = Screening::find($id);
        return view('farmer.sub_screening.create', compact('screening'));
    }

    public function save(Request $request, $id)
    {
        $screening = Screening::find($id);
        $request->validate([
            'uploadImage' => 'required|image|mimes:jpeg,png,jpg|',
            'description' => 'required',
        ]);

        $doc = $request->file('uploadImage');
        $image_name = Str::slug($screening->id.'-photo-'.now()).'.'.$doc->getClientOriginalExtension();
        $filename = $image_name;
        $doc->move('uploads/test/', $filename);

        $screening->sub_screening()->create([
            'photo' => 'test/'.$image_name,
            'description' => $request->description,
        ]);

        return redirect()->route('sub_screening', $id);
    }
}
