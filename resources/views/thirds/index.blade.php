@extends('layouts.app')

@section('content_header_title')
    Manage Third Monthly Marks
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
            @foreach ($thirds as $third)
                <tr>
                    <td>{{ $third->grade->name }}</td>
                    <td>{{ $third->student->roll_no }}</td>
                    <td>{{ $third->student->name }}</td>
                    <td>
                        <a href="{{route('thirds.show',$third->id)}}" class="btn btn-primary btn-sm">Show</a>
                    </td>
                    <td>
                        <a href="{{route('thirds.edit',$third->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('thirds.destroy',$third->id)}}" method="post">
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