<link rel="stylesheet" href="css/training_footer.css">

<div class="footer_container" id="footer_container">
    <div class="container">
        <div class="foot_logo_img mb-4">
            <img src="img/Arka_logo.png" alt="">
        </div>

        <div class="row mb-4">
            <div class="col-lg-3 col-md-6 col-6 foot_links">
                <h5>Links</h5>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="all_course.php?category=Software&title=Python">Cources</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-6 foot_cours">
                <div>
                    <h5>Trending Course</h5>
                    <?php
                    $query = 'SELECT * FROM course_form where trending="Yes"  and main_domain="No" ';
                    $ans = $conn->query($query);
                    ?>
                    <ul>
                        <?php
                        if ($ans->num_rows > 0) {
                            $tnum = 1;
                            while ($row = $ans->fetch_assoc()) {
                                echo '<li><a href="course_details.php?category=' . $row["category"] . '&title=' . $row["title"] . '">'.$row["title"].'</a></li>';
                                $tnum = $tnum+1;
                                if($tnum == 4) break;
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="offer_div">
                    <h5>Offer Course</h5>
                    <?php
                    $query = 'SELECT * FROM course_form where offer="Yes"  and main_domain="No"';
                    $ans = $conn->query($query);
                    ?>
                    <ul>
                        <?php
                        if ($ans->num_rows > 0) {
                            $onum = 1;
                            while ($row = $ans->fetch_assoc()) {
                                echo '<li><a href="course_details.php?category=' . $row["category"] . '&title=' . $row["title"] . '">'.$row["title"].'</a></li>';
                                $onum = $onum+1;
                                if($onum == 4) break;
                            }
                        }
                        ?>
                    </ul>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-6 foot_cours_mob">
                <div>
                    <h5>Offer Course</h5>
                    <?php
                    $query = 'SELECT * FROM course_form where offer="Yes" and main_domain="No"';
                    $ans = $conn->query($query);
                    ?>
                    <ul>
                        <?php
                        if ($ans->num_rows > 0) {
                            $num = 1;
                            while ($row = $ans->fetch_assoc()) {
                                echo '<li><a href="course_details.php?category=' . $row["category"] . '&title=' . $row["title"] . '">'.$row["title"].'</a></li>';
                                $onum = $onum+1;
                                if($onum == 4) break;
                            }
                        }
                        ?>
                    </ul>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-6 foot_work_hrs">
                <div class="mb-4">
                    <h5>Working Hours</h5>
                    <div class="">
                        <p>Mon-Fri: 9:30Am - 8:00Pm</p>
                        <p>Sat-Sun: 9:30Am - 8:00Pm</p>
                    </div>
                </div>

                <div class="get_in">
                    <h5>Get In Touch</h5>

                    <div class="foot_supports_links">
                        <a href="tel:+919488434411" class=""><i class="fa-solid fa-phone"></i>+91 94884 34411</a>
                        <a href="mailto:support@arka.org.in" class=""><i
                                class="fa-regular fa-envelope-open"></i>support@arka.org.in</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-6 foot_work_hrs_mob">
                <div>
                    <h5>Get In Touch</h5>

                    <div class="foot_supports_links">
                        <a href="tel:+919488434411" class=""><i class="fa-solid fa-phone"></i>+91 94884 34411</a>
                        <a href="mailto:support@arka.org.in" class=""><i
                                class="fa-regular fa-envelope-open"></i>support@arka.org.in</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-6 foot_getin_tch">
                <h5>Address</h5>
                <div class="">
                    <p>Bank of Baroda upstairs,</p>
                    <p>Vasavi Nagar, No 7-C,</p>
                    <p>Sai Ganesha Arcade,</p>
                    <p>Hosur, Tamil Nadu,</p>
                    <p>635109.</p>
                </div>

            </div>
        </div>
        <div class="text-center">
            <div class="foot_social_media mb-3">
                <a href="https://www.facebook.com/share/15UQWBSVqL/?mibextid=LQQJ4d" target="_blank"><i
                        class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://www.instagram.com/arka.officially/" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/arka-technologies-ind/" target="_blank"><i
                        class="fa-brands fa-linkedin"></i></a>
            </div>
            <p style="font-weight:600;">© 2024, Arka's Network Pvt. Ltd.</p>
        </div>

    </div>
</div>

<!--  Font Awesome  -->
<script src="https://kit.fontawesome.com/8b7cdef8f0.js" crossorigin="anonymous"></script>