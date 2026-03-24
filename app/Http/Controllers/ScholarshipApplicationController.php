<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ScholarshipApplication;

class ScholarshipApplicationController extends Controller
{

    public function store(Request $request)
    {

        $validated = $request->validate([
            'college' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'course' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'nullable|string',
            'source_page' => 'nullable|string'
        ]);

        $application = ScholarshipApplication::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Application submitted successfully'
        ]);

    }

}