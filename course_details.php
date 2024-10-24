<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course | Syllabus</title>
    <?php include "links.php"; ?>

    <link rel="stylesheet" href="css/course_details.css">

    <link rel="stylesheet" href="css/popup_banner.css">
</head>

<body>

    <?php include "topnav.php"; ?>
    <?php include "training_nav.php"; ?>

    <div class="container" id="first_container">
        <div class="course_details_card" data-aos="fade-down" data-aos-duration="1500">
            <?php
            include "db_link.php"; // Include your database connection
            
            $crs_category = $_GET['category'];
            $crs_title = $_GET['title'];

            // Fetch the course details including the image path and file path
            $sql = "SELECT * FROM course_form WHERE title = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $crs_title);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($course_details = $result->fetch_assoc()) {
                    // Fetching the course details
                    $img_path = $course_details['img_path'];

                    echo "<div class='crs_card_left'>";
                    echo "<span id='grd_text' class='crs_title'>$crs_title</span>";
                    echo "<p>{$course_details['description']}</p>";

                    // Display the uploaded image
                    echo '<div class="crs_img_card_mob">
                            <img src="' . $img_path . '" class="img-fluid" alt="Course Image">
                        </div>';

                    // Displaying course cost and other details
                    echo "<div class='course_cost'>
                            <div>
                                <h4>Type</h4>
                                <span id='grd_text'>{$crs_category}</span>
                            </div>
                            <div>
                                <h4>Duration</h4>
                                <span id='grd_text'>{$course_details['hours']} hours</span>
                            </div>
                            <div>
                                <h4>Fees</h4>
                                <span id='grd_text'>Rs: {$course_details['cost']}</span>
                            </div>
                        </div>";

                    echo '<div class="crs_crad_btn_mob text-center">
                            <button onclick="popupform()" class="crs_apply_btn_mob">Apply Now</button>
                            <button onclick="opensyllabus()" class="crs_downlode_btn_mob">View Syllabus</button>
                        </div>';
                    echo "</div>";
                }
            } else {
                echo "No course details found.";
            }

            ?>
            <div class="crs_img_card">
                <img src="<?php echo $img_path; ?>" class="img-fluid" alt="Course Image">
            </div>


        </div>

        <div class="crs_crad_btn text-center">
            <button onclick="popupform()" class="crs_apply_btn">Apply Now</button>
            <button class="crs_downlode_btn" data-bs-toggle="modal" data-bs-target="#myModal">View Syllabus</button>
        </div>

        <!--  Syllabus Mmodel Box -->
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-fullscreen-md-down">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $crs_title; ?> Syllabus</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">

                        <ul class="crs_syllabus_model">
                            <?php
                            $sql = "SELECT syllabus FROM course_form WHERE title = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("s", $crs_title);
                            $stmt->execute();

                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {

                                $row = $result->fetch_assoc();
                                $data = $row['syllabus'];

                                // Split the data by commas into an array
                                $dataArray = explode(",", $data);
                                foreach ($dataArray as $item) {
                                    echo "<li>" . htmlspecialchars(trim($item)) . "</li>";
                                    echo '<span class="lineicon"></span>';
                                }
                            } else {
                                echo "No data found";
                            }
                            ?>

                        </ul>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="syllabuaContainer">
        <div class="syllabus_mob">
        <button onclick="Closesyllabus()"><i class="fa-solid fa-x"></i></button>
        <div class="syllabuscontent">
        <h2 class="mt-1"><?php echo $crs_title ;?></h2>
        <p>Curriculum</p>
        </div>
            <div class="syllabus_content">
                
                <ul class="crs_syllabus_model">
                    <?php
                    $sql = "SELECT syllabus FROM course_form WHERE title = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s", $crs_title);
                    $stmt->execute();

                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {

                        $row = $result->fetch_assoc();
                        $data = $row['syllabus'];

                        // Split the data by commas into an array
                        $dataArray = explode(",", $data);
                        foreach ($dataArray as $item) {
                            echo "<li>" . htmlspecialchars(trim($item)) . "</li>";
                            echo '<span class="lineicon"></span>';
                        }
                    } else {
                        echo "No data found";
                    }
                    ?>

                </ul>
            </div>

        </div>
    </div>



    <div class="container text-center mt-4" data-aos="zoom-in-down" data-aos-duration="900">
        <span id="grd_text" class="slogan_txt">Highlights</span>
        <br>
        <div class="institute_words">
            <div class="">
                <img src="img/chart-line-solid.svg" alt="">
                <h3>57%</h3>
                <h5>Avg Salary Hike</h5>
            </div>
            <div class="">
                <img src="img/handshake-solid.svg" alt="">
                <h3>50+</h3>
                <h5>Hiring Partners</h5>
            </div>
            <div class="">
                <img src="img/user-regular.svg" alt="">
                <h3>5/6</h3>
                <h5>Positive Career</h5>
            </div>
            <div class="">
                <img src="img/thumbs-up-solid.svg" alt="">
                <h3>100%</h3>
                <h5>Placement Support</h5>
            </div>
        </div>
    </div>

    <div class="container crs_benefits ">
        <span id="grd_text" class="benefits_text">Benefits</span>
        <div class="row">
            <div class="benefits_img_box col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1400">
                <img src="img/benefits_img.jpg" alt="">
            </div>

            <div class="benefits_txt col-lg-6 col-md-12">
                <div data-aos="fade-left" data-aos-duration="1000">
                    <img src="img/thumbs-up-regular.svg" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50">
                    <img src="img/thumbs-up-regular.svg" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                    <img src="img/thumbs-up-regular.svg" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="150">
                    <img src="img/thumbs-up-regular.svg" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container crs_aboutus " data-aos="zoom-in" data-aos-duration="1000">
        <div class="text-center">
            <h3>About Us</h3>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12 crs_about_txt ">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quae laudantium aspernatur illo
                    explicabo ea velit commodi nulla consectetur harum. Ea exercitationem quis assumenda cum rem
                    nesciunt quaerat suscipit voluptatibus iure enim placeat, quas, minima quasi nemo cumque error
                    perspiciatis eaque vero, rerum dolore labore voluptatum ipsam accusamus! Facere, quaerat!</p>
            </div>
            <div class="col-lg-6 col-md-12 text-center aboutus_img">
                <img src="img/aboutus.png" alt="About Us">
            </div>
        </div>
    </div>



    <div class="popup_banner">
        <div class="banner_content">
            <button class="banner_close_btn" onclick="banner_close()">X</button>
            <div class="banner_getdata">
                <div class="popbanner_title">
                    <h3>Get in touch</h3>
                </div>

                <div class="bannerinputs">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="contact">Contact</label>
                    <input type="tel" name="contact" id="contact">
                    <label for="course">Course</label>
                    <input type="text" name="course" id="course">

                    <div>
                        <button onclick="opentq()" class="popupSendbtn">SEND <span><i class="fa-solid fa-envelope"
                                    id="lettericon"></i></span></button>
                    </div>
                </div>
            </div>
            <div class="bannermsg">
                <div>
                    <h1>Thank <br>You.</h1>
                </div>
                <div>
                    <p>We'll be in touch <br> Shortly!</p>

                    <div>
                        <button onclick="banner_close()" class="popupNextbtn">Next <span><i id="arrowicon"
                                    class="fa-solid fa-arrow-right"></i></span></button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        let top_banner_div = document.querySelector('.popup_banner')

        function banner_close() {
            top_banner_div.style.display = 'none'
            localStorage.setItem('adShown', 'true');
        }

        function popupform() {
            document.querySelector('.popup_banner').style.display = 'block';
        }


        let inptbox = document.querySelector(".banner_getdata")
        let msgbox = document.querySelector(".bannermsg")

        function opentq() {
            inptbox.style.display = 'none';
            msgbox.style.display = 'block';
        }

        setTimeout(showAd, 5000);


        function opensyllabus() {
            let syllabusdiv = document.querySelector('.syllabus_mob')
            syllabusdiv.style.transform = 'translateY(0px)';
            syllabusdiv.style.position = 'fixed';
        }

        function Closesyllabus() {
            let syllabusdiv = document.querySelector('.syllabus_mob')
            syllabusdiv.style.transform = 'translateY(645px)';
            syllabusdiv.style.position = 'static';
        }

        // Check if the ad has been shown before
        // if (!localStorage.getItem('adShown')) {
        //     setTimeout(showAd, 5000);
        // }
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <?php include "training_footer.php"; ?>
    <?php include "supports.php"; ?>

</body>

</html>