<?php
namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\CollegeMeta;
use Illuminate\Http\Request;

class CollegeMetaController extends Controller
{
    public function edit($id)
    {
        $college = College::findOrFail($id);
        return view('admin.colleges.meta', compact('college'));
    }

    public function store(Request $request, $id)
    {
        // $request->meta looks like: ['placement_avg' => '10', 'facilities' => 'Wi-Fi, Gym']
        foreach ($request->meta as $key => $value) {
            CollegeMeta::updateOrCreate(
                ['college_id' => $id, 'meta_key' => $key],
                ['meta_value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Advanced details updated successfully!');
    }
}