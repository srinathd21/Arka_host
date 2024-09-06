<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All | Courses</title>

    <?php include "links.php"; ?>
    <link rel="stylesheet" href="css/all_course.css">
</head>
<body>


<?php include "topnav.php"; ?>
<?php include "training_nav.php"; ?>

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


<?php include 'db_link.php';?>
<?php

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
$sql = "SELECT * FROM course_form";
$result = $conn->query($sql);
?>

<div class="container">
    <div class="mt-4 mb-3">
        <h3>View all courses</h3>

        <hr>
    </div>
    <div class="course_container">
        <div class="course_name">
            <h4>Software</h4>
        </div>
        <div id="software_courses">
            <?php
                if ($result->num_rows > 0) {
                    // Loop through the result set
                        while ($row = $result->fetch_assoc()) {
                            if($row["category"] == "Software") {
                                echo "<a href='' class='course_cards'>";

                            echo "<div class='course_title'>";

                                echo "<h4 class='text-black'>" . $row["title"] . "</h4>";
                                echo "<p>Extensive syllabus</p>";
                                echo '<span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>';
                        
                            echo "</div>";

                            echo '<div class="course_details">
                                    <span><i class="fa-regular fa-calendar-days"></i>' .$row["hours"]. 'Hours</span><br>
                                    <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                                </div>';

                            echo "</a>";
                            }
                        }
                } else {
                    echo "<tr><td colspan='5'>No data found</td></tr>";
                }
               
            ?>
        </div>
    </div>


    <!-- Networking Course -->

    <?php
    $sql = "SELECT * FROM course_form";
    $result = $conn->query($sql);
    ?>
    <div class="course_container">
        <div class="course_name">
            <h4>Networking</h>
        </div>
        <div id="networking_courses">
            <?php
                if ($result->num_rows > 0) {
                    // Loop through the result set
                        while ($row = $result->fetch_assoc()) {
                            if($row["category"] == "Network") {
                                echo "<a href='' class='course_cards'>";

                            echo "<div class='course_title'>";

                                echo "<h4 class='text-black'>" . $row["title"] . "</h4>";
                                echo "<p>Extensive syllabus</p>";
                                echo '<span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>';
                        
                            echo "</div>";

                            echo '<div class="course_details">
                                    <span><i class="fa-regular fa-calendar-days"></i>' .$row["hours"]. 'Hours</span><br>
                                    <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                                </div>';

                            echo "</a>";
                            }
                        }
                } else {
                    echo "<tr><td colspan='5'>No data found</td></tr>";
                }

            ?>
        </div>
    </div>
</div>

<!-- // Close the database connection
     $conn->close(); -->
    
     <?php include "supports.php";?>
</body>
</html>