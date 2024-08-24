<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arka for Training</title>

    <link rel="icon" href="img/Arka Logo.png" type="image/png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    <!--  Font Awesome  -->
    <script src="https://kit.fontawesome.com/8b7cdef8f0.js" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="css/training_v.0.3.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



</head>

<body>
    <?php include 'topnav.php'; ?>

    <nav class="container">
        <button class="btn d-lg-none mx-3" style="margin-top: -5px ;" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#demo">
            <i class="fa-solid fa-bars" style="color: #000000;"></i>
        </button>
        <div class="logo">
            <div class="logo_img">
                <img src="img/Arka_logo.png" alt="">
            </div>
        </div>
        <div class="dropdown">
            <button type="button" class="nav_dropdown" data-bs-toggle="dropdown">
                Categories <i class="fa-solid fa-chevron-down" style="color: rgb(83, 83, 83); font-size:12px;"></i>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Link 1</a></li>
                <li><a class="dropdown-item" href="#">Link 2</a></li>
                <li><a class="dropdown-item" href="#">Link 3</a></li>
            </ul>
        </div>
        <div class="srch_input">
            <input class="srch_input_1" type="text" placeholder="Search">
            <button><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
        </div>
        <div class="nav_links">
            <ul>
                <li><a href="">Identify your career</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Sign in <span class="profile_icon"><i style="font-size:25px; color:gray;"
                                class="fa-regular fa-user"></i></span> </li></a>
            </ul>
        </div>

        <!-- Offcanva -->

        <div class="offcanvas offcanvas-start offcanvas-lg" id="demo">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title mx-auto">Arka Technology</h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body">
                <div>
                    <a id="top_nav_link_mob" href="index.php">For Business</a>
                </div>

                <div>
                    <a id="top_nav_link_mob" href="training.php">For Training</a>
                </div>
                <div class="dropdown_mob">
                    <button type="button" class="nav_dropdown mt-2" data-bs-toggle="dropdown">
                        Categories <i class="fa-solid fa-chevron-down"
                            style="color: rgb(83, 83, 83); font-size:12px;"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Link 1</a></li>
                        <li><a class="dropdown-item" href="#">Link 2</a></li>
                        <li><a class="dropdown-item" href="#">Link 3</a></li>
                    </ul>
                </div>
                <ul class="nav_link_mob">
                    <li><a href="">Identify your career</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">Sign in <span class="profile_icon"><i style="font-size:25px; color:gray;"
                                    class="fa-regular fa-user"></i></span> </li></a>
                </ul>
            </div>
        </div>
        <div style="display:flex; position:relative;">
            <div class="srch_input_mob">
                <input class="srch_input_1_mob" type="text">
                <button><i class="fa-solid fa-magnifying-glass"
                        style="color: #ffffff;font-size:12px; position:relative;top:-3px;"></i></button>
            </div>

        </div>

    </nav>

    <div style="position:relative;" class="">
        <img class="cover_img_pc" src="img/Arka-Cover-1920x600-Individual.avif" width="100%" alt="">

        <div class="cover_overlay">
            <h1>Industry-focused <br>
                learning</h1>
            <p>Learn from real-world industry projects, connect with industry professionals,<br>
                apply your knowledge to practical tasks.</p>

            <div>
                <span class="cover_overlay_circle"> <a class="cover_overlay_link" href="">Find your way <i
                            class="fa-solid fa-arrow-right"></i></a></span>
            </div>
        </div>
        <img class="cover_img_mob" src="img/Arka-Cover-mob.avif" width="100%" alt="">
    </div>

    <div class="business_numbers container">
        <div>
            <h2>2700+</h2>
            <h5>Provided internships</h5>
        </div>
        <span></span>
        <div>
            <h2>75+</h2>
            <h5>Businesses + industry tie-ups</h5>
        </div>
        <span></span>
        <div>
            <h2>200+</h2>
            <h5>Trainee Programs</h5>
        </div>
    </div>

    <div id="card_slider">
    <button id="crs_left_btn"><</button>
    <button id="crs_right_btn">></button>
        <div class="container all_courses">


            <div class="all_courses_title">
                <h2>Learn industry skills in less than 6 months</h2>

                <a href="" class="explore_link" style="">Explore all courses<i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="all_courses_container ">
                <a class="all_courses_list " href="">
                    <div class="course_title">
                        <h2 class="text-black">Python</h2>
                        <p>Extensive syllabus</p>

                        <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                    </div>
                    <div class="course_details">
                        <span><i class="fa-regular fa-calendar-days"></i>120 Hours</span><br>
                        <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                    </div>
                </a>



                <a class="all_courses_list" href="">
                    <div class="course_title">
                        <h2 class="text-black">Java</h2>
                        <p>Extensive syllabus</p>

                        <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                    </div>
                    <div class="course_details">
                        <span><i class="fa-regular fa-calendar-days"></i>120 Hours</span><br>
                        <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                    </div>
                </a>


                <a class="all_courses_list" href="">
                    <div class="course_title">
                        <h2 class="text-black">Graphic Design</h2>
                        <p>Extensive syllabus</p>

                        <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                    </div>
                    <div class="course_details">
                        <span><i class="fa-regular fa-calendar-days"></i>200 Hours</span><br>
                        <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                    </div>
                </a>

                <a class="all_courses_list" href="">
                    <div class="course_title">
                        <h2 class="text-black">Front End</h2>
                        <p>Extensive syllabus</p>

                        <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                    </div>
                    <div class="course_details">
                        <span><i class="fa-regular fa-calendar-days"></i>200 Hours</span><br>
                        <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                    </div>
                </a>

                <a class="all_courses_list" href="">
                    <div class="course_title">
                        <h2 class="text-black">Back End</h2>
                        <p>Extensive syllabus</p>

                        <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                    </div>
                    <div class="course_details">
                        <span><i class="fa-regular fa-calendar-days"></i>200 Hours</span><br>
                        <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                    </div>
                </a>

                <a class="all_courses_list" href="">
                    <div class="course_title">
                        <h2 class="text-black">PHP</h2>
                        <p>Extensive syllabus</p>

                        <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                    </div>
                    <div class="course_details">
                        <span><i class="fa-regular fa-calendar-days"></i>200 Hours</span><br>
                        <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                    </div>
                </a>
            </div>

        </div>

    </div>



    <!-- Trend Courses -->

    <div class="container trand_courses">
        <div class="all_courses_title">
            <h2>Trending courses</h2>
        </div>
        <div class="trand_courses_container ">
            <a class="trend_courses_list " href="">
                <div class="course_title">
                    <h2 class="text-black">Data Science</h2>
                    <p>Extensive syllabus</p>

                    <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                </div>
                <div class="course_details">
                    <span><i class="fa-regular fa-calendar-days"></i>300 Hours</span><br>
                    <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                </div>
            </a>



            <a class="trend_courses_list" href="">
                <div class="course_title">
                    <h2 class="text-black">Full Stack</h2>
                    <p>Extensive syllabus</p>

                    <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                </div>
                <div class="course_details">
                    <span><i class="fa-regular fa-calendar-days"></i>300 Hours</span><br>
                    <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                </div>
            </a>

            <a class="trend_courses_list" href="">
                <div class="course_title">
                    <h2 class="text-black">Ai/Ml</h2>
                    <p>Extensive syllabus</p>

                    <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                </div>
                <div class="course_details">
                    <span><i class="fa-regular fa-calendar-days"></i>300 Hours</span><br>
                    <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                </div>
            </a>
        </div>

    </div>

    <div class="container trend_courses_container_mob">
        <!-- Carousel -->
        <!-- testimoniyal mobile view -->
        <div id="demo_trend" class="carousel slide mt-5" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
            </div> -->

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active text-center">

                    <a class="trend_courses_list " href="">
                        <div class="course_title">
                            <h2 class="text-black">Data Science</h2>
                            <p>Extensive syllabus</p>

                            <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                        </div>
                        <div class="course_details">
                            <span><i class="fa-regular fa-calendar-days"></i>300 Hours</span><br>
                            <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                        </div>
                    </a>

                </div>

                <div class="carousel-item text-center">
                    <a class="trend_courses_list" href="">
                        <div class="course_title">
                            <h2 class="text-black">Full Stack</h2>
                            <p>Extensive syllabus</p>

                            <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                        </div>
                        <div class="course_details">
                            <span><i class="fa-regular fa-calendar-days"></i>300 Hours</span><br>
                            <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                        </div>
                    </a>
                </div>

                <div class="carousel-item text-center">
                    <a class="trend_courses_list" href="">
                        <div class="course_title">
                            <h2 class="text-black">Ai/Ml</h2>
                            <p>Extensive syllabus</p>

                            <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                        </div>
                        <div class="course_details">
                            <span><i class="fa-regular fa-calendar-days"></i>300 Hours</span><br>
                            <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo_trend" data-bs-slide="prev">
                <span style="color: #90cab6; font-size: 20px; position: relative; right: 20px;"><i
                        class="fa-solid fa-less-than"></i></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo_trend" data-bs-slide="next">
                <span style="color: #90cab6; font-size: 20px; position: relative; left: 20px;"><i
                        class="fa-solid fa-greater-than"></i></span>
            </button>
        </div>



    </div>

    <!--    Testimonials      -->

    <div class="testimonial" style=" height: 710px;">
        <div class="container">

            <div class="text-center" style="margin-top:100px;">
                <span class="testimonial_txt">Hear from our <span style="color:#009245;">students</span></span>
            </div>

            <!-- Carousel -->

            <!-- testimoniyal mobile view -->
            <div id="demo_testi" class="carousel slide mt-5" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
            </div> -->

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">

                        <div class="text-center std_testimonial_box">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/male_pic.jpeg" alt="avatar"
                                style="width: 150px;" />

                            <p class="std_msg">
                                <i class="fas fa-quote-left pe-2"></i>
                                I pursued my internship in ccna . Teaching was ultimately best.I would recommend it for
                                others for those who wanted to enhance theirskills in the field of hardware and
                                networking.
                            </p>
                            <div class="std_details">
                                <h5 class="mb-3">Santhosh</h5>
                                <p>CCNA Internship | Hosur, TN</p>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item text-center">

                        <div class="text-center std_testimonial_box">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/girl_img.webp" alt="avatar"
                                style="width: 150px;" />

                            <p class="std_msg">
                                <i class="fas fa-quote-left pe-2"></i>
                                I am Greeshma M currently doing my BTech IT in Sri Krishna College of Engineering and
                                Technology . I planned to take an internship for Full Stack development in Arka Network
                                System and I've Successfully completed my Full Stack in Python.
                                Had a great time in learning and practicing them and worked out a project to develop a
                                Toy Store website.
                                Very thankful to have a trainer who was clear with his explanation.
                            </p>
                            <div class="std_details">
                                <h5 class="mb-3">Greeshma M</h5>
                                <p>Full Stack | Hosur, TN</p>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item text-center">

                        <div class="text-center std_testimonial_box">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/male_pic.jpeg" alt="avatar"
                                style="width: 150px;" />

                            <p class="std_msg">
                                <i class="fas fa-quote-left pe-2"></i>
                                I'm grateful to have had the opportunity to participate in the placement program
                                organized by Arka Networkz Systems, which led to my successful placement at AGATE
                                company in a desirable role. This program was incredibly beneficial for me, and I
                                appreciate Arka's efforts in making this happen.
                            </p>
                            <div class="std_details">
                                <h5 class="mb-3">Harish Kumaer</h5>
                                <p>Networking | Hosur, TN</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo_testi" data-bs-slide="prev">
                    <span style="color: #000000; font-size: 20px; position: relative; right: 20px;"><i
                            class="fa-solid fa-less-than"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo_testi" data-bs-slide="next">
                    <span style="color: #000000; font-size: 20px; position: relative; left: 20px;"><i
                            class="fa-solid fa-greater-than"></i></span>
                </button>
            </div>

        </div>
    </div>

    <!--    Footer      -->
    <footer class="bg-black p-5">
        <div class="container text-center text-white bg-black p-2">
            <div>
                <h1>Support @<span style="color:green;">Arka</span></h1>
                <p>We are available between 08:00 AM and 08:00 PM</p>
            </div>

            <div class="footer_links">
                <a href="tel:+919488434411" class=""><i class="fa-solid fa-phone"></i>+91 9488 4344 11</a>
                <a href="mailto:support@arka.org.in" class=""><i
                        class="fa-regular fa-envelope-open"></i>support@arka.org.in</a>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/training.js"></script>
</body>

</html>