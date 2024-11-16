<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arka for Business</title>

    <link rel="icon" href="img/Arka Logo.png" type="image/png">

    <?php include 'links.php'; ?>

    

    <!-- _____ Slick Slider _____ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/business.v.0.1.css">


</head>

<body>

    <?php include 'topnav.php'; ?>


    <!-- Navbar -->
    <nav>
        <div class="nav container d-flex " style="font-size: 17px;">
            <button class="btn d-lg-none mx-3" style="margin-top: -5px ;" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#demo">
                <i class="fa-solid fa-bars" style="color: #000000;"></i>
            </button>
            <div class="logo">
                <a class="navbar_logo" href="index.php">
                    <img src="img/Arka_logo.png" style="200px" alt="">
                </a>
            </div>

            <div class="d-flex content me-auto">
                <div class="nav_link">
                    <a href="">Course</a>
                </div>

                <div class="nav_link">
                    <a href="">Service</a>
                </div>

                <div class="nav_link">
                    <a href="">Career</a>
                </div>

                <div class="nav_link dropdown">
                    <a class="nav_link dropbtn">More <i class="fa-solid fa-angle-down"></i></a>
                    <div class="dropdown-content">
                        <a href="php/dataform.php">Register</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>

                </div>
            </div>

            <div class="d-flex mx-3" style="margin-top:-6px;">
                <a href="tel:+919488434411" style="margin-right: 30px;"><i class="fa-solid fa-phone"
                        style="color: rgb(0, 0, 0); font-size: 13px;"></i></a>

                <a href="https://www.google.com/maps/place/Arka+Networkz+System/@12.7360388,77.8222739,17z/data=!3m1!4b1!4m6!3m5!1s0x3bae7185e99a9cb5:0x3520348054405036!8m2!3d12.7360336!4d77.8248488!16s%2Fg%2F11t1ds8dv0?authuser=0&entry=ttu"
                    target="_blank"> <i class="fa-solid fa-location-dot"
                        style="font-size: 13px; color: rgb(0, 0, 0);"></i></a>
            </div>

        </div>
    </nav>

    <!-- Offcanva -->
    <div>
        <div class="offcanvas offcanvas-start offcanvas-md" style="background-color:#f2f2f2;" id="demo">
            <div class="offcanvas-header mb-5">
                <div class="logo">
                    <a class="navbar_logo" href="index.php">
                        <img src="img/Arka_logo.png" style="200px" alt="">
                    </a>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="">
                <div>
                    <a id="top_nav_link_mob" href="business.php">For Business</a>
                </div>

                <div>
                    <a id="top_nav_link_mob" href="index.php">For Training</a>
                </div>

                <div>
                    <a id="top_nav_link_mob" href="">Service</a>
                </div>

                <div>
                    <a id="top_nav_link_mob" href="">Career</a>
                </div>

                <div class="dropdown_mob">
                    <a type="button" class="" data-bs-toggle="dropdown">
                        More <i class="fa-solid fa-chevron-down" style="color: rgb(83, 83, 83); font-size:12px;"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="php/dataform.php">Register</a></li>
                        <li><a class="dropdown-item" href="#">Link 2</a></li>
                        <li><a class="dropdown-item" href="#">Link 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- carousel Section -->

    <div id="carouselExampleCaptions1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions1" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item  active">
                <img id="carousel_img_1" class="carousel_img_lg" src="img/Arka Drops copy.jpg" width="600" class=""
                    alt="managed">
                <img id="carousel_img_1" class="carousel_img_md" src="img/Arka Drops copy_mob.jpg" width="600" class=""
                    alt="managed">

                <div class="carousel_overlay">
                    <h1>Discover the essence of
                        <br>arka
                    </h1>
                    <p>IT businesses, infrastructure solutions tailored to meet <br> the unique needs of the clients</p>
                    <form action="/submit" method="post">
                        <a class="navbar-brand1"
                            href="file:///C:/Users/dines/OneDrive/Desktop/Registor_form/Registor_form/index.html">Register
                            for free demo</a>
                    </form>
                </div>

                <div class="carousel_overlay_2 mx-auto">
                    <h2>Discover the essence of
                        <br>arka
                    </h2>
                    <p>IT businesses, infrastructure solutions tailored to meet the unique needs of the clients</p>
                    <form action="/submit" method="post">
                        <a class="navbar-brand1"
                            href="file:///C:/Users/dines/OneDrive/Desktop/Registor_form/Registor_form/index.html">Register
                            for free demo</a>
                    </form>
                </div>
            </div>
            <div class="carousel-item">
                <img id="carousel_img_2" class="carousel_img_lg" src="img\Arka Drops copy 2.jpg" class="" alt="av">
                <img id="carousel_img_2" class="carousel_img_md" src="img\Arka Drops copy 2_mob.jpg" class="" alt="av">

                <div class="sec_carousel_overlay">
                    <h1>Unlock your potential with <br>arka</h1>
                    <p>Customized app development services for businesses looking to <br> enhance their digital presence
                    </p>
                    <form action="/submit" method="post">
                        <a class="navbar-brand1"
                            href="file:///C:/Users/dines/OneDrive/Desktop/Registor_form/Registor_form/index.html">Register
                            for free demo</a>
                    </form>
                </div>

                <div class="carousel_overlay_2 mx-auto">
                    <h2>Unlock your potential with arka</h2>
                    <p>Customized app development services for businesses looking to enhance their digital presence </p>
                    <form action="/submit" method="post">
                        <a class="navbar-brand1" href="">Register
                            for free demo</a>
                    </form>
                </div>
            </div>
        </div>



    </div>
    <div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions1"
            data-bs-slide="prev">
            <span><i class="fa-solid fa-less-than"></i></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions1"
            data-bs-slide="next">
            <span><i class="fa-solid fa-greater-than"></i></span>
        </button>
    </div>


    <div id="card_content_slider" class="mt-5">
        <div class="text-center" style="margin: 100px 0px 50px;">
            <span class="grd">Easy & quick way to solve your</span><br>
            <span class="grd">business needs</span>
        </div>

        <!-- Larg screen Slider  -->
        <div class="body">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <a href="#slide_card_1" class="card swiper-slide">
                            <img src="img/Card1.jpg" alt="">
                        </a>

                        <a href="#slide_card_2" class="card swiper-slide">

                            <img src="img/Card2.jpg" alt="">

                        </a>

                        <a href="#slide_card_3" class="card swiper-slide">

                            <img src="img/Card3.jpg" alt="">

                        </a>

                        <a href="#slide_card_4" class="card swiper-slide">

                            <img src="img/Card4.jpg" alt="">

                        </a>
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- Mobile screen slider  -->
        <div class="slider">
            <div class="mx-3">
                <div class="card border-0 rounded-0">
                    <a href="#slide_card_1">
                        <img src="img/Card1.jpg" alt="">
                    </a>
                </div>
            </div>

            <div class="mx-3">
                <div class="card border-0 rounded-0">
                    <a href="#slide_card_2">
                        <img src="img/Card2.jpg" alt="">
                    </a>
                </div>
            </div>

            <div class="mx-3">
                <div class="card border-0 rounded-0">
                    <a href="#slide_card_3">
                        <img src="img/Card3.jpg" alt="">
                    </a>
                </div>
            </div>

            <div class="mx-3">
                <div class="card border-0 rounded-0">
                    <a href="#slide_card_4">
                        <img src="img/Card4.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center" style="margin: 100px 0px 50px;">
        <span class="category_txt">Explore the Categories</span>
    </div>
    <!-- Card Slider Content -->
    <div class="slide_card_content container" style="overflow: hidden;">


        <div data-aos="fade-left" data-aos-once="true" id="slide_card_1">

            <div class="slide_card_details row">
                <div class="slide_card_1_img col-lg-4">
                    <img data-aos="fade-right" data-aos-once="true" data-aos-delay="200" data-aos-duration="1000"
                        src="img/cr_web_pic.jpg" class="img-fluid" alt="">
                </div>

                <div class="slide_card_1_img_content col-lg-8" style="padding-top: 70px;">
                    <h1>Launch Your Business Website Today</h1>
                    <div style="padding-top: 30px;">
                        <p>Establish a strong online presence with our professional website development services. We
                            create stunning, responsive
                            websites that reflect your brand and engage your audience. Our team combines creative design
                            with technical
                            expertise to build websites that are not only visually appealing but also user-friendly and
                            optimized for performance.
                            Whether you need a simple informational site or a complex e-commerce platform, we tailor our
                            services to meet your
                            specific requirements. Let us help you make a lasting impression online and drive your
                            business success with a website
                            that stands out from the competition.</p>
                    </div>
                </div>
            </div>
        </div>

        <div data-aos="fade-right" data-aos-once="true" id="slide_card_2">
            <div class="slide_card_details row">

                <div class="slide_card_2_img_content col-lg-8" style="padding: 30px;">
                    <h1>Create Your Custom Business App</h1>
                    <div style="padding-top: 20px;">
                        <p>Unlock the potential of your business with our bespoke app development services. We
                            specialize in creating tailored
                            applications that cater to your unique business needs. From intuitive interfaces to robust
                            backend systems, our team
                            of experts ensures that every app we build is designed to enhance productivity and user
                            experience. Whether you're
                            looking to streamline operations, engage customers, or drive sales, our custom app solutions
                            provide the flexibility and
                            scalability to support your growth. Partner with us to transform your vision into a reality
                            and gain a competitive edge
                            in the digital marketplace.</p>
                    </div>
                </div>

                <div class="slide_card_1_img col-lg-4">
                    <img data-aos="fade-left" data-aos-once="true" data-aos-delay="200" data-aos-duration="1000"
                        src="img/app_img_cont.jpeg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div data-aos="fade-left" data-aos-once="true" id="slide_card_3">

            <div class="slide_card_details row">
                <div class="slide_card_1_img col-lg-4" style="padding-top:20px ;">
                    <img data-aos="fade-right" data-aos-once="true" data-aos-delay="200" data-aos-duration="1000"
                        src="img/cutting-edge.webp" height="300px" class="img-fluid" alt="">
                </div>

                <div class="slide_card_1_img_content col-lg-8" style="padding-top: 30px;">
                    <h1>Revolutionize Your Business with Cutting-Edge Solutions</h1>
                    <div style="padding-top: 20px;">
                        <p>Stay ahead of the curve with our cutting-edge solutions designed to revolutionize your
                            business operations. Our
                            innovative services focus on integrating the latest technologies to optimize processes,
                            improve efficiency, and drive
                            growth. From AI-powered analytics to advanced automation, we provide comprehensive solutions
                            that address your
                            specific challenges and opportunities. Our team works closely with you to understand your
                            goals and deliver
                            customized strategies that propel your business forward. Experience the future of business
                            transformation with our
                            state-of-the-art solutions.</p>
                    </div>
                </div>
            </div>
        </div>

        <div data-aos="fade-right" data-aos-once="true" id="slide_card_4">
            <div class="slide_card_details row">

                <div class="slide_card_2_img_content col-lg-8" style="padding: 30px;">
                    <h1>Reliable IT Infrastructure Solutions for Your Business</h1>
                    <div style="padding-top: 20px;">
                        <p>Ensure the stability and security of your business with our reliable IT infrastructure
                            solutions. We offer a full range of
                            services, from network design and implementation to ongoing maintenance and support. Our
                            experienced team works
                            diligently to create a robust IT environment that supports your business needs and growth
                            plans. With a focus on
                            reliability, scalability, and security, our solutions help you avoid downtime, protect your
                            data, and enhance overall
                            operational efficiency. Trust us to build and manage an IT infrastructure that keeps your
                            business running smoothly
                            and securely.</p>
                    </div>
                </div>

                <div class="slide_card_1_img col-lg-4">
                    <img data-aos="fade-left" data-aos-once="true" data-aos-delay="200" data-aos-duration="1000"
                        src="img/IT-Infrastructure.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>





    </div>

    <!--    Testimonials      -->

    <div class="testimonial" style=" height: 510px;">
        <div class="container">

            <div class="text-center mt-5">
                <span class="testimonial_txt">Testimonials</span>
            </div>

            <!-- Carousel -->
            <div id="demo_l" class="carousel slide mt-5" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
            </div> -->

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img class="rounded-circle shadow-1-strong mb-4" src="img/male_pic.jpeg" alt="avatar"
                                    style="width: 150px;" />
                                <h5 class="mb-3">Harikaran</h5>
                                <p>Java, Python ,UI/UX</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    I am learned in Java, python,and UI/UX. , Good teaching and easyly leaning for our
                                    teaching ,
                                    another one of friendly staffs , make a Good way of coching .
                                </p>
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                </ul>
                            </div>

                            <div class="col-lg-4 text-center">
                                <img class="rounded-circle shadow-1-strong mb-4" src="img/girl_img.webp" alt="avatar"
                                    style="width: 150px;" />
                                <h5 class="mb-3">Nithya</h5>
                                <p>Python</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    I started my python class one month before. Classes are good . I'm a bsc.maths
                                    student
                                    eventhought I can able to understand those codings easily by their way of teaching.
                                    Python is not so tough as we thought . So science students can also able to learn in
                                    Apollo coaching centre by a guidance of well knowledged staffs 🤗
                                </p>
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                </ul>
                            </div>

                            <div class="col-lg-4 text-center">
                                <img class="rounded-circle shadow-1-strong mb-4" src="img/male_pic.jpeg" alt="avatar"
                                    style="width: 150px;" />
                                <h5 class="mb-3">Gokul</h5>
                                <p>Hardware & Networking</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    I have completed hardware and networking course in Apollo computer . I can
                                    understood everything
                                    about networks. I got placed in sky pro technology in chennai thank you to saran sir
                                </p>
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img class="rounded-circle shadow-1-strong mb-4" src="img/male_pic.jpeg" alt="avatar"
                                    style="width: 150px;" />
                                <h5 class="mb-3">Harshan</h5>
                                <p>Python</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    This is great flatform for beginners to learn programming language.....etc ,I ever
                                    seen this like center,,,,and apollo management you doing good and rock it ,,the
                                    apollo staff are very kind to mee,how time I asked doubt they never bored to
                                    tell. I like. I wish everybody to join apollo and they gave bright future to
                                    u guyss.❤️💖
                                </p>
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                </ul>
                            </div>

                            <div class="col-lg-4 text-center">
                                <img class="rounded-circle shadow-1-strong mb-4" src="img/girl_img.webp" alt="avatar"
                                    style="width: 150px;" />
                                <h5 class="mb-3">Anjana</h5>
                                <p>Python</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    Excellent training institute in Dharmapuri, I've Joined Advance Python & SQL.
                                    Excellent Tutoring. I Highly Recommend to join here
                                    Quality Matters & here you'll get for sure 🤩
                                </p>
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                </ul>
                            </div>

                            <div class="col-lg-4 text-center">
                                <img class="rounded-circle shadow-1-strong mb-4" src="img/male_pic.jpeg" alt="avatar"
                                    style="width: 150px;" />
                                <h5 class="mb-3">Sabari</h5>
                                <p>Python Fullstack</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    I started my python full stock course before 2 weeks it's going good teaching method
                                    is very good to understand and it's very useful for me.

                                </p>
                                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                    <li><i class="fas fa-star fa-sm"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo_l" data-bs-slide="prev">
                    <span style="color: #000000; font-size: 30px; position: relative; right: 80px;"><i
                            class="fa-solid fa-less-than"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo_l" data-bs-slide="next">
                    <span style="color: #000000; font-size: 30px; position: relative; left: 80px;"><i
                            class="fa-solid fa-greater-than"></i></span>
                </button>
            </div>

            <!-- testimoniyal mobile view -->
            <div id="demo_m" class="carousel slide mt-5" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
            </div> -->

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">

                        <div class="text-center">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/male_pic.jpeg" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Harikaran</h5>
                            <p>Java, Python ,UI/UX</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                I am learned in Java, python,and UI/UX. , Good teaching and easyly leaning for our
                                teaching ,
                                another one of friendly staffs , make a Good way of coching .
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                            </ul>
                        </div>

                    </div>

                    <div class="carousel-item text-center">
                        <div class="text-center">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/male_pic.jpeg" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Gokul</h5>
                            <p>Hardware & Networking</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                I have completed hardware and networking course in Apollo computer . I can understood
                                everything
                                about networks. I got placed in sky pro technology in chennai thank you to saran sir
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="text-center">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/girl_img.webp" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Nithya</h5>
                            <p>Python</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                I started my python class one month before. Classes are good . I'm a bsc.maths student
                                eventhought I can able to understand those codings easily by their way of teaching.
                                Python is not so tough as we thought . So science students can also able to learn in
                                Apollo coaching centre by a guidance of well knowledged staffs 🤗
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="text-center">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/male_pic.jpeg" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Harshan</h5>
                            <p>Python</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                This is great flatform for beginners to learn programming language.....etc ,I ever
                                seen this like center,,,,and apollo management you doing good and rock it ,,the
                                apollo staff are very kind to mee,how time I asked doubt they never bored to
                                tell. I like. I wish everybody to join apollo and they gave bright future to
                                u guyss.❤️💖
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                            </ul>
                        </div>


                    </div>

                    <div class="carousel-item">
                        <div class="text-center">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/girl_img.webp" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Anjana</h5>
                            <p>Python</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                Excellent training institute in Dharmapuri, I've Joined Advance Python & SQL.
                                Excellent Tutoring. I Highly Recommend to join here
                                Quality Matters & here you'll get for sure 🤩
                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="col-lg-4 text-center">
                            <img class="rounded-circle shadow-1-strong mb-4" src="img/male_pic.jpeg" alt="avatar"
                                style="width: 150px;" />
                            <h5 class="mb-3">Sabari</h5>
                            <p>Python Fullstack</p>
                            <p class="text-muted">
                                <i class="fas fa-quote-left pe-2"></i>
                                I started my python full stock course before 2 weeks it's going good teaching method
                                is very good to understand and it's very useful for me.

                            </p>
                            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                                <li><i class="fas fa-star fa-sm"></i></li>
                            </ul>
                        </div>
                    </div>




                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo_m" data-bs-slide="prev">
                    <span style="color: #000000; font-size: 30px; position: relative; right: 20px;"><i
                            class="fa-solid fa-less-than"></i></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo_m" data-bs-slide="next">
                    <span style="color: #000000; font-size: 30px; position: relative; left: 20px;"><i
                            class="fa-solid fa-greater-than"></i></span>
                </button>
            </div>



        </div>
    </div>

    <div>

        <a href="#card_content_slider" class="cp_button"><i class="fa-solid fa-arrow-up fa-bounce"></i></a>
    </div>

    <!--  Footter  -->
    <div class="bg-black">
        <div class="container">
            <div id="footer" class="bg-black text-white row text-center">

                <div id="social_media" class="col-lg-4 col-12 mt-4 mb-4">
                    <h5>Social Media</h5>
                    <a href=""><i class="fa-brands fa-facebook"></i> Facebook</a><br>
                    <a href=""><i class="fa-brands fa-x-twitter"></i> Twitter</a><br>
                    <a href=""><i class="fa-brands fa-instagram"></i> Instagram</a><br>
                    <a href=""><i class="fa-brands fa-threads"></i> Threads</a><br>
                </div>


                <div class="col-lg-4 col-12 mt-4 mb-4">
                    <h5>Address</h5>
                    <div style="color: gray; line-height: 9px; font-size: 13px;">
                        <p>Bank of Baroda upstairs,</p>
                        <p>Vasavi Nagar, No 7-C,</p>
                        <p>Sai Ganesha Arcade,</p>
                        <p>Hosur,</p>
                        <p>Tamil Nadu, 635109.</p>

                    </div>

                </div>

                <div class="col-lg-4 col-12 mt-4 mb-4">
                    <h5>Contact</h5>
                    <a style="color: gray; font-size: 14px;"><i class="fa-solid fa-envelope"></i>
                        networksystemshosur@gmail.com</a> <br>
                    <a style="color: gray; font-size: 14px;"><i class="fa-solid fa-phone"></i>94884 34411</a>
                    <p style="color: gray; font-size: 14px;">&copy Copyrights 2024</p>
                </div>


            </div>
        </div>
    </div>
</body>

<!--  Carousel js  -->
<script>

    // Top Auto scroll  Button
    let s_btn = document.querySelector('.cp_button')

    window.addEventListener('scroll', function () {
        var scroll_value = window.scrollY;

        console.log(scroll_value)

        if (scroll_value >= 1100) {
            s_btn.style.display = 'block'
        }
        else if (scroll_value <= 1000) {
            s_btn.style.display = 'none'
        }
    })
</script>

<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>


<!-- JavaScript -->
<script src="js/script.js"></script>

<!--  Mobile Slider  -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script>

    $('.slider').slick({
        centerMode: true,
        dots: true,
        autoplay: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                Infinity: true,
                slidesToShow: 1
            },
        }]
    });

</script>

<!--  AOS  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

 <!--  Font Awesome  -->
 <script src="https://kit.fontawesome.com/8b7cdef8f0.js" crossorigin="anonymous"></script>



</html>