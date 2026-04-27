<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

use App\Models\StudentEnquiry;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StudentEnquiriesExport;

use Yajra\DataTables\Facades\DataTables;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login_post(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {

            $request->session()->regenerate();
            //    dd('sad');
            return redirect()->route('admin.dashboard')->with('success', 'Login Successful');
        } else {
            return back()->with('error', 'Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin-login')->with('message', 'Successfully Logged Out Please Login');
    }

    public function dashboard()
    {
        $total_enquiries = DB::table('student_enquiries')->count();
        return view('admin.dashboard', compact('total_enquiries'));
    }


    public function studentEnquiries()
    {
        return view('admin.student_enquiries.index');
    }

    public function studentEnquiriesData(Request $request)
    {
        $data = StudentEnquiry::with(['college', 'course', 'specialization']);

        return DataTables::of($data)

            ->addColumn('created', function ($row) {
                return $row->created_at->format('d M Y h:i A');
            })

            ->addColumn('college_name', function ($row) {
                return $row->college->name ?? '-';
            })

            ->addColumn('course_name', function ($row) {
                return $row->course->name ?? '-';
            })

            ->addColumn('specialization_name', function ($row) {
                return $row->specialization->name ?? '-';
            })

            ->editColumn('target_college', function ($row) {
                return $row->target_college ?? 'General Enquiry';
            })

            ->make(true);
    }
    public function exportStudentEnquiries()
    {
        return Excel::download(new StudentEnquiriesExport, 'student_enquiries.xlsx');
    }

}
