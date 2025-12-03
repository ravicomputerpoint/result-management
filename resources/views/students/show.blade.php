@extends('layouts.app')

@section('content_header_title')
    Student Details
@endsection

@section('content_body')
    <a href="{{route('students.index')}}" class="btn btn-info">Back</a>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>Student Id</th>
            <td>{{$student->id}}</td>
        </tr>
        <tr>
            <th>Grade</th>
            <td>{{$student->grade->name}}</td>
        </tr>
        <tr>
            <th>Roll No.</th>
            <td>{{$student->roll_no}}</td>
        </tr>
        <tr>
            <th>Admission No.</th>
            <td>{{$student->admission_no}}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$student->name}}</td>
        </tr>
        <tr>
            <th>Father Name</th>
            <td>{{$student->father}}</td>
        </tr>
        <tr>
            <th>Mother Name</th>
            <td>{{$student->mother}}</td>
        </tr>
        <tr>
            <th>Date of birth</th>
            <td>{{$student->dob}}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{$student->address}}</td>
        </tr>
    </table>
@endsection