<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All | Courses</title>

    <?php include "links.php"; ?>
    <link rel="stylesheet" href="css/all_course.1.css">
</head>

<body>
    <?php include "topnav.php"; ?>
    <?php include "training_nav.php"; ?>

    <?php include 'db_link.php'; ?>
    <?php

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>

    <?php
    // Fetch all course categories for the dropdown
    $qur = "SELECT * FROM course_category";
    $ans = $conn->query($qur);
    ?>


    <div>
        <div>
            <img class="course_top_img" src="img/cours_top_mob.png" alt="">
        </div>
    </div>

    <div class="text-center mt-3 container">
        <span class="course_grd_text" data-aos="fade-right" data-aos-duration="1300">Explore Our Courses and Unlock <br>
            Your Potential</span>

        <p class="mt-4 crs_para" data-aos="fade-left" data-delay="100">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil error magni ratione
            dolore in est qui id vero
            unde quae, aspernatur impedit temporibus voluptate officiis quod nulla illum veritatis tempore maiores
            molestiae consectetur ipsa earum! Animi possimus cumque voluptatem ipsum? Deserunt rerum ipsam dicta
            corporis maxime voluptate velit fugiat veniam.</p>
    </div>



    <div class="container mt-5">
        <div class="mb-3">
            <?php
            $course_catagory_name = isset($_GET['category']) ? $_GET['category'] : 'Software';
            echo "<h3>{$course_catagory_name} Courses</h3>";
            ?>
        </div>
        <div id="course_cards_div">

            <?php

            $sql = "SELECT * FROM course_form WHERE category = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $course_catagory_name);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {

                // Loop through the result set
                while ($row = $result->fetch_assoc()) {
                    echo "<a href='course_details.php?category={$course_catagory_name}&title={$row["title"]}' id='course_cards' class='course_cards' data-aos='fade-right'>";

                    echo "<div class='course_title'>";

                    echo "<h4 class=''>" . $row["title"] . "</h4>";
                    echo "<p>Extensive syllabus</p>";
                    echo '<span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>';

                    echo "</div>";

                    echo '<div class="course_details">
                                    <span><i class="fa-regular fa-calendar-days"></i>' . $row["hours"] . 'Hours</span><br>
                                    <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                                </div>';

                    echo "</a>";
                }

            } else {
                echo "<tr><td colspan='5'>No data found</td></tr>";
            }

            echo "</div>";
            ?>
        </div>
    </div>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <?php include "training_footer.php"; ?>

    <?php include "supports.php"; ?>
</body>

</html>