<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="row mb-3">
                    <div class="col-md-10">
                        <h4>Add New Department</h4>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('examhallproject.department') }}" class="btn btn-success btn-sm">Back</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Department Add</div>
                    <!-- @if(Session::has('success'))
                    <div class="alert alert-danger">
                        {{Session::get('success')}}
                    </div>
                    @endif -->
                    <div class="card-body">
                        <form action="{{ route('examhallproject.departmentstore') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label"><strong>Department Name</strong> </label>
                                <input type="text" name="dmname" class="form-control form-control-sm" id="dmname">
                                @error('department_name')
                                    <span class=" text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="code" class="form-label"><strong>Department Code</strong> </label>
                                <input type="text" name="dmcode" class="form-control form-control-sm" id="dmcode"">
                                @error('department_code')
                                    <span class=" text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description"><strong>Description</strong></label>
                                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                @error('description')
                                    <span class=" text-danger">{{$message}}</span>
                                @enderror
                            </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>