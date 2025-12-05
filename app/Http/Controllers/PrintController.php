<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function index($entry, Grade $gradeId)
    {
        $students = $gradeId->students()->get();

        if($entry == 'third' || $entry == 'half'){
            return view('prints.index',compact('students','entry'));
        }else if($entry == 'yearly'){
            $students = $students->map(function($s) {

                if(in_array($s->grade_id,[1,2,3])){
                    $s->total = $s->third->hindi + $s->half->hindi + $s->year->hindi +
                                $s->third->english + $s->half->english + $s->year->english +
                                $s->third->math + $s->half->math + $s->year->math +
                                $s->third->drawing + $s->half->drawing + $s->year->drawing +
                                $s->third->rhymes + $s->half->rhymes + $s->year->rhymes
                    ;
                }else if(in_array($s->grade_id,[4,5,6,7,8,9,10,11])){
                    $s->total = $s->third->hindi + $s->half->hindi + $s->year->hindi +
                        $s->third->english + $s->half->english + $s->year->english +
                        $s->third->math + $s->half->math + $s->year->math +
                        $s->third->drawing + $s->half->drawing + $s->year->drawing +
                        $s->third->gk + $s->half->gk + $s->year->gk +
                        $s->third->sst + $s->half->sst + $s->year->sst +
                        $s->third->science + $s->half->science + $s->year->science +
                        $s->third->computer + $s->half->computer + $s->year->computer
                    ;
                }else{
                    return null;
                }
                return $s;
            });
            
            $students = $students->sortByDesc('total')->values();

            $students = $students->map(function ($s, $index) {
                $s->rank = $index + 1;
                return $s;
            });

            return view('prints.index',compact('students','entry'));
        }else{
            return null;
        }

       
    }
}
