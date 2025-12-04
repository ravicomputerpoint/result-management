<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Third;
use App\Models\Student;
use Illuminate\Http\Request;

class ThirdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $thirds = Third::all();
        return view('thirds.index',compact('thirds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all();
        $students = Student::all();
        return view('thirds.create',compact('grades','students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::find($request->student_id)->update(['is_third'=>1]);
        Third::updateOrCreate($request->all());
        
        return redirect()->route('thirds.index')->with('message','Mark Entry Successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Third $third)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Third $third)
    {
        $grades = Grade::all();
        $students = Student::all();
        return view('thirds.edit',compact('grades','students','third'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Third $third)
    {
        $third->update($request->all());
        return redirect()->route('thirds.index')->with('message','Mark Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Third $third)
    {
        Student::find($third->student_id)->update(['is_third'=>0]);
        $third->delete();
        return back()->with('message','Mark Entry Deleted');
    }
}
