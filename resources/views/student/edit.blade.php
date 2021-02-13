<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row my-3">
                    <div class="col-md-10">
                        <h4>Add New Student</h4>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('student.index') }}" class="btn btn-success btn-sm">Back</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Add Student</div>
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{route('student.update')}}">
                            @csrf
                            @method('put')
                            <div class="col-md-12">
                                <label for="student name" class="form-label">Student Name</label>
                                <input type="text" class="form-control form-control-sm" name="name" id="studentname" value="{{student->name}}">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="student college" class="form-label">Student College</label>
                                <input type="text" class="form-control form-control-sm" name="college" id="studentname" value="{{student->college}}">
                                <!-- <select class="form-select form-control form-control-sm" aria-label="Default select example" name="college" value="{{student->college}}">
                                    @foreach($colleges as $college)
                                        <option value="{{$college->id}}">{{$college->name}}</option>
                                    @endforeach
                                </select> -->
                            </div>
                            <div class="col-md-6">
                                <label for="student department" class="form-label">Student Department</label>
                                <select class="form-select form-control form-control-sm" aria-label="Default select example" name="department" value="{{student->department}}">
                                    @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->department_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-5">
                                <label for="student faculty" class="form-label">Student Faculty</label>
                                <select class="form-select form-control form-control-sm" aria-label="Default select example" name="faculty" value="{{student->faculty}}">
                                    @foreach($faculties as $faculty)
                                    <option value="{{$faculty->id}}">{{$faculty->short_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="year" class="form-label">Year</label>
                                <select class="form-select form-control form-control-sm" aria-label="Default select example" name="year" value="{{student->year}}">
                                    <option selected>2070</option>
                                    <option>2071</option>
                                    <option value="2">2073</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="student semester" class="form-label">Semester</label>
                                <select class="form-select form-control form-control-sm" aria-label="Default select example" name="semester" value="{{student->semester}}">
                                    <option selected>1<sup>st</sup></option>
                                    <option>2nd</option>
                                    <option value="2">7th</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="student regisno" class="form-label">Registration No.</label>
                                <input type="text" class="form-control form-control-sm" name="registerNumber" id=""  value="{{student->registerNumber}}">
                                @error('registration')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="student symbolno" class="form-label">Symbol No.</label>
                                <input type="text" class="form-control form-control-sm" name="symbolno" id=""  value="{{student->symbolno}}">
                                @error('symbolno')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="student dob" class="form-label">Date of Birth</label>
                                <input type="text" class="form-control form-control-sm" name="dob" id=""  value="{{student->dob}}">
                                @error('dob')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="student mobile" class="form-label">Parent Name</label>
                                <input type="text" class="form-control form-control-sm" name="parent" id=""  value="{{student->parent}}">
                                @error('parent')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="student mobile" class="form-label">Email</label>
                                <input type="email" class="form-control form-control-sm" name="email" id=""  value="{{student->email}}">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <label for="student mobile" class="form-label">Mobile Number</label>
                                <input type="number" class="form-control form-control-sm" name="mobile" id=""  value="{{student->mobile}}">
                                @error('mobile')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-7">
                                <label for="student address" class="form-label">Address</label>
                                <input type="text" class="form-control form-control-sm" name="address" id="studentname"  value="{{student->address}}">
                                @error('address')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>