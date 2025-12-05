<?php

namespace App\Models;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['grade_id','roll_no','admission_no','name','father','mother','dob','address','is_third','is_half','is_year'];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function third()
    {
        return $this->hasOne(Third::class);
    }

    public function half()
    {
        return $this->hasOne(Half::class);
    }

    public function year()
    {
        return $this->hasOne(Year::class);
    }
}
