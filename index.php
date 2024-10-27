<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arka for Training</title>

    <link rel="icon" href="img/Arka Logo.png" type="image/png">

    <?php include 'links.php'; ?>

    <!-- css -->
    <link rel="stylesheet" href="css/training_v.0.9.css">
</head>

<body>
    <?php include 'topnav.php'; ?>

    <?php include 'db_link.php'; ?>

    <?php include 'training_nav.php'; ?>

    <?php //include 'popup_banner.php'; ?>


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

    <div class="container ">
        <div id="card_slider">
            <button id="crs_left_btn" onclick="onSwipeRight()">< </button>
                    <button id="crs_right_btn" onclick="onSwipeLeft()">></button>
                    <div class="all_courses">

                        <div class="all_courses_title">
                            <h2>Learn industry skills in less than 6 months</h2>

                            <a href="all_course.php?category=Software&title=Python" class="explore_link"
                                style="">Explore all courses<i class="fa-solid fa-arrow-right"></i></a>
                        </div>

                        <div class="all_courses_container ">
                            <a class="all_courses_list " href="course_details.php?category=Software&title=Python">
                                <div class="course_title">
                                    <h2 class="">Python</h2>
                                    <p>Extensive syllabus</p>

                                    <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                                </div>
                                <div class="course_details">
                                    <span><i class="fa-regular fa-calendar-days"></i>120 Hours</span><br>
                                    <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                                </div>
                            </a>



                            <a class="all_courses_list" href="course_details.php?category=Software&title=java">
                                <div class="course_title">
                                    <h2 class="">Java</h2>
                                    <p>Extensive syllabus</p>

                                    <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                                </div>
                                <div class="course_details">
                                    <span><i class="fa-regular fa-calendar-days"></i>120 Hours</span><br>
                                    <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                                </div>
                            </a>

                            <a class="all_courses_list" href="course_details.php?category=Ui/Ux&title=Full%20Stack">
                                <div class="course_title">
                                    <h2 class="">Full Stack</h2>
                                    <p>Extensive syllabus</p>

                                    <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                                </div>
                                <div class="course_details">
                                    <span><i class="fa-regular fa-calendar-days"></i>200 Hours</span><br>
                                    <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                                </div>
                            </a>

                            <a class="all_courses_list" href="course_details.php?category=Software&title=Back%20End">
                                <div class="course_title">
                                    <h2 class="">Back End</h2>
                                    <p>Extensive syllabus</p>

                                    <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                                </div>
                                <div class="course_details">
                                    <span><i class="fa-regular fa-calendar-days"></i>200 Hours</span><br>
                                    <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                                </div>
                            </a>

                            <a class="all_courses_list" href="course_details.php?category=Software&title=PHP">
                                <div class="course_title">
                                    <h2 class="">PHP</h2>
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
    </div>



    <!-- Trend Courses -->

    <div class="container trand_courses">
        <div class="all_courses_title">
            <h2>Trending courses</h2>
        </div>
        <?php
        $query = 'SELECT * FROM course_form where trending="Yes"';
        $ans = $conn->query($query);
        ?>
        <div class="trand_courses_container ">
            <?php
            if ($ans->num_rows > 0) {
                while ($row = $ans->fetch_assoc()) {
                    echo '<a class="trend_courses_list" href="course_details.php?category=' . $row["category"] . '&title=' . $row["title"] . '">
                <div class="course_title">
                    <h2 class="">' . $row["title"] . '</h2>
                    <p>Extensive syllabus</p>

                    <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                </div>
                <div class="course_details">
                    <span><i class="fa-regular fa-calendar-days"></i>' . $row["hours"] . ' Hours</span><br>
                    <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                </div>
            </a>';
                }
            }
            ?>

        </div>

    </div>

    <div class="container trend_courses_container_mob">
        <!-- Carousel -->
        <!-- testimoniyal mobile view -->
        <div id="demo_trend" class="carousel slide mt-3" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
            </div> -->

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <?php
                $query = 'SELECT * FROM course_form where trending="Yes"';
                $ans = $conn->query($query);

                if ($ans->num_rows > 0) {
                    $active = 'active';
                    while ($row = $ans->fetch_assoc()) {
                        echo '<div class="carousel-item ' . $active . ' text-center">';
                        $active = '';
                        echo '<a class="trend_courses_list" href="course_details.php?category=' . $row["category"] . '&title=' . $row["title"] . '">
                        <div class="course_title">
                            <h2 class="">' . $row["title"] . '</h2>
                            <p>Extensive syllabus</p>

                            <span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>
                        </div>
                        <div class="course_details">
                            <span><i class="fa-regular fa-calendar-days"></i>' . $row["hours"] . ' Hours</span><br>
                            <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                        </div>
                    </a>

                </div>';
                    }
                }
                ?>

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

    <div class="testimonial" style="">
        <div class="container">

            <div class="text-center" style="margin-top:60px;">
                <span class="testimonial_txt">Hear from our <span style="color:#009245;">students</span></span>
            </div>

            <!-- Carousel -->

            <!-- testimoniyal mobile view -->
            <div id="demo_testi" class="carousel slide mt-5" style="height:370px" data-bs-ride="carousel">

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
                                <i class="fas fa-quote-left p-2"></i>
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
                                <i class="fas fa-quote-left p-2"></i>
                                Hello. This is Subhiksha and I am from Amrita Vishwa Vidhyapeetham, Coimbatore. I learnt
                                Advanced Python. I had learnt a lot of new stuffs using this course. I had great fun
                                learning the syllabus and was successfully able to code small program using
                                whatever i learnt.
                            </p>
                            <div class="std_details">
                                <h5 class="mb-3">Subhiksha</h5>
                                <p>Advanced Python | Hosur, TN</p>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item text-center">

                        <div class="text-center std_testimonial_box">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/male_pic.jpeg" alt="avatar"
                                style="width: 150px;" />

                            <p class="std_msg">
                                <i class="fas fa-quote-left p-2"></i>
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
                    <span style="color: #000000; font-size: 20px; position: absolute; right: 40px;"><i
                            class="fa-solid fa-less-than"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo_testi" data-bs-slide="next">
                    <span style="color: #000000; font-size: 20px; position: absolute; left: 40px;"><i
                            class="fa-solid fa-greater-than"></i></span>
                </button>
            </div>

        </div>
    </div>

    <!--    supports      -->
    <div class="bg-black pb-5 supports">
        <div class="container text-center text-white bg-black pt-4">
            <div>
                <h1 id="supports_txt">Support@<span style="color:green !important;">arka</span></h1>
                <p style="font-size:15px;" class="supports_txt">We are available between 08:00 AM and 08:00 PM</p>
            </div>

            <div class="supports_links">
                <a href="tel:+919488434411" class=""><i class="fa-solid fa-phone"></i>+91 9488 4344 11</a>
                <a href="mailto:support@arka.org.in" class=""><i
                        class="fa-regular fa-envelope-open"></i>support@arka.org.in</a>
            </div>
        </div>
    </div>


    <?php include 'std_doubts.php'; ?>

    <?php include 'supports.php'; ?>

    <?php include "training_footer.php"; ?>
    
    <script src="js/training.js"></script>

     <!--  Font Awesome  -->
     <script src="https://kit.fontawesome.com/8b7cdef8f0.js" crossorigin="anonymous"></script>
</body>

</html>