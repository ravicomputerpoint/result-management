<?php

namespace App\Http\Controllers;

use App\Models\Half;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Http\Request;

class HalfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halfs = Half::all();
        return view('halfs.index',compact('halfs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grades = Grade::all();
        $students = Student::all();
        return view('halfs.create',compact('grades','students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::find($request->student_id)->update(['is_half'=>1]);
        Half::updateOrCreate($request->all());
        
        return redirect()->route('halfs.index')->with('message','Mark Entry Successfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Half $half)
    {
        return view('halfs.show',compact('half'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Half $half)
    {
        $grades = Grade::all();
        $students = Student::all();
        return view('halfs.edit',compact('grades','students','half'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Half $half)
    {
        $half->update($request->all());
        return redirect()->route('halfs.index')->with('message','Mark Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Half $half)
    {
        Student::find($third->student_id)->update(['is_half'=>0]);
        $half->delete();
        return back()->with('message','Mark Entry Deleted');
    }
}
