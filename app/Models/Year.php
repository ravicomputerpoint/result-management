<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
     protected $fillable = ['grade_id','student_id','hindi','english','math','drawing','rhymes','gk','sst','science','computer'];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
