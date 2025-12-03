@extends('layouts.app')

@section('content_header_title')
    Manage Students
@endsection

@section('content_body')
    <table class="table">
        <thead>
            <tr>
                <th>Grade</th>
                <th>Roll No.</th>
                <th>Name</th>
                <th>Father</th>
                <th>Mother</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->grade->name }}</td>
                    <td>{{ $student->roll_no }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->father }}</td>
                    <td>{{ $student->mother }}</td>
                    <td>
                        <a href="{{route('students.show',$student->id)}}" class="btn btn-primary btn-sm">Show</a>
                    </td>
                    <td>
                        <a href="{{route('students.edit',$student->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('students.destroy',$student->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection