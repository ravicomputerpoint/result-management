<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function index($entry, Grade $gradeId)
    {
        $students = $gradeId->students()->get();
        
        return view('prints.index',compact('students','entry'));
    }
}
