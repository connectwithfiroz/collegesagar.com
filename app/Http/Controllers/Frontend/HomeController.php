<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Faq;
use App\Models\Product;
use App\Models\Donation;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

use App\Models\StudentEnquiry;
class HomeController extends Controller
{

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
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function diplomaIti()
    {
        return view('frontend.diploma-iti');
    }

    public function engineering()
    {
        return view('frontend.engineering');
    }

    public function healthScience()
    {
        return view('frontend.health-science');
    }

    public function management()
    {
        return view('frontend.management');
    }

    public function medicalScience()
    {
        return view('frontend.medicalscience');
    }

    public function nursing()
    {
        return view('frontend.nursing');
    }

    public function paramedical()
    {
        return view('frontend.paramedical');
    }

    public function pharmacy()
    {
        return view('frontend.pharmacy');
    }

    public function ourDeveloper()
    {
        return view('frontend.our_developer');
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy_policy');
    }

    public function termsCondition()
    {
        return view('frontend.term_condition');
    }

    public function student()
    {
        return view('frontend.student');
    }

    public function studyInAbroad()
    {
        return view('frontend.study_in_abroad');
    }

    public function studyInBengaluru()
    {
        return view('frontend.study_in_bengaluru');
    }

    public function studyInKarnataka()
    {
        return view('frontend.study_in_karnataka');
    }

    public function studyInTamilnadu()
    {
        return view('frontend.study_in_tamilnadu');
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
}
