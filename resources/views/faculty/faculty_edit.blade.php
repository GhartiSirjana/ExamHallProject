<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="faculty_show"> Back </a>
    <form action="{{route('faculty.faculty_edit', [$facultyarr->id])}}" method="post">
    @csrf
    <div class="form-group">
    <label> Name </label>
    <input type="text" name="name"  class="form-control" value="{{$facultyarr->Name}}" required > 
    </div>
    <div class="form-group">
    <label> Short Name </label>
    <input type="text" name="short_name"  class="form-control" value="{{$facultyarr->Short_Name}}" required > 
    </div>
    <div class="form-group">
    <label> Department</label>
    <input type="text" name="department"  class="form-control" value="{{$facultyarr->Department}}" required > 
    </div>
   <button type="submit" class="btn btn-primary"> submit </button>
    </form>
</body>
</html>