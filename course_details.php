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

    <div class="container">
        <div class="course_details_card">
            <?php
            $crs_category = $_GET['category'];
            $crs_title = $_GET['title'];

            $sql = "SELECT * FROM course_form WHERE title = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $crs_title);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($course_details = $result->fetch_assoc()) {
                    //{$course_details['description']}
                    echo "<div class='crs_card_left'>";
                    echo "<span id='grd_text' class='crs_title'>$crs_title</span>";
                    echo "<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima illo voluptates vitae facilis, veniam non
        recusandae, rerum dolorem rerum adipisci est voluptatem in optio officia illo rem perspiciatis omnis
        itaque accusamus. Optio aliquid laboriosam magnam recusandae ipsam!</p>";

                    echo '<div class="crs_img_card_mob">
                    <img src="img/crs_img.png" class="img-fluid" alt="">
                </div>';

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
            <button class="crs_apply_btn_mob">Apply Now</button>
            <button class="crs_downlode_btn_mob">Downlode Syllabus</button>
        </div>';

                    echo "</div>";
                }
            } else {
                echo "No course_details found.";
            }
            ?>
            <div class="crs_img_card">
                <img src="img/crs_img.png" class="img-fluid" alt="">
            </div>

        </div>

        <div class="crs_crad_btn text-center">
            <button class="crs_apply_btn">Apply Now</button>
            <button class="crs_downlode_btn">Downlode Syllabus</button>
        </div>


    </div>

    <div class="container text-center mt-4">
        <span id="grd_text" class="slogan_txt">Topic</span>
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
            <div class="benefits_img_box col-lg-6 col-md-12">
                <img src="img/benefits_img.jpg" alt="">
            </div>

            <div class="benefits_txt col-lg-6 col-md-12">
                <div>
                    <img src="img/thumbs-up-regular.svg" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
                <div>
                    <img src="img/thumbs-up-regular.svg" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
                <div>
                    <img src="img/thumbs-up-regular.svg" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
                <div>
                    <img src="img/thumbs-up-regular.svg" alt="">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container crs_aboutus ">
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
                <img src="img/aboutus.png" alt="">
            </div>
        </div>

    </div>

    <?php include "training_footer.php"; ?>

<?php include "supports.php"; ?>

</body>

</html>