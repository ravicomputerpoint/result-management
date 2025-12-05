@extends('layouts.app')

@section('content_header_title')
    Manage Half Yearly Marks
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
            @foreach ($halfs as $half)
                <tr>
                    <td>{{ $half->grade->name }}</td>
                    <td>{{ $half->student->roll_no }}</td>
                    <td>{{ $half->student->name }}</td>
                    <td>
                        <a href="{{route('halfs.show',$half->id)}}" class="btn btn-primary btn-sm">Show</a>
                    </td>
                    <td>
                        <a href="{{route('halfs.edit',$half->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('halfs.destroy',$half->id)}}" method="post">
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