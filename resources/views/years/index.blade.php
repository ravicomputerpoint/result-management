@extends('layouts.app')

@section('content_header_title')
    Manage Yearly Marks
@endsection

@section('content_body')
    <table class="table">
        <thead>
            <tr>
                <th>Grade</th>
                <th>Roll No.</th>
                <th>Student</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($years as $year)
                <tr>
                    <td>{{ $year->grade->name }}</td>
                    <td>{{ $year->student->roll_no }}</td>
                    <td>{{ $year->student->name }}</td>
                    <td>
                        <a href="{{route('years.show',$year->id)}}" class="btn btn-primary btn-sm">Show</a>
                    </td>
                    <td>
                        <a href="{{route('years.edit',$year->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('years.destroy',$year->id)}}" method="post">
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