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
use App\Models\Location;
use App\Models\Contact;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function bestColleges($slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
        $course_id = $course->id;
        $colleges = College::whereHas('collegeCourses.course', function ($q) use ($course) {
            $q->where('id', $course->id);
        })->orderBy('name', 'asc')->get();

        // SEO meta
        $title = "Best Colleges for {$course->name} in India (2026) – Fees, Ranking, Admission";
        $description = "Explore top {$course->name} colleges in India with fees, admission details, ranking, and placements. Compare best colleges now.";
        $courses = Course::with('specializations')->orderBy('name')->get();

        return view('frontend.best-colleges', compact('course', 'colleges', 'title', 'description', 'courses', 'course_id'));
    }
    function getSpecializations(Request $request)
    {
        $course_id = $request->course_id;
        $specializations = Specialization::where('course_id', $course_id)->get();
        return response()->json($specializations);
    }

    public function ajaxColleges(Request $request)
    {
        $query = College::with(['locations', 'collegeCourses.course', 'collegeCourses.specialization']);
        //if featured=value is passed, then show only featured colleges
        if ($request->featured) {
            $query->where('is_featured', true);
        }

        // search
        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // city
        if ($request->city) {
            $query->whereHas('locations', function ($q) use ($request) {
                $q->where('city', $request->city);
            });
        }

        // course
        if ($request->course) {
            $query->whereHas('collegeCourses.course', function ($q) use ($request) {
                $q->where('slug', $request->course);
            });
        }

        // specialization
        if ($request->spec) {
            $query->whereHas('collegeCourses.specialization', function ($q) use ($request) {
                $q->where('slug', $request->spec);
            });
        }

        // fees
        if ($request->fees) {
            $query->whereHas('collegeCourses', function ($q) use ($request) {
                $q->where('fees', '<=', $request->fees);
            });
        }

        $colleges = $query->latest()->paginate(10);

        return view('frontend.partials.college-cards', compact('colleges'))->render();
    }

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
            'email' => 'nullable|email|max:255',
            'phone' => 'required|digits_between:10,15',
            'message' => 'nullable|string|max:1000',

            // NEW (IDs)
            'college_id' => 'nullable|exists:colleges,id',
            'course_id' => 'nullable|exists:courses,id',
            'specialization_id' => 'nullable|exists:specializations,id',
        ]);

        // ✅ Fetch names from IDs (important 🔥)
        $collegeName = null;
        $courseName = null;

        if ($request->college_id) {
            $college = \App\Models\College::find($request->college_id);
            $collegeName = $college?->name;
        }

        if ($request->course_id) {
            $course = \App\Models\Course::find($request->course_id);
            $courseName = $course?->name;
        }

        // ✅ Store both (ID + readable text)
        $validated['college_id'] = $request->college_id;
        $validated['course_id'] = $request->course_id;
        $validated['specialization_id'] = $request->specialization_id;

        $validated['college'] = $collegeName ?? $request->college;
        $validated['course'] = $courseName ?? $request->course;

        $validated['source_page'] = url()->current();
        $validated['ip_address'] = $request->ip();

        // 🚫 Limit per IP
        $count = StudentEnquiry::where('ip_address', $validated['ip_address'])->count();

        if ($count >= 10) {
            return response()->json([
                'status' => false,
                'message' => 'Maximum enquiry limit reached from this device.'
            ], 429);
        }

        // 💾 Save
        $enquiry = StudentEnquiry::create($validated);

        // 📩 Optional Mail (keep later)
        $admin_email = config('app.ADMIN_EMAIL');

        if ($admin_email) {
            // enable later if needed
        }

        return response()->json([
            'status' => true,
            'message' => "Thank you {$enquiry->name}. Our team will contact you shortly."
        ]);
    }
    function applyNowFrom()
    {
        $courses = Course::with('specializations')->get();
        return view('frontend.apply_form', compact('courses'));
    }
    public function applyNow(Request $request)
    {
        $validated = $request->validate([
            'college' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'course' => 'required|string|max:255',
            'phone' => 'required|digits_between:10,15',
            'message' => 'nullable|string|max:1000',
            'source_page' => 'nullable|string|max:500',
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
        $courses = Course::with('specializations')->orderBy('name')->get();

        // $locations = Location::select('city')
        //     ->distinct()
        //     ->orderBy('city')
        //     ->get();
        $locations = cache()->remember('locations', 3600, function () {
            return Location::select('city')->distinct()->get();
        });

        return view('frontend.index', compact('courses', 'locations'));
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
    

    // TEST START
    public function admission()
    {
        return view('frontend.admission');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function sendMail(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'number' => 'required|numeric|digits_between:10,15',
            'message' => 'required|string|min:10|max:1000',
        ]);

        // Rate limit by IP (1 hour)
        $lastContact = Contact::where('ip_address', $request->ip())
            ->orderBy('created_at', 'desc')
            ->first();

        if ($lastContact && $lastContact->created_at->diffInMinutes(Carbon::now()) < 60) {
            return back()->with('success', 'Please wait at least 1 hour before sending a new contact message.');
        }

        // Save to DB
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone = $request->number;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->address = $request->address ?? '';
        $contact->ip_address = $request->ip();
        $contact->user_agent = $request->header('User-Agent');
        $contact->save();

        // Prepare email data
        $formData = [
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'message' => $request->message,
        ];

        // Try to send email, log on failure
        try {
            Mail::to(config('app.MAIL_TO_ADDRESS'))
                ->cc(config('app.CC_MAIL_ADDRESS'))
                ->send(new ContactMail($formData));
        } catch (\Exception $e) {
            \Log::error('Contact form email failed to send: ' . $e->getMessage());
        }

        // Redirect with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function scholarship()
    {
        return view('frontend.scholarship');
    }

    public function studentSupport()
    {
        return view('frontend.student-support');
    }

    public function termsCondition()
    {
        return view('frontend.terms_condition');
    }

    public function about()
    {
        return view('frontend.about');
    }
    // TEST END
    public function colleges(Request $request)
    {
        $query = College::with(['locations', 'collegeCourses.course', 'collegeCourses.specialization']);

        // 🔍 Search
        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // 📍 State
        if ($request->state) {
            $query->whereHas('locations', function ($q) use ($request) {
                $q->where('state', $request->state);
            });
        }

        // 🏙 City
        if ($request->city) {
            $query->whereHas('locations', function ($q) use ($request) {
                $q->where('city', $request->city);
            });
        }

        // 🎓 Course
        if ($request->course) {
            $query->whereHas('collegeCourses.course', function ($q) use ($request) {
                $q->where('slug', $request->course);
            });
        }
        if ($request->spec) {
            $query->whereHas('collegeCourses.specialization', function ($q) use ($request) {
                $q->where('slug', $request->spec);
            });
        }

        // 💰 Fees
        if ($request->fees) {
            $query->whereHas('collegeCourses', function ($q) use ($request) {
                $q->where('fees', '<=', $request->fees);
            });
        }

        $colleges = $query->latest()->paginate(10);

        // ✅ FETCH STATES & CITIES
        $states = Location::select('state')
            ->distinct()
            ->orderBy('state')
            ->pluck('state');

        $cities = Location::select('city')
            ->distinct()
            ->orderBy('city')
            ->pluck('city');
        $courses = Course::with('specializations')->orderBy('name')->get();

        return view('frontend.colleges', compact('colleges', 'states', 'cities', 'courses'));
    }
}
