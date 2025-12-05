<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_students = Student::count();

        $gradeCounts = Student::selectRaw('grade_id, COUNT(*) as total')
            ->groupBy('grade_id')
            ->with('grade')
            ->get();

        $labels = $gradeCounts->pluck('grade.name');
        $values = $gradeCounts->pluck('total');

        return view('home', compact('total_students', 'labels', 'values'));
    }

}
