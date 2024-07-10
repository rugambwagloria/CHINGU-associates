<?php

namespace App\Http\Controllers;


use App\Models\School; 

class SchoolController extends Controller
{
    /**
     * Display a listing of the schools.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        return view('schools.index', compact('schools'));
    }

    /**
     * Show the form for creating a new school.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.user-profile');
    }

    /**
     * Store a newly created school in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // Validate input
        $request->validate([
        'school_name' => 'required|max:50',
            'school_regNo' => 'required|unique:schools|max:15',
            'school_address' => 'required|max:100',
            'school_district' => 'required|max:50',
            'school_phone' => 'required|max:15',
            'rep_fname' => 'required|max:25',
            'rep_lname' => 'required|max:25',
            'rep_email' => 'required|email|max:50',
            'rep_phone' => 'required|max:15',
            'rep_password' => 'required|max:150',
            'admin_id' => 'nullable|integer|exists:admin,id', // Assuming admintable exists
            'rep_username' => 'required|unique:schools|max:55',
            'rep_dob' => 'nullable|date',
            'image' => 'nullable|max:255',
        
        ]);

        // Create a new school record
         $school = new School();
            $school->school_name = $request->input('school_name');
            $school->school_regNo = $request->input('school_regNo');
            $school->school_address = $request->input('school_address');
            $school->school_district = $request->input('school_district');
            $school->school_phone = $request->input('school_phone');
            $school->rep_fname = $request->input('rep_fname');
            $school->rep_lname = $request->input('rep_lname');
            $school->rep_email = $request->input('rep_email');
            $school->rep_phone = $request->input('rep_phone');
            $school->rep_password = bcrypt($request->input('rep_password')); // Hash the password
            $school->admin_id = $request->input('admin_id');
            $school->rep_username = $request->input('rep_username');
            $school->rep_dob = $request->input('rep_dob');
            $school->image = $request->input('image');
    
            return back()->with('success','School created successfully!');
        
    }
  
}


    

