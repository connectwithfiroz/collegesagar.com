<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\College;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Location;
use App\Models\Course;
use App\Models\Specialization;
use App\Models\CollegeCourse;
class CollegeController extends Controller
{

    public function courses(College $college)
    {
        $courses = Course::with('specializations')->get();
        $collegeCourses = $college->collegeCourses()->with('course', 'specialization')->get();

        return view('admin.colleges.courses', compact('college', 'courses', 'collegeCourses'));
    }
    public function storeCourses(Request $request, College $college)
    {
        $courses = collect($request->courses)
            ->filter(fn($item) => !empty($item['course_id']))
            ->values()
            ->toArray();

        $request->merge(['courses' => $courses]);
        $request->validate([
            'courses.*.course_id' => 'required|exists:courses,id',
        ]);

        // delete old (simple approach)
        $college->collegeCourses()->delete();

        foreach ($request->courses as $item) {
            CollegeCourse::create([
                'college_id' => $college->id,
                'course_id' => $item['course_id'],
                'specialization_id' => $item['specialization_id'] ?? null,
                'fees' => $item['fees'] ?? null,
                'duration' => $item['duration'] ?? null,
                'duration_type' => $item['duration_type'] ?? 'year',
            ]);
        }

        return back()->with('success', 'Courses updated');
    }

    public function collegeData(Request $request)
    {
        $data = College::query();

        return DataTables::of($data)

            ->addColumn('logo', function ($row) {
                return $row->logo
                    ? '<img src="' . asset('storage/' . $row->logo) . '" width="40">'
                    : '-';
            })

            ->addColumn('approved_by', function ($row) {
                return $row->approved_by
                    ? implode(', ', $row->approved_by)
                    : '-';
            })

            ->addColumn('status', function ($row) {
                return $row->status
                    ? '<span class="badge bg-success">Active</span>'
                    : '<span class="badge bg-danger">Inactive</span>';
            })

            ->addColumn('created', function ($row) {
                return $row->created_at->format('d M Y h:i A');
            })
            ->addColumn('location', function ($row) {
                return $row->locations->pluck('city')->join(', ');
            })

            ->addColumn('action', function ($row) {
                $edit = route('admin.colleges.edit', $row->id);
                $courses = route('admin.colleges.courses', $row->id);
                $delete = route('admin.colleges.destroy', $row->id);

                return '
                <a href="' . $edit . '" class="btn btn-sm btn-primary">Edit</a>
                <a href="' . $courses . '" class="btn btn-sm btn-info">Courses</a>
                <button data-url="' . $delete . '" class="btn btn-sm btn-danger deleteBtn">Delete</button>
            ';
            })

            ->rawColumns(['logo', 'status', 'action'])

            ->make(true);
    }
    public function index()
    {
        $colleges = College::latest()->paginate(10);
        return view('admin.colleges.index', compact('colleges'));
    }

    public function create()
    {
        $locations = Location::orderBy('city')->get();
        return view('admin.colleges.create', compact('locations'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required|max:255',
            'logo' => 'nullable|image',
            'cover_image' => 'nullable|image',
            'description' => 'nullable',
            'address' => 'nullable',
            'website' => 'nullable|url',
            'phone' => 'nullable|max:20',
            'email' => 'nullable|email',
            'established_year' => 'nullable|digits:4',
            'approved_by' => 'nullable|array',
            'is_featured' => 'nullable|boolean',
            'status' => 'nullable|boolean',
        ]);

        $data['slug'] = $this->generateSlug($request->name);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('colleges/logo', 'public');
        }

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('colleges/cover', 'public');
        }

        $college = College::create($data);

        if ($request->location_ids) {
            $college->locations()->sync($request->location_ids);
        }

        return redirect()->route('admin.colleges.index')->with('success', 'College added');
    }

    public function edit(College $college)
    {
        $locations = Location::orderBy('city')->get();
        return view('admin.colleges.edit', compact('college', 'locations'));
    }

    public function update(Request $request, College $college)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'logo' => 'nullable|image',
            'cover_image' => 'nullable|image',
            'description' => 'nullable',
            'address' => 'nullable',
            'website' => 'nullable|url',
            'phone' => 'nullable|max:20',
            'email' => 'nullable|email',
            'established_year' => 'nullable|digits:4',
            'approved_by' => 'nullable|array',
            'is_featured' => 'nullable|boolean',
            'status' => 'nullable|boolean',
        ]);

        $data['slug'] = $this->generateSlug($request->name, $college->id);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('colleges/logo', 'public');
        }

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('colleges/cover', 'public');
        }

        $college->update($data);

        $college->locations()->sync($request->location_ids ?? []);

        return redirect()->route('admin.colleges.index')->with('success', 'Updated');
    }

    public function destroy(College $college)
    {
        $college->delete();
        return back()->with('success', 'Deleted');
    }

    private function generateSlug($name, $id = null)
    {
        $slug = Str::slug($name);
        $count = College::where('slug', 'LIKE', "{$slug}%")
            ->when($id, fn($q) => $q->where('id', '!=', $id))
            ->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
}