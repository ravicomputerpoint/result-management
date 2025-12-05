@extends('layouts.app')

@section('content_header_title')
    @if ($entry == 'third')
        Third Monthly All Student Result
    @elseif ($entry == 'half')
        Half Yearly All Student Result
    @elseif ($entry == 'yearly')
        Yearly All Student Result
    @endif
@endsection

@section('content_body')
    @foreach ($students as $student)
        @php
            if($entry == 'third'){
                $third = $student->third;
            }else if($entry == 'half'){
                $third = $student->half;
            }else if($entry == 'yearly'){
                $third = $student->year;
            }else{
                break;
            }
        @endphp
        @if ($entry == 'third')
            <div class="container-fluid border p-4 border-dark position-relative">
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
                @if ($entry == 'third')
                    <h4 class="text-center"><b>Academic Performance : (Third Monthly Examination)</b></h4>
                @elseif ($entry == 'half')
                    <h4 class="text-center"><b>Academic Performance : (Half Yearly Examination)</b></h4>
                @elseif ($entry == 'yearly')
                    <h4 class="text-center"><b>Academic Performance : (Yearly Examination)</b></h4>
                @endif
                <h4 class="text-center"><b>Class - {{$third->grade->name}}</b></h4>
                <h4 class="bg-warning p-2 text-center"><b>Student Details</b></h4>
                <table class="table table-bordered">
                    <tr>
                        <th>Admission No.</th>
                        <td>{{$third->student->admission_no}}</td>
                    </tr>
                    <tr>
                        <th>Roll No.</th>
                        <td>{{$third->student->roll_no}}</td>
                    </tr>
                    <tr>
                        <th>Student Name</th>
                        <td>{{$third->student->name}}</td>
                    </tr>
                    <tr>
                        <th>Father Name</th>
                        <td>{{$third->student->father}}</td>
                    </tr>
                    <tr>
                        <th>Mother Name</th>
                        <td>{{$third->student->mother}}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{$third->student->dob}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$third->student->address}}</td>
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
                            $total_primary = $third->hindi + $third->english + $third->math + $third->drawing + $third->rhymes;
                            $total_junior = $third->hindi + $third->english + $third->math + $third->drawing + $third->gk + $third->sst + $third->science + $third->computer;
                        @endphp
                        @if(in_array($third->grade_id, [1,2,3]))
                            <tr>
                                <th>Hindi</th>
                                <td>{{$third->hindi}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>English</th>
                                <td>{{$third->english}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Mathematics</th>
                                <td>{{$third->math}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Drawing</th>
                                <td>{{$third->drawing}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Rhymes</th>
                                <td>{{$third->rhymes}}</td>
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
                        @elseif (in_array($third->grade_id,[4,5,6,7,8,9,10,11]))
                            <tr>
                                <th>Hindi</th>
                                <td>{{$third->hindi}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>English</th>
                                <td>{{$third->english}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Mathematics</th>
                                <td>{{$third->math}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Drawing</th>
                                <td>{{$third->drawing}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>G.K.</th>
                                <td>{{$third->gk}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>S.St.</th>
                                <td>{{$third->sst}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Science</th>
                                <td>{{$third->science}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Computer</th>
                                <td>{{$third->computer}}</td>
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
            <div class="page-break"></div>
        @elseif ($entry == 'half')
            <div class="container-fluid border p-4 border-dark position-relative">
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
                @if ($entry == 'third')
                    <h4 class="text-center"><b>Academic Performance : (Third Monthly Examination)</b></h4>
                @elseif ($entry == 'half')
                    <h4 class="text-center"><b>Academic Performance : (Half Yearly Examination)</b></h4>
                @elseif ($entry == 'yearly')
                    <h4 class="text-center"><b>Academic Performance : (Yearly Examination)</b></h4>
                @endif
                <h4 class="text-center"><b>Class - {{$third->grade->name}}</b></h4>
                <h4 class="bg-warning p-2 text-center"><b>Student Details</b></h4>
                <table class="table table-bordered">
                    <tr>
                        <th>Admission No.</th>
                        <td>{{$third->student->admission_no}}</td>
                    </tr>
                    <tr>
                        <th>Roll No.</th>
                        <td>{{$third->student->roll_no}}</td>
                    </tr>
                    <tr>
                        <th>Student Name</th>
                        <td>{{$third->student->name}}</td>
                    </tr>
                    <tr>
                        <th>Father Name</th>
                        <td>{{$third->student->father}}</td>
                    </tr>
                    <tr>
                        <th>Mother Name</th>
                        <td>{{$third->student->mother}}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{$third->student->dob}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$third->student->address}}</td>
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
                            $total_primary = $third->hindi + $third->english + $third->math + $third->drawing + $third->rhymes;
                            $total_junior = $third->hindi + $third->english + $third->math + $third->drawing + $third->gk + $third->sst + $third->science + $third->computer;
                        @endphp
                        @if(in_array($third->grade_id, [1,2,3]))
                            <tr>
                                <th>Hindi</th>
                                <td>{{$third->hindi}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>English</th>
                                <td>{{$third->english}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Mathematics</th>
                                <td>{{$third->math}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Drawing</th>
                                <td>{{$third->drawing}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Rhymes</th>
                                <td>{{$third->rhymes}}</td>
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
                        @elseif (in_array($third->grade_id,[4,5,6,7,8,9,10,11]))
                            <tr>
                                <th>Hindi</th>
                                <td>{{$third->hindi}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>English</th>
                                <td>{{$third->english}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Mathematics</th>
                                <td>{{$third->math}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Drawing</th>
                                <td>{{$third->drawing}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>G.K.</th>
                                <td>{{$third->gk}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>S.St.</th>
                                <td>{{$third->sst}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Science</th>
                                <td>{{$third->science}}</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th>Computer</th>
                                <td>{{$third->computer}}</td>
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
            <div class="page-break"></div>
        @elseif ($entry == 'yearly')
            <div class="container-fluid position-relative">
                <div class="p-2" style="border: 5px double black;">
                    <img src="{{ asset('vendor/adminlte/dist/img/school_logo.png') }}" class="watermark">
                    <div class="row p-4">
                        <div class="col-2">
                            <img src="https://rasglobalacademy.in/public/vendor/adminlte/dist/img/AdminLTELogoTransparent.png" alt="..." width="150px" height="150px" class="img-rounded">
                        </div>
                        <div class="col text-center">
                            <div class="display-4" style="font-family: algerian; color: red; font-weight: bold;">
                                R.A.S. GLOBAL ACADEMY
                                <br>
                            </div>
                            <h4><b>DUBARI CHAUK, MAU, UTTAR PRADESH, 221601</b></h4>
                            <h4><b>(+91) 9648886001</b></h4>
                        </div>
                    </div>
                    <hr style="background-color: gray; border-width: 5px;">
                    <h4 class="text-center"><b>Report Card (Session : 2025 - 2026)</b></h4>
                    <h4 class="text-center"><b>Class - {{$third->grade->name}}</b></h4>
                    <h4 class="py-2 text-center text-white rounded shadow-sm" style="background-color:#c06702"><b>Student Details</b></h4>
                    <table class="table table-bordered custom-bordered-table {{ in_array($third->grade_id,[4,5,6,7,8,9,10,11]) ? 'table-sm' : '' }}">
                        <tbody>
                            <tr>
                                <th>Admission No.</th>
                                <td colspan="3">{{$third->student->admission_no}}</td>
                            </tr>
                            <tr>
                                <th>Roll No.</th>
                                <td colspan="3">{{$third->student->roll_no}}</td>
                            </tr>
                            <tr>
                                <th>Student Name</th>
                                <td colspan="3">{{$third->student->name}}</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td colspan="3">{{$third->student->dob}}</td>
                            </tr>
                            <tr>
                                <th>Father Name</th>
                                <td colspan="3">{{$third->student->father}}</td>
                            </tr>
                            <tr>
                                <th>Mother Name</th>
                                <td colspan="3">{{$third->student->mother}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$third->student->address}}</td>
                                <th>Total Attendance/Working Days</th>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                    <h4 class="py-2 text-center text-white rounded shadow-sm" style="background-color: #c06702"><b>Marks Details</b></h4>
                    <table class="table table-bordered custom-bordered-table table-sm">
                        <tbody>
                            <tr class="text-center" style="font-weight: bold">
                                <td rowspan="2" class="align-middle">Subjects</td>
                                <td colspan="2">Third Monthly Examination</td>
                                <td colspan="2">Half Yearly Examination</td>
                                <td colspan="2">Annual Examination</td>
                                <td colspan="2">Grand Total</td>
                            </tr>
                            <tr class="text-center" style="font-weight: bold">
                                <td>Obt</td>
                                <td>Max</td>
                                <td>Obt</td>
                                <td>Max</td>
                                <td>Obt</td>
                                <td>Max</td>
                                <td>Obt</td>
                                <td>Max</td>
                            </tr>
                            @if (in_array($third->grade_id,[1,2,3]))
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Hindi</td>
                                    <td>{{$third->student->third->hindi}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->hindi}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->hindi}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->hindi + $third->student->half->hindi + $third->student->year->hindi }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">English</td>
                                    <td>{{$third->student->third->english}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->english}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->english}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->english + $third->student->half->english + $third->student->year->english }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Mathematics</td>
                                    <td>{{$third->student->third->math}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->math}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->math}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->math + $third->student->half->math + $third->student->year->math }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Drawing</td>
                                    <td>{{$third->student->third->drawing}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->drawing}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->drawing}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->drawing + $third->student->half->drawing + $third->student->year->drawing }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Rhymes</td>
                                    <td>{{$third->student->third->rhymes}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->rhymes}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->rhymes}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->rhymes + $third->student->half->rhymes + $third->student->year->rhymes }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Total</td>
                                    <td>{{$third->student->third->hindi + $third->student->third->english + $third->student->third->math + $third->student->third->drawing + $third->student->third->rhymes}}</td>
                                    <td>250</td>
                                    <td>{{$third->student->half->hindi + $third->student->half->english + $third->student->half->math + $third->student->half->drawing + $third->student->half->rhymes}}</td>
                                    <td>250</td>
                                    <td>{{$third->student->year->hindi + $third->student->year->english + $third->student->year->math + $third->student->year->drawing + $third->student->year->rhymes}}</td>
                                    <td>250</td>
                                    <td style="font-weight: bold">{{ $third->student->third->hindi + $third->student->half->hindi + $third->student->year->hindi + $third->student->third->english + $third->student->half->english + $third->student->year->english +  $third->student->third->math + $third->student->half->math + $third->student->year->math + $third->student->third->drawing + $third->student->half->drawing + $third->student->year->drawing + $third->student->third->rhymes + $third->student->half->rhymes + $third->student->year->rhymes }}</td>
                                    <td style="font-weight: bold">750</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Percentage</td>
                                    <td colspan="2" style="font-weight: bold">
                                        {{ ($third->student->third->hindi + $third->student->third->english + $third->student->third->math + $third->student->third->drawing + $third->student->third->rhymes)/250*100 }}%
                                    </td>
                                    <td colspan="2" style="font-weight: bold">
                                        {{ ($third->student->half->hindi + $third->student->half->english + $third->student->half->math + $third->student->half->drawing + $third->student->half->rhymes)/250*100 }}%
                                    </td>
                                    <td colspan="2" style="font-weight: bold">
                                        {{ ($third->student->year->hindi + $third->student->year->english + $third->student->year->math + $third->student->year->drawing + $third->student->year->rhymes)/250*100 }}%
                                    </td>
                                    <td colspan="2" class="text-center" style="font-weight: bold">
                                        {{ number_format(($third->student->third->hindi + $third->student->half->hindi + $third->student->year->hindi + $third->student->third->english + $third->student->half->english + $third->student->year->english +  $third->student->third->math + $third->student->half->math + $third->student->year->math + $third->student->third->drawing + $third->student->half->drawing + $third->student->year->drawing + $third->student->third->rhymes + $third->student->half->rhymes + $third->student->year->rhymes)/750*100,2) }}%
                                    </td>                        
                                </tr>
                            @elseif (in_array($third->grade_id,[4,5,6,7,8,9,10,11]))
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Hindi</td>
                                    <td>{{$third->student->third->hindi}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->hindi}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->hindi}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->hindi + $third->student->half->hindi + $third->student->year->hindi }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">English</td>
                                    <td>{{$third->student->third->english}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->english}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->english}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->english + $third->student->half->english + $third->student->year->english }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Mathematics</td>
                                    <td>{{$third->student->third->math}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->math}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->math}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->math + $third->student->half->math + $third->student->year->math }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Drawing</td>
                                    <td>{{$third->student->third->drawing}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->drawing}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->drawing}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->drawing + $third->student->half->drawing + $third->student->year->drawing }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">G.K.</td>
                                    <td>{{$third->student->third->gk}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->gk}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->gk}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->gk + $third->student->half->gk + $third->student->year->gk }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">S.St.</td>
                                    <td>{{$third->student->third->sst}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->sst}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->sst}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->sst + $third->student->half->sst + $third->student->year->sst }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Science</td>
                                    <td>{{$third->student->third->science}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->science}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->science}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->science + $third->student->half->science + $third->student->year->science }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Computer</td>
                                    <td>{{$third->student->third->computer}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->half->computer}}</td>
                                    <td>50</td>
                                    <td>{{$third->student->year->computer}}</td>
                                    <td>50</td>
                                    <td style="font-weight: bold">{{ $third->student->third->computer + $third->student->half->computer + $third->student->year->computer }}</td>
                                    <td style="font-weight: bold">150</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Total</td>
                                    <td>{{$third->student->third->hindi + $third->student->third->english + $third->student->third->math + $third->student->third->drawing + $third->student->third->gk + $third->student->third->sst + $third->student->third->science + $third->student->third->computer}}</td>
                                    <td>400</td>
                                    <td>{{$third->student->half->hindi + $third->student->half->english + $third->student->half->math + $third->student->half->drawing + $third->student->half->gk + $third->student->half->sst + $third->student->half->science + $third->student->half->computer }}</td>
                                    <td>400</td>
                                    <td>{{$third->student->year->hindi + $third->student->year->english + $third->student->year->math + $third->student->year->drawing + $third->student->year->gk + $third->student->year->sst + $third->student->year->science + $third->student->year->computer }}</td>
                                    <td>400</td>
                                    <td style="font-weight: bold">{{ $third->student->third->hindi + $third->student->half->hindi + $third->student->year->hindi + $third->student->third->english + $third->student->half->english + $third->student->year->english +  $third->student->third->math + $third->student->half->math + $third->student->year->math + $third->student->third->drawing + $third->student->half->drawing + $third->student->year->drawing + $third->student->third->gk + $third->student->half->gk + $third->student->year->gk + $third->student->third->sst + $third->student->half->sst + $third->student->year->sst + $third->student->third->science + $third->student->half->science + $third->student->year->science + $third->student->third->computer + $third->student->half->computer + $third->student->year->computer }}</td>
                                    <td style="font-weight: bold">1200</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-left" style="font-weight: bold">Percentage</td>
                                    <td colspan="2" style="font-weight: bold">
                                        {{ ($third->student->third->hindi + $third->student->third->english + $third->student->third->math + $third->student->third->drawing + $third->student->third->gk + $third->student->third->sst + $third->student->third->science + $third->student->third->computer)/400*100 }}%
                                    </td>
                                    <td colspan="2" style="font-weight: bold">
                                        {{ ($third->student->half->hindi + $third->student->half->english + $third->student->half->math + $third->student->half->drawing + $third->student->half->gk + $third->student->half->sst + $third->student->half->science + $third->student->half->computer)/400*100 }}%
                                    </td>
                                    <td colspan="2" style="font-weight: bold">
                                        {{ ($third->student->year->hindi + $third->student->year->english + $third->student->year->math + $third->student->year->drawing + $third->student->year->gk + $third->student->year->sst + $third->student->year->science + $third->student->year->computer)/400*100 }}%
                                    </td>
                                    <td colspan="2" class="text-center" style="font-weight: bold">
                                        {{ number_format((
                                                $third->student->third->hindi + $third->student->half->hindi + $third->student->year->hindi + 
                                                $third->student->third->english + $third->student->half->english + $third->student->year->english +  
                                                $third->student->third->math + $third->student->half->math + $third->student->year->math + 
                                                $third->student->third->drawing + $third->student->half->drawing + $third->student->year->drawing + 
                                                $third->student->third->gk + $third->student->half->gk + $third->student->year->gk +
                                                $third->student->third->sst + $third->student->half->sst + $third->student->year->sst +
                                                $third->student->third->science + $third->student->half->science + $third->student->year->science +
                                                $third->student->third->computer + $third->student->half->computer + $third->student->year->computer
                                            )/1200*100,2) 
                                        }}%
                                    </td>                        
                                </tr> 
                            @endif              
                        </tbody>
                    </table>
                    <div class="d-flex text-light p-2 justify-content-between align-items-center rounded shadow-sm" style="background-color: #c06702">
                        <h4><b>Result : 
                            {{ 
                                ((
                                    $third->student->third->hindi + $third->student->half->hindi + $third->student->year->hindi + 
                                    $third->student->third->english + $third->student->half->english + $third->student->year->english +  
                                    $third->student->third->math + $third->student->half->math + $third->student->year->math + 
                                    $third->student->third->drawing + $third->student->half->drawing + $third->student->year->drawing + 
                                    $third->student->third->gk + $third->student->half->gk + $third->student->year->gk + 
                                    $third->student->third->sst + $third->student->half->sst + $third->student->year->sst + 
                                    $third->student->third->science + $third->student->half->science + $third->student->year->science + 
                                    $third->student->third->computer + $third->student->half->computer + $third->student->year->computer 
                                )/1200*100) > 33 ? 'Passed' : 'Fail'  
                            }}    
                        </b></h4>
                        <h4><b>Rank : {{$student->rank}}</b></h4>
                    </div>
                    <table class="table table-bordered border-dark mt-2 custom-bordered-table">
                        <tbody>
                            <tr>
                                <td colspan="3"><b>Date : </b></td>
                            </tr>
                            <tr>
                                <td>
                                    <br>
                                    <br>
                                    <br>
                                </td>
                                <td></td>
                                <td class="text-center"><img src="https://rasglobalacademy.in/public/assets/img/sign.png" alt="" width="100px"></td>
                            </tr>
                            <tr class="text-center">
                                <td><b>Parents</b></td>
                                <td><b>Class Teacher</b></td>
                                <td><b>Principal</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    @endforeach
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
                position: absolute;
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
        .page-break{
            page-break-after: always;
        }
        .custom-bordered-table,
        .custom-bordered-table th,
        .custom-bordered-table td {
            border: 1px solid black !important;
        }
    </style>
@endpush