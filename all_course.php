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


    <?php include 'db_link.php'; ?>
    <?php

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>

    <?php
    $qur = "SELECT category FROM course_category";
    $ans = $conn->query($qur);
    ?>

    <div class="container">
        <div class="mt-4 mb-3">
            <h3>View all courses</h3>
        </div>
    </div>
    <hr>

    <div class="course_scroll_div">
        <div class="scroll-container-wrapper">
            <button class="scroll-button left">&#8249;</button>
            <div class="scroll-container">
                <?php
                if ($ans->num_rows > 0) {
                    while ($crs = $ans->fetch_assoc()) {
                        echo "<a id='scroll_item_btn' class='scroll-item' href='#{$crs['category']}' >{$crs['category']}</a>";
                    }
                }
                ?>
            </div>
            <button class="scroll-button right">&#8250;</button>
        </div>


    </div>


    <div class="container">
        <?php
        $qur = "SELECT category FROM course_category";
        $ans = $conn->query($qur);
        ?>
        <div class="course_container">
            <div class="course_name">
                <?php
                if ($ans->num_rows > 0) {
                    while ($crs = $ans->fetch_assoc()) {
                        echo "<span id='{$crs['category']}' style='display:block; margin-bottom:94px;' '></span>";
                        echo "<h3 class='mb-3'>{$crs['category']}</h3>";

                        echo "<div id='course_cards_div' class='mb-4'>";
                        $sql = "SELECT * FROM course_form";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {

                            // Loop through the result set
                            while ($row = $result->fetch_assoc()) {

                                if ($row["category"] == $crs['category']) {
                                    echo "<a href='' class='course_cards'>";

                                    echo "<div class='course_title'>";

                                    echo "<h4 class='text-black'>" . $row["title"] . "</h4>";
                                    echo "<p>Extensive syllabus</p>";
                                    echo '<span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>';

                                    echo "</div>";

                                    echo '<div class="course_details">
                                            <span><i class="fa-regular fa-calendar-days"></i>' . $row["hours"] . 'Hours</span><br>
                                            <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                                        </div>';

                                    echo "</a>";
                                }

                            }

                        } else {
                            echo "<tr><td colspan='5'>No data found</td></tr>";
                        }

                        echo "</div>";



                    }
                }
                ?>
            </div>

        </div>

    </div>

    <script>
        const scrollContainer = document.querySelector('.scroll-container');
        const leftButton = document.querySelector('.scroll-button.left');
        const rightButton = document.querySelector('.scroll-button.right');

        leftButton.addEventListener('click', () => {
            scrollContainer.scrollLeft -= 350; // Adjust scroll distance as needed
        });

        rightButton.addEventListener('click', () => {
            scrollContainer.scrollLeft += 350; // Adjust scroll distance as needed
        });
    </script>


    <?php include "training_footer.php"; ?>

    <?php include "supports.php"; ?>
</body>

</html>