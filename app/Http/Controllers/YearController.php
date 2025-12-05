<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $years = Year::all();
        return view('years.index',compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all();
        $students = Student::all();
        return view('years.create',compact('grades','students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::find($request->student_id)->update(['is_year'=>1]);
        Year::updateOrCreate($request->all());
        
        return redirect()->route('years.index')->with('message','Mark Entry Successfull');

    }

    /**
     * Display the specified resource.
     */
    public function show(Year $year)
    {
        return view('years.show',compact('year'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Year $year)
    {
        $grades = Grade::all();
        $students = Student::all();
        return view('years.edit',compact('grades','students','year'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Year $year)
    {
        $year->update($request->all());
        return redirect()->route('years.index')->with('message','Mark Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Year $year)
    {
        Student::find($third->student_id)->update(['is_year'=>0]);
        $year->delete();
        return back()->with('message','Mark Entry Deleted');
    }
}
