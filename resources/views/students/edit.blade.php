@extends('layouts.app')

@section('content_header_title')
    New Student
@endsection

@section('content_body')
    <form action="{{route('students.update',$student->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <label for="grade_id">Select Grade</label>
                <select name="grade_id" id="grade_id" class="form-control">
                    <option value="">--Select Grade--</option>
                    @foreach ($grades as $grade)
                        <option value="{{$grade->id}}" {{$student->grade_id == $grade->id ? 'selected' : ''}}>{{$grade->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <label for="roll_no">Roll No.</label>
                <input type="text" class="form-control" name="roll_no" value="{{$student->roll_no}}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <label for="admission_no">Admission No.</label>
                <input type="text" class="form-control" name="admission_no" value="{{$student->admission_no}}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <label for="name">Student Name</label>
                <input type="text" class="form-control" name="name" value="{{$student->name}}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <label for="father">Father Name</label>
                <input type="text" class="form-control" name="father" value="{{$student->father}}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <label for="mother">Mother Name</label>
                <input type="text" class="form-control" name="mother" value="{{$student->mother}}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <label for="dob">Date of birth</label>
                <input type="date" name="dob" id="dob" class="form-control" value="{{$student->dob}}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{$student->address}}">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <label for="Action">Action</label>
                <input type="submit" value="Update" class="form-control">
            </div>  
        </div>
    </form>
@endsection