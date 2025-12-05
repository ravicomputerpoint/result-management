@extends('layouts.app')

@section('content_header_title')
    Update Yearly Mark Entry
@endsection

@section('content_body')
    <form action="{{route('years.update',$year->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="grade_id">Grade</label>
                <select name="grade_id" id="grade_id" class="form-control" disabled>
                    <option value="">--Select Grade--</option>
                    @foreach ($grades as $grade)
                        <option value="{{$grade->id}}" {{$year->grade_id == $grade->id ? 'selected' : ''}}>{{$grade->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="student_id">Student</label>
                <select name="student_id" id="student_id" class="form-control" disabled>
                    <option value="0">--Select Student--</option>
                    @foreach ($students as $student)
                        <option value="{{$student->id}}" {{$year->student_id == $student->id ? 'selected' : ''}}>{{$student->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Subjects</th>
                    <th>Obtained Marks</th>
                </tr>
            </thead>
            <tbody id="subjects">
                
            </tbody>
            <tfoot>
                <tr>
                    <td>
                        <a href="{{route('years.index')}}" class="btn btn-outline-danger">Back</a>
                    </td>
                    <td><input type="submit" value="Update" class="btn btn-warning"></td>
                </tr>
            </tfoot>
        </table>
    </form>
@endsection

@push('js')
    <script>
        let subjects = document.getElementById('subjects')
        let grade_id = {{$year->grade_id}}
        let hindi = {{$year->hindi ?? 0}}
        let english = {{$year->english ?? 0}}
        let math = {{$year->math ?? 0}}
        let drawing = {{$year->drawing ?? 0}}
        let rhymes = {{$year->rhymes ?? 0}}
        let gk = {{$year->gk ?? 0}}
        let sst = {{$year->sst ?? 0}}
        let science = {{$year->science ?? 0}}
        let computer = {{$year->computer ?? 0}}

        
        let primary = [1,2,3]
        let junior = [4,5,6,7,8,9,10,11]
        if(primary.includes(grade_id)){
            subjects.innerHTML = `
                <tr>
                    <td>Hindi</td>
                    <td>
                        <input type="number" name="hindi" class="form-control" value=${hindi}>
                    </td>
                </tr>
                <tr>
                    <td>English</td>
                    <td>
                        <input type="number" name="english" class="form-control" value=${english}>
                    </td>
                </tr>
                <tr>
                    <td>Mathematics</td>
                    <td>
                        <input type="number" name="math" class="form-control" value=${math}>
                    </td>
                </tr>
                <tr>
                    <td>Drawing</td>
                    <td>
                        <input type="number" name="drawing" class="form-control" value=${drawing}>
                    </td>
                </tr>
                <tr>
                    <td>Rhymes (Conv.)</td>
                    <td>
                        <input type="number" name="rhymes" class="form-control" value=${rhymes}>
                    </td>
                </tr>
            `
        }else if(junior.includes(grade_id)){
            subjects.innerHTML = `
                <tr>
                    <td>Hindi</td>
                    <td>
                        <input type="number" name="hindi" class="form-control" value=${hindi}>
                    </td>
                </tr>
                <tr>
                    <td>English</td>
                    <td>
                        <input type="number" name="english" class="form-control" value=${english}>
                    </td>
                </tr>
                <tr>
                    <td>Mathematics</td>
                    <td>
                        <input type="number" name="math" class="form-control" value=${math}>
                    </td>
                </tr>
                <tr>
                    <td>Drawing</td>
                    <td>
                        <input type="number" name="drawing" class="form-control" value=${drawing}>
                    </td>
                </tr>
                <tr>
                    <td>G.K.</td>
                    <td>
                        <input type="number" name="gk" class="form-control" value=${gk}>
                    </td>
                </tr>
                <tr>
                    <td>S.St.</td>
                    <td>
                        <input type="number" name="sst" class="form-control" value=${sst}>
                    </td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td>
                        <input type="number" name="science" class="form-control" value=${science}>
                    </td>
                </tr>
                <tr>
                    <td>Computer</td>
                    <td>
                        <input type="number" name="computer" class="form-control" value=${computer}>
                    </td>
                </tr>
            `
        }else{
            subjects.innerHTML = ''
        }
    </script>
@endpush