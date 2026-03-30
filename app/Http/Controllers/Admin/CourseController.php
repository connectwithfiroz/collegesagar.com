<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function manage()
    {
        $courses = Course::with('specializations')->get();
        return view('admin.courses.manage', compact('courses'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:courses,name',
            'description' => 'nullable',
            'level' => 'nullable'
        ]);

        $data['slug'] = \Str::slug($data['name']);

        Course::create($data);

        return back()->with('success', 'Course added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Course $course)
    {
        if ($course->collegeCourses()->exists()) {
            return back()->with('error', 'Cannot delete. Already in use.');
        }

        $course->delete();

        return back()->with('success', 'Deleted');
    }
}
