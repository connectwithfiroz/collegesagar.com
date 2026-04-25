<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\College;
use App\Models\CollegeCourse;
use App\Models\Course;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

use App\Models\StudentEnquiry;
use App\Models\Specialization;
class HomeController extends Controller
{

    public function collegeDetails($slug)
    {
        $college = College::with([
            'locations',
            'collegeCourses.course',
            'collegeCourses.specialization'
        ])->where('slug', $slug)->firstOrFail();

        return view('frontend.college.college_details', compact('college'));
    }

    public function submitScholarship(Request $request)
    {
        $validated = $request->validate([
            'college' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'course' => 'required|string|max:255',
            'phone' => 'required|digits_between:10,15',
            'message' => 'nullable|string|max:1000',
            'source_page' => 'nullable|string|max:500'
        ]);

        $ip = $request->ip();
        $validated['ip_address'] = $ip;

        // Limit enquiries per IP
        $count = StudentEnquiry::where('ip_address', $ip)->count();

        if ($count >= 3) {
            return response()->json([
                'status' => false,
                'message' => 'Maximum enquiry limit reached from this device.'
            ], 429);
        }

        // Save enquiry
        $enquiry = StudentEnquiry::create($validated);

        $admin_email = config('app.ADMIN_EMAIL');

        if ($admin_email) {

            // Mail::raw(
            //     "New Student Enquiry Received\n\n" .
            //     "Name: {$enquiry->name}\n" .
            //     "Email: {$enquiry->email}\n" .
            //     "Phone: {$enquiry->phone}\n" .
            //     "Course: {$enquiry->course}\n" .
            //     "College: {$enquiry->college}\n" .
            //     "Message: {$enquiry->message}\n" .
            //     "Source Page: {$enquiry->source_page}\n" .
            //     "IP Address: {$enquiry->ip_address}",
            //     function ($message) use ($admin_email) {
            //         $message->to($admin_email)
            //             ->subject('New Student Enquiry');
            //     }
            // );

        }

        return response()->json([
            'status' => true,
            'message' => "Thank you {$enquiry->name}. Our team will contact you shortly."
        ]);
    }
    public function studentEnquiry(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'target_college' => 'nullable|string'
        ]);

        $ip = $request->ip();

        $count = StudentEnquiry::where('ip_address', $ip)->count();

        if ($count >= 3) {
            return response()->json([
                'status' => false,
                'message' => 'Maximum enquiry limit reached from this device.'
            ], 429);
        }

        $enquiry = StudentEnquiry::create([
            'target_college' => $request->target_college,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'ip_address' => $ip
        ]);

        // Send Mail to Admin
        Mail::raw(
            "New Student Enquiry\n\nName: {$enquiry->name}\nEmail: {$enquiry->email}\nPhone: {$enquiry->phone}\nCourse: {$enquiry->target_college}",
            function ($message) {
                $message->to('admin@yourdomain.com')
                    ->subject('New Student Enquiry');
            }
        );

        return response()->json([
            'status' => true,
            'message' => "Thank you {$enquiry->name}. Our team will contact you shortly."
        ]);
    }
   

    public function index()
    {
        $courses = Course::with('specializations')->get();


        return view('frontend.index', compact('courses'));
    }


    public function course($courseSlug)
    {
        $course = Course::where('slug', $courseSlug)->firstOrFail();

        return view('frontend.course.list', compact('course'));
    }

    public function specialization($courseSlug, $specSlug)
    {
        $course = Course::where('slug', $courseSlug)->firstOrFail();

        $specialization = Specialization::where('slug', $specSlug)
            ->where('course_id', $course->id)
            ->firstOrFail();

        return view('frontend.course.specialization', compact('course', 'specialization'));
    }

    // return redirect('/website/index.html');
    public function sendMail(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'number' => 'required|numeric|digits_between:10,15',
            'message' => 'required|string|min:10|max:1000',
        ]);

        // Get form data
        $formData = [
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'message' => $request->message,
        ];

        // Send email
        Mail::to('contacttofiroz@gmail.com')->send(new ContactMail($formData));

        // Redirect with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
    function about()
    {
        return view('frontend.about');
    }
    function colleges()
    {
        $colleges = College::with('locations')->get();
        return view('frontend.colleges', compact('colleges'));
    }
}
