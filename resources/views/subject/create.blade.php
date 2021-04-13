@extends('layouts.admin')
@push('styles')
<link href="{{ asset('css/subject.css')}}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <br />
            <div class="row mb-3">
                <div class="col-md-10">
                    <h4>Add New Subject</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('subjects.index') }}" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Subject Add</div>
                <div class="card-body">
                    <div class="form-wrapper">
                        <form action="{{ route('subjects.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label>Select Department </label>
                                <select id="department" class="form-select" name="department_id" class="form-control" aria-label="Default select example">
                                    <option value="">Select department</option>
                                    @foreach($departments as $department)
                                    <option value="{{$department->id}}">{{$department->department_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Select Faculty </label>
                                <select id="faculty" class="form-select" name="faculty_id" class="form-control" aria-label="Default select example">
                                    @foreach($faculties as $faculty)
                                    <option value="{{$faculty->id}}">{{$faculty->short_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label> Semester </label>
                                <input type="text" name="semester" class="form-control">
                            </div>

                            <div class="subject-input-group" x-data="{subjects : [{subjectName: '', code: ''}]}">
                                <template x-for="(item, index) in subjects" :key="index">
                                    <div class="form-row mb-3 align-items-end">
                                        <div class="form-group col mb-0">
                                            <label> Subject Name </label>
                                            <input type="text" name="subjectname[]" class="form-control">
                                        </div>
                                        <div class="form-group col mb-0">
                                            <label> SubjectCode </label>
                                            <input type="number" name="code[]" class="form-control">
                                        </div>
                                        <template x-if="index > 0">
                                            <button type="button" @click="subjects.splice(index, 1)" class="btn btn-danger btn-add-subject"><i class="fa fa-minus"></i></button>
                                        </template>
                                        <template x-if="index == 0">
                                            <button type="button" @click="subjects.push({subjectName: '', code: ''})" class="btn btn-primary btn-add-subject"><i class="fa fa-plus"></i></button>
                                        </template>
                                    </div>
                                </template>
                            </div>

                            <button type="submit" class="btn btn-primary"> Add Subject</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    document.querySelector('#department').addEventListener('change', (event) => {
        const department_id = event.target.value;
        // get all faculties of selected department id
        window.axios.get(`/department-faculties/${department_id}`).then(result => {
            let options = '';
            result.data.map(faculty => {
                options += `<option value="${faculty.id}">${faculty.name}</option>`;
            });
            document.querySelector('#faculty').innerHTML = options;
        }).catch(err => {
            console.log(err);
        })
    });
</script>
@endsection