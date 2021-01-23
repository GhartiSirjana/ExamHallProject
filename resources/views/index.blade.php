<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index file of AEHA</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <section>
        <div class="container-fluid m-0 p-0">
            <div class="head-section">
                <div class="main-top">
                    <div class="phone-number">
                        <span class="phone pl-4"><i class="fas fa-phone-alt"></i>&nbsp; 9845678534</span>
                    </div>
                    <div class="email-address">
                        <span class="pl-5 email"><i class="fas fa-envelope-open"></i>&nbsp;info@gmail.com</span>
                    </div>
                </div>
                <div class="social-media pr-4">
                    <i class="pl-1 fab fa-facebook-f"></i>
                    <i class="pl-2 fab fa-twitter"></i>
                    <i class="pr-4 fas fa-wifi"></i>
                    <a href="logout.php" class="login">Logout</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 pr-5 text-white">
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white " href="#" tabindex="-1" aria-disabled="true">About Us</a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white " href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
                        </li>
                    </ul>

                </div>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto p-0 mb-lg-0 ml-auto text-white">
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white active" aria-current="page" href="SR.php">Student registration</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white " href="register.php" tabindex="-1" aria-disabled="true">Administration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <div class="container-fluid m-0 p-0">
            <div class="main-body">
                <div class="body-heading">
                    <h1 class="text-white">Automatic Exam Hall Arrangement</h1>
                    <div class="para text-white text-center">
                        <p class="">We are here to minimizing the manual work of Administration through our website</p>
                    </div>
                    <div class="getstart text-center">
                        <button class="start font-weight-bold">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid m-0 p-0">
            <div class="about py-5">
                <div class="about-heading text-center py-2">
                    <h1>About Us</h1>
                </div>
                <div class="paragraph">
                    <p class="pt-2 px-5 detail">
                        Examination is one of the major concerns in quality education. Due to increasing number of students, subjects, exam, department, staff, rooms it create a problem in improper seating arrangement. This system provides a better seating plan than a manual system which helps to handle examination process easily and in a proper manner without any delay. Main objective here is to feed the number of students and faculty list which will generate hall plan and allocation of duty immediately according to day of examination, which will be SQL database. The web server will be PHP
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- starting of contact section -->
    <section class="contact" id="contact">
        <div class="container-fluid">
            <div class="section-heading">
                <h1 class="text-center text-white pb-4">Contact Us</h1>
            </div>
            <form action="" class="w-50 m-auto" data-aos="fade-up" data-aos-delay="300">
                <div class="form-group">
                    <input type="text" id="name" name="name"  autocomplete="off" required>
                    <label for="name">Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email"  autocomplete="off" required>
                    <label for="email">Email</label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <div class="form-group">
                    <input type="password" name="cpassword" required>
                    <label for="">Confirm Password</label>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </section>
    <!-- Ending Contact section -->
    <section>
        <div class="container-fluid m-0 p-0">
            <div class="footer p-2">
                <h4 class="text-center text-white small">&copy; Automatic Exam Hall Arrangement</h4>
            </div>
        </div>
    </section>

</body>

</html>