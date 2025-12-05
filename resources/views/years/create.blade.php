@extends('layouts.app')

@section('content_header_title')
    Yearly Mark Entry
@endsection

@section('content_body')
    <form action="{{route('years.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="grade_id">Grade</label>
                <select name="grade_id" id="grade_id" class="form-control">
                    <option value="">--Select Grade--</option>
                    @foreach ($grades as $grade)
                        <option value="{{$grade->id}}">{{$grade->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="student_id">Student</label>
                <select name="student_id" id="student_id" class="form-control">
                    <option value="0">--Select Student--</option>
                    @foreach ($students as $student)
                        <option value="{{$student->id}}">{{$student->name}}</option>
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
                    <td><input type="submit" value="Submit" class="btn btn-primary"></td>
                </tr>
            </tfoot>
        </table>
    </form>
@endsection

@push('js')
    <script>
        let subjects = document.getElementById('subjects')
        let students = @json($students);
        let select_student = document.getElementById('student_id');
        document.getElementById('grade_id').addEventListener('change',(e) => {
            let grade_id = parseInt(e.target.value)
            
            select_student.innerHTML = `<option>--Select Student--</option>`

            let filltered = students.filter(s => s.grade_id == grade_id && s.is_year == 0)

            filltered.forEach(filter => {
                select_student.innerHTML += `
                    <option value=${filter.id}>${filter.name}</option>
                `
            })
            
            let primary = [1,2,3]
            let junior = [4,5,6,7,8,9,10,11]
            if(primary.includes(grade_id)){
                subjects.innerHTML = `
                    <tr>
                        <td>Hindi</td>
                        <td>
                            <input type="number" name="hindi" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td>
                            <input type="number" name="english" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Mathematics</td>
                        <td>
                            <input type="number" name="math" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Drawing</td>
                        <td>
                            <input type="number" name="drawing" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Rhymes (Conv.)</td>
                        <td>
                            <input type="number" name="rhymes" class="form-control">
                        </td>
                    </tr>
                `
            }else if(junior.includes(grade_id)){
                subjects.innerHTML = `
                    <tr>
                        <td>Hindi</td>
                        <td>
                            <input type="number" name="hindi" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td>
                            <input type="number" name="english" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Mathematics</td>
                        <td>
                            <input type="number" name="math" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Drawing</td>
                        <td>
                            <input type="number" name="drawing" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>G.K.</td>
                        <td>
                            <input type="number" name="gk" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>S.St.</td>
                        <td>
                            <input type="number" name="sst" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Science</td>
                        <td>
                            <input type="number" name="science" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Computer</td>
                        <td>
                            <input type="number" name="computer" class="form-control">
                        </td>
                    </tr>
                `
            }else{
                subjects.innerHTML = ''
            }
        })
    </script>
@endpush