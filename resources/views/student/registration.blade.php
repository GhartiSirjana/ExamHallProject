<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form of Student Section</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
    <div class="sr-section">
        <div class="container">
            <h1 class="text-center text-white mb-4">Student Registration</h1>

            <div class="form w-50 m-auto shadow-lg p-4">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" name="firstname" placeholder="Enter Student FirstName" class="form-control form-control-sm mb-3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" placeholder="Enter Student LastName" class="form-control form-control-sm mb-3">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter Student Email" class="form-control form-control-sm mb-3">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control form-control-sm mb-3">
                    </div>
                    <div class="form-group">
                        <input type="password" name="cpass" placeholder="Repeat Password" class="form-control form-control-sm mb-3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="firstname" placeholder="Enter Student FirstName" class="form-control form-control-sm mb-3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="registerno" placeholder="Enter Student Registration Number" class="form-control form-control-sm mb-3">
                    </div>
                    <div class="form-group">
                        <input type="text" name="rollno" placeholder="Enter Student Exam RollNo" class="form-control form-control-sm mb-3">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-sm btn-block">Register</button> &nbsp; &nbsp; &nbsp;
                        <span class="text-white">If You Have Account Already? <a href="">Login</a></span>
                    </div>
                </form>
            </div>
        </div>



    </div>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>