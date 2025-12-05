@extends('layouts.app')

@section('content_header_title')
    Yearly Show Result
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
        <h4 class="text-center"><b>Academic Performance : (Yearly Examination)</b></h4>
        <h4 class="text-center"><b>Class - {{$year->grade->name}}</b></h4>
        <h4 class="bg-warning p-2 text-center"><b>Student Details</b></h4>
        <table class="table table-bordered">
            <tr>
                <th>Admission No.</th>
                <td>{{$year->student->admission_no}}</td>
            </tr>
            <tr>
                <th>Roll No.</th>
                <td>{{$year->student->roll_no}}</td>
            </tr>
            <tr>
                <th>Student Name</th>
                <td>{{$year->student->name}}</td>
            </tr>
            <tr>
                <th>Father Name</th>
                <td>{{$year->student->father}}</td>
            </tr>
            <tr>
                <th>Mother Name</th>
                <td>{{$year->student->mother}}</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>{{$year->student->dob}}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{$year->student->address}}</td>
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
                    $total_primary = $year->hindi + $year->english + $year->math + $year->drawing + $year->rhymes;
                    $total_junior = $year->hindi + $year->english + $year->math + $year->drawing + $year->gk + $year->sst + $year->science + $year->computer;
                @endphp
                @if(in_array($year->grade_id, [1,2,3]))
                    <tr>
                        <th>Hindi</th>
                        <td>{{$year->hindi}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>English</th>
                        <td>{{$year->english}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Mathematics</th>
                        <td>{{$year->math}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Drawing</th>
                        <td>{{$year->drawing}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Rhymes</th>
                        <td>{{$year->rhymes}}</td>
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
                @elseif (in_array($year->grade_id,[4,5,6,7,8,9,10,11]))
                    <tr>
                        <th>Hindi</th>
                        <td>{{$year->hindi}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>English</th>
                        <td>{{$year->english}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Mathematics</th>
                        <td>{{$year->math}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Drawing</th>
                        <td>{{$year->drawing}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>G.K.</th>
                        <td>{{$year->gk}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>S.St.</th>
                        <td>{{$year->sst}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Science</th>
                        <td>{{$year->science}}</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <th>Computer</th>
                        <td>{{$year->computer}}</td>
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