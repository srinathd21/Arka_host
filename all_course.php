
<?php include "topnav.php"; ?>
<?php include "training_nav.php"; ?>
<?php include "links.php"; ?>
<link rel="stylesheet" href="css/all_course.css">

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
    <div class="course_container">
        <div class="course_name">
            <h1>Software</h1>
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
            <h1>Networking</h1>
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