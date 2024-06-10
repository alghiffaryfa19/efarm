<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screening;
use Illuminate\Support\Str;
use App\Models\SubScreening;
use App\Models\Disease;

class SubScreeningOwnerController extends Controller
{
    public function index($id)
    {
        $screening = Screening::find($id);
        $sub_screening = SubScreening::with('disease')->where('screening_id',$screening->id)->get();
        $ds = Disease::with('recommendations')->whereIn('id',SubScreening::where('screening_id',$screening->id)->get(['disease_id']))->get();
        //return $ds;
        return view('owner.sub_screening.index', compact('screening','sub_screening','ds'));
    }

    public function create($id)
    {
        $screening = Screening::find($id);
        return view('owner.sub_screening.create', compact('screening'));
    }

    public function save(Request $request, $id)
    {
        $screening = Screening::find($id);
        $request->validate([
            'uploadImage' => 'required|image|mimes:jpeg,png,jpg|',
            'description' => 'required',
        ]);

        $disease = Disease::where('name',$request->description)->first();
        if ($disease) {
            $ds = $disease;
        } else {
            $ds = Disease::create([
                'name' => $request->description,
            ]);
        }

        $doc = $request->file('uploadImage');
        $image_name = Str::slug($screening->id.'-photo-'.now()).'.'.$doc->getClientOriginalExtension();
        $filename = $image_name;
        $doc->move('uploads/test/', $filename);

        $screening->sub_screening()->create([
            'photo' => 'test/'.$image_name,
            'description' => $request->description,
            'disease_id' => $ds->id,
        ]);

        return redirect()->route('sub_screening.owner', $id);
    }
}
