<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automatic Exam Hall Arrangement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style1.css')}}">
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

    <!-- navigation part -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand text-white font-weight-bold" href="#">A E H A</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto pr-5 text-white">
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white " href="#" tabindex="-1" aria-disabled="true">About Us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white " href="#">Student Allocation</a>
                        </li>

                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white " href="#" tabindex="-1" aria-disabled="true">Teacher Allocation</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white " href="#" tabindex="-1" aria-disabled="true">Room Allcation</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link nav1 text-white " href="#" tabindex="-1" aria-disabled="true">Contact Us</a>
                        </li>
                    </ul>
                    <div class="sign-up">
                <button class="sign"><a href="{{route ('register.index')}}" class="small">Sign Up</a></button>
            </div>
            <div class="logout">
                <button class="log"><a href="{{route ('form.loginhome')}}" class="small">Log in</a></button>
            </div>
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
                        Examination is one of the major concerns in quality education. Due to increasing number of students, subjects, exam, department, staff, rooms it create a problem in improper seating arrangement. This system provides a better seating plan than a manual system which helps to handle examination process easily and in a proper manner without any delay. Main objective here is to feed the number of students and faculty list which will generate hall plan and allocation of duty immediately according to day of examination, which will be SQL database. The web server will be PHP.
                    </p>

                </div>
                
            </div>
        </div>
    </section>

    <!-- Starting of student allocation -->

    <div class="student-allocation">
        <div class="container-fluid">
            <div class="sa-heading py-4">
                <h1 class="text-white text-center">Allocation of Students</h1>
            </div>
            <div class="student-profiles row">
                <div class="profile-images col-sm-6 col-md-4">
                    <img src="images/img6.jpeg" alt="">
                </div>
                <div class="profile-description col-sm-6 col-md-7">
                    <p class="px-4 text-white">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur eos quibusdam explicabo voluptatem officiis nisi id aut quas eveniet eligendi sunt magni cumque similique inventore alias, dolores itaque, nobis dolor maiores qui sequi numquam rem! Voluptatibus nemo natus atque corrupti!
                    </p>
                    <div class="details text-center">
                        <button class="btn btn-outline-primary btn-sm">View More</button>
                    </div>
                </div>
            </div>
            <div class="student-profiles row">
                <div class="profile-description col-sm-6 col-md-7">
                    <p class="px-4 text-white">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. A dolor sit, molestiae magnam distinctio impedit quae perspiciatis laborum est nisi nulla illum, sint, ratione ipsa autem! Natus sint nam molestias officiis repellendus corrupti nesciunt cumque ratione? Autem cupiditate molestias laborum.
                    </p>
                    <div class="details text-center">
                        <button class="btn btn-outline-primary btn-sm">View More</button>
                    </div>
                </div>
                <div class="profile-images col-sm-6 col-md-4">
                    <img src="images/img9.jpeg" alt="" class="img-fluid img-responsive">
                </div>
            </div>
        </div>
    </div>

    <!-- End of student allocation -->


    <!--Starting Teacher allocation -->
    <div class="ta-section">
        <div class="container-fluid p-4">
            <div class="ta-heading py-2 text-center">
                <h1 class="font-weight-bold py-3">Allocation of Teachers</h1>
            </div>
            <div class="row">
                <div class="card col-sm-6 col-md-3 p-0" style="width: 18rem;">
                <div class="image">
                    <img src="images/teacher3.jpeg" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Madhu Pandey</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More Info</a>
                    </div>
                </div>
                <div class="card col-sm-6 col-md-3 p-0" style="width: 18rem;">
                <div class="image">
                    <img src="images/teacher1.jpeg" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Himal Bhattarai</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More Info</a>
                    </div>
                </div>
                <div class="card col-sm-6 col-md-3 p-0" style="width: 18rem;">
                <div class="image">
                    <img src="images/teacher4.jpeg" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">khemaraj Pandey</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More Info</a>
                    </div>
                </div>
                <div class="card col-sm-6 col-md-3 p-0" style="width: 18rem;">
                <div class="image">
                    <img src="images/teacher5.jpeg" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Chiranjive Regmi</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">More Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Ending Teacher allocation -->
    <!--Starting Room allocation -->
    <div class="ra-section my-3 py-4">
        <div class="container-fluid">
            <div class="ra-heading py-4">
                <h1 class="text-center text-white">Allocation of Room</h1>
            </div>
            <div class="row room">
                <div class="col-sm-6 col-md-3 shadow-lg p-3 mb-5 rounded">
                    <img src="images/img7.jpeg" alt="" class="img-fluid rounded img-responsive">
                </div>
                <div class="col-sm-6 col-md-3 shadow p-3 mb-5 rounded">
                    <img src="images/img3.jpeg" alt="" class="img-fluid rounded img-responsive">
                </div>
                <div class="col-sm-6 col-md-3 shadow p-3 mb-5 rounded">
                    <img src="images/img6.jpeg" alt="" class="img-fluid rounded img-responsive">
                </div>
                <div class="col-sm-6 col-md-3 shadow p-3 mb-5 rounded">
                    <img src="images/img8.jpeg" alt="" class="img-fluid rounded img-responsive">
                </div>

            </div>
        </div>
    </div>
    <!--Ending Room allocation -->

    <!-- Team Members -->
    <div class="team">
        <div class="container-fluid">
            <h1 class="m-0">OUR TEAM</h1>
            <div class="row p-3">
                <div class="col-md-3 tm text-center m-0 p-2">
                    <div class="img-box">
                        <img src="images/img8.jpeg" class="img-responsive" alt="">
                        <ul>
                            <a href="">
                                <li><i class="fab fa-facebook-f"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-twitter"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-linkedin"></i></li>
                            </a>
                        </ul>
                    </div>
                    <h2>Sirjana Gharti</h2>
                    <h3>CSIT Student</h3>
                    <p>She is an IT student. She likes to coding and spend most of the time in coding. She used to PHP scripting language to code. She loves PHP very much.</p>
                </div>
                <div class="col-md-3 tm text-center m-0 p-2">
                    <div class="img-box">
                        <img src="images/img6.jpeg" class="img-responsive" alt="">
                        <ul>
                            <a href="">
                                <li><i class="fab fa-facebook-f"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-twitter"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-linkedin"></i></li>
                            </a>
                        </ul>
                    </div>
                    <h2>Sharmila Parajuli</h2>
                    <h3>CSIT Student</h3>
                    <p>She is an IT student. She is very serious girl. She is also talented girl.she love coding.she spend most of time in coding.</p>
                </div>
                <div class="col-md-3 tm text-center m-0 p-2">
                    <div class="img-box">
                        <img src="images/img7.jpeg" class="img-responsive" alt="">
                        <ul>
                            <a href="">
                                <li><i class="fab fa-facebook-f"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-twitter"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-linkedin"></i></li>
                            </a>
                        </ul>
                    </div>
                    <h2>Anita Khanal</h2>
                    <h3>CSIT Student</h3>
                    <p>She is an IT student. She is very funny girls and I seem her most of the time to laugh. she loves coding.</p>
                </div>
                <div class="col-md-3 tm text-center m-0 p-2">
                    <div class="img-box">
                        <img src="images/img9.jpeg" class="img-responsive" alt="">
                        <ul>
                            <a href="">
                                <li><i class="fab fa-facebook-f"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-twitter"></i></li>
                            </a>
                            <a href="">
                                <li><i class="fab fa-linkedin"></i></li>
                            </a>
                        </ul>
                    </div>
                    <h2>Eleesha Gyawali</h2>
                    <h3>CSIT Student</h3>
                    <p>She is an IT student.she loves coding and spend most time in coding</p>
                </div>
            </div>
        </div>

        <!-- contact section start -->
        <section class="contact p-5" id="contact">
            <div class="container-fluid">
                <div class="contact-heading">
                    <h1 class="text-center text-white">Contact Us</h1>
                </div>
                <form action="" class="w-50 m-auto" data-aos="fade-up" data-aos-delay="300">
                    <div class="form-group">
                        <input type="text" id="name" name="name" autocomplete="off" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" autocomplete="off" required>
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
        <!-- contact section end -->

        <!-- footer section start -->
        <section>
            <div class="container-fluid" style="background-color:#6d0d17;">
                <div class="footer p-3">
                    <h5 class="text-white text-center font-weight-bold">&copy; Automatic Exam Hall Arrangement</h5>
                </div>
            </div>
        </section>
        <!-- footer section end -->

    </div>

</body>

</html>