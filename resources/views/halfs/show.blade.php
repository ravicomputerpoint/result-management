@extends('layouts.app')

@section('content_header_title')
    Half Yearly Show Result
@endsection

@section('content_body')
    <div class="container-fluid border p-4 border-dark">
        <img src="{{ asset('vendor/adminlte/dist/img/school_logo.png') }}" class="watermark">
        <div class="row align-items-center">
            <div class="col">
                <img src="{{asset('/vendor/adminlte/dist/img/school_logo.png')}}" alt="Logo" width="120px">
            </div>
            <div class="col-10 text-center">
                <h1 class="display-4">R.A.S. GLOBAL ACADEMY</h1>
                <h4><b>DUBARI CHAUK, MAU, UTTAR PRADESH, 221601</b></h4>
            </div>
        </div>
        <hr>
        <h4 class="text-center"><b>Report Card (Session : 2025 - 2026)</b></h4>
        <h4 class="text-center"><b>Academic Performance : (Half Yearly Examination)</b></h4>
        <h4 class="text-center"><b>Class - {{$half->grade->name}}</b></h4>
        <h4 class="bg-warning p-2 text-center"><b>Student Details</b></h4>
        <table class="table table-bordered">
            <tr>
                <th>Admission No.</th>
                <td>{{$half->student->admission_no}}</td>
            </tr>
            <tr>
                <th>Roll No.</th>
                <td>{{$half->student->roll_no}}</td>
            </tr>
            <tr>
                <th>Student Name</th>
                <td>{{$half->student->name}}</td>
            </tr>
            <tr>
                <th>Father Name</th>
                <td>{{$half->student->father}}</td>
            </tr>
            <tr>
                <th>Mother Name</th>
                <td>{{$half->student->mother}}</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>{{$half->student->dob}}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{$half->student->address}}</td>
            </tr>
        </table>
        <h4 class="bg-warning p-2 text-center"><b>Mark Details</b></h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Subjects</th>
                    <th>Obtained Marks</th>
                    <th>Maximum Marks</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total_primary = $half->hindi + $half->english + $half->math + $half->drawing + $half->rhymes;
                    $total_junior = $half->hindi + $half->english + $half->math + $half->drawing + $half->gk + $half->sst + $half->science + $half->computer;
                @endphp
                @if(in_array($half->grade_id, [1,2,3]))
                    <tr>
                        <th>Hindi</th>
                        <td>{{$half->hindi}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>English</th>
                        <td>{{$half->english}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Mathematics</th>
                        <td>{{$half->math}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Drawing</th>
                        <td>{{$half->drawing}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Rhymes</th>
                        <td>{{$half->rhymes}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Grand Total</th>
                        <th>{{$total_primary}}</th>
                        <th>250</th>
                    </tr>
                    <tr>
                        <th>Percentage</th>
                        <th colspan="2" class="text-center">
                            {{$total_primary/250*100}}%
                        </th>
                    </tr>
                @elseif (in_array($half->grade_id,[4,5,6,7,8,9,10,11]))
                    <tr>
                        <th>Hindi</th>
                        <td>{{$half->hindi}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>English</th>
                        <td>{{$half->english}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Mathematics</th>
                        <td>{{$half->math}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Drawing</th>
                        <td>{{$half->drawing}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>G.K.</th>
                        <td>{{$half->gk}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>S.St.</th>
                        <td>{{$half->sst}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Science</th>
                        <td>{{$half->science}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Computer</th>
                        <td>{{$half->computer}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Grand Total</th>
                        <th>{{$total_junior}}</th>
                        <th>400</th>
                    </tr>
                    <tr>
                        <th>Percentage</th>
                        <th colspan="2" class="text-center">
                            {{$total_junior/400*100}}%
                        </th>
                    </tr>
                @endif
            </tbody>
        </table>
        <div class="row p-3 border border-dark">
            <div class="col-12 my-4">
                <h5><b>Date:</b></h5>
            </div>
            <div class="col-4">
                <h5><b>Parents:</b></h5>
            </div>
            <div class="col-4">
                <h5><b>Class Teacher:</b></h5>
            </div>
            <div class="col-4">
                <h5><b>Principal:</b></h5>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        @media print{
            .main-footer{
                display: none;
            }
            .content{
                background-color: white;
            }
            .watermark {
                display: block !important;
                position: fixed;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                opacity: 0.08;
                width: 550px;
                z-index: 0;
                pointer-events: none;
            }
        }
        .display-4{
            font-weight: 600;
        }
        .heading-4{
            font-weight: 400
        }
        .watermark{
            display: none;
        }
    </style>
@endpush