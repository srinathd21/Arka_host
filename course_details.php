<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course | Syllabus</title>
    <?php include "links.php"; ?>

    <link rel="stylesheet" href="css/course_details.css">

</head>

<body>

    <?php include "topnav.php"; ?>
    <?php include "training_nav.php"; ?>
    <?php include 'popup2.php'; ?>
    <?php include 'popup_banner.php'; ?>
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
                                <h4>Mode</h4>
                                <span id='grd_text'>Offline / Online</span>
                            </div>
                        </div>";

                    echo '<div class="crs_crad_btn_mob text-center">
                            <button onclick="showAd(\'' . addslashes($course_details["title"]) . '\')" class="crs_apply_btn_mob">Apply Now</button>
                            <button onclick="opensyllabus()" class="crs_downlode_btn_mob">View Syllabus</button>
                        </div>';
                    echo "</div>";
                
            echo '
            
            <div class="crs_img_card">
                <img src="<?php echo $img_path; ?>" class="img-fluid" alt="Course Image">
            </div>


        </div>

        <div class="crs_crad_btn text-center">
            <button onclick="showAd(\'' . addslashes($course_details["title"]) . '\')" class="crs_apply_btn">Apply Now</button>
            <button class="crs_downlode_btn" data-bs-toggle="modal" data-bs-target="#myModal">View Syllabus</button>
        </div>';
    }
} else {
    echo "No course details found.";
}
        ?>

        <!--  Syllabus Mmodel Box -->
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-fullscreen-md-down">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h2 class="modal-title"><?php echo $crs_title; ?><br><span>Curriculum</span></h2>


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
                <h2 class="mt-1"><?php echo $crs_title; ?></h2>
                <p>Curriculum</p>
            </div>
            <div class="syllabus_content">

                <ul class="crs_syllabus_model  mt-4">
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
                <h3>300%</h3>
                <h5>Job Assistance</h5>
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
                    <p>Comprehensive curriculum designed by industry experts.</p>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50">
                    <img src="img/thumbs-up-regular.svg" alt="">
                    <p>Hands-on learning with state-of-the-art lab facilities.</p>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100">
                    <img src="img/thumbs-up-regular.svg" alt="">
                    <p>Industry-recognized certifications to boost career prospects.</p>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-delay="150">
                    <img src="img/thumbs-up-regular.svg" alt="">
                    <p>Real-world exposure through industry partnerships.</p>
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
                <p>Arka has empowered over 50,000+ learners through its offline classes,
seminars, webinars, workshops and corporate trainings in cooperation with
companies and organizations with a mission to offering high-quality education,
arka has a network of in-collaboration with 75+ industries and top institutions
across South-India and continue to serve onto the mission.</p>
            </div>
            <div class="col-lg-6 col-md-12 text-center aboutus_img">
                <img src="img/aboutus.png" alt="About Us">
            </div>
        </div>
    </div>



    

    <script>
       
        function opensyllabus() {
            let syllabusdiv = document.querySelector('.syllabus_mob')
            let body = document.querySelector('body')
            syllabusdiv.style.transform = 'translateY(0px)';
            syllabusdiv.style.position = 'fixed';
            body.style.overflow = 'hidden';
        }

        function Closesyllabus() {
            let syllabusdiv = document.querySelector('.syllabus_mob')
            let body = document.querySelector('body')

            body.style.overflow = 'auto';
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