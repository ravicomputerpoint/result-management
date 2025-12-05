@extends('layouts.app')

@section('content_header_title')
    Print All Students Marksheet By Grade
@endsection

@section('content_body')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Grade Name</th>
                <th>Third Monthly Print</th>
                <th>Half Yearly Print</th>
                <th>Yearly Print</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades as $grade)
                <tr>
                    <th>{{$grade->name}}</th>
                    <td>
                        <a href="/print/third/{{$grade->id}}" class="btn btn-danger">
                            <i class="fa fa-print"></i>
                        </a>
                    </td>
                    <td>
                        <a href="/print/half/{{$grade->id}}" class="btn btn-warning">
                            <i class="fa fa-print"></i>
                        </a>
                    </td>
                    <td>
                        <a href="/print/yearly/{{$grade->id}}" class="btn btn-success">
                            <i class="fa fa-print"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection