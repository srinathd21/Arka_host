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

    <div class="container p-4">
        <h1>Title</h1>
        <p class="p-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, laboriosam eius recusandae repellat
            repellendus vitae autem quisquam velit magni voluptatibus sed ea doloremque perspiciatis corporis ut vel
            dolorum soluta rerum porro, cumque inventore suscipit.laboriosam quos fugiat, nulla,
            quas labore tempore repellat dicta quia sit nihil. Veritatis illum neque minima error sapiente minus
            asperiores modi!</p>
    </div>

    <div class="coursebtnDiv">
        <!-- Custom Dropdown Wrapper -->
        <i class="fa-solid fa-chevron-down selectedOptionArrow"></i>
        <div class="custom-dropdown" id="customDropdown">

            <div class="custom-dropdown-selected" id="selectedOption">Select Course Category</div>
            <div class="custom-dropdown-list" id="dropdownList">
                <?php
                // Populate the custom dropdown with course categories
                if ($ans->num_rows > 0) {
                    while ($row = $ans->fetch_assoc()) {
                        echo "<div class='dropdown-item' data-value='" . $row['category'] . "'>" . $row['category'] . "</div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="course_scroll_div">
        <div class="scroll-container-wrapper">
            <button class="scroll-button left">&#8249;</button>
            <div id="allCourseList" class="scroll-container">

            </div>
            <button class="scroll-button right">&#8250;</button>
        </div>
    </div>

    <!-- course details box -->
    <div class="course_details_div container mt-2">
        <div id="course_details_sec1" class="course_details_sec1">

        </div>

        <div class="course_details_sec2">
            <h1>Benefits</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur pariatur quae libero ratione aperiam
                fuga porro reprehenderit sunt doloribus. Asperiores sunt assumenda officia aut in perferendis, velit
                sequi tempora minima voluptatem accusamus et illum aliquam. Illum eaque voluptas ipsa aut saepe
                reiciendis. Voluptate nostrum cumque aliquid pariatur neque vitae earum.
            </p>
        </div>
    </div>


    <script>
        const selectedOption = document.getElementById("selectedOption");
        const scrollDiv = document.querySelector(".course_scroll_div");
        const selectedOptionArrow = document.querySelector(".selectedOptionArrow");

        selectedOption.addEventListener("click", function () {
            scrollDiv.style.zIndex = "-1";
            selectedOptionArrow.style.transform = "rotate(180deg)";  // Change background color
        });


    </script>

    <!-- Course titles fetch scripts -->
    <script>
        const urlParams = new URLSearchParams(window.location.search);

        // To get specific values from the URL
        const category = urlParams.get('category');
        const title = urlParams.get('title');


        document.addEventListener("DOMContentLoaded", function () {
            // Fetch the course list as soon as the page is loaded
            fetchallCourseList(category);
            firstloadcrsTitle(title);
        });

        document.getElementById("selectedOption").addEventListener("click", function () {
            document.getElementById("dropdownList").classList.toggle("show");
        });

        // Function to fetch course details based on dropdown selection
        function fetchallCourseList(courseCategory) {
            if (courseCategory) {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "ajax_course.php?category=" + courseCategory, true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById("allCourseList").innerHTML = xhr.responseText;
                    }
                };
                xhr.send();
            } else {
                document.getElementById("allCourseList").innerHTML = ""; // Clear details if no course category selected
            }
        }

        // Handle dropdown item click
        document.querySelectorAll(".dropdown-item").forEach(item => {
            item.addEventListener("click", function () {
                var selectedValue = this.getAttribute("data-value");
                var selectedText = this.innerText;
                document.getElementById("selectedOption").innerText = selectedText;
                document.getElementById("dropdownList").classList.remove("show");

                // Call the function to fetch and display courses
                fetchallCourseList(selectedValue);
            });
        });

        // Close the dropdown if clicked outside
        window.onclick = function (event) {
            if (!event.target.matches('.custom-dropdown-selected')) {
                const scrollDiv = document.querySelector(".course_scroll_div");
                scrollDiv.style.zIndex = "1";

                const selectedOptionArrow = document.querySelector(".selectedOptionArrow");
                selectedOptionArrow.style.transform = "rotate(0deg)";

                var dropdowns = document.getElementsByClassName("custom-dropdown-list");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        };

        // Course details fetch scripts

        function firstloadcrsTitle(title) {
            var courseTitle = title

            if (courseTitle) {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "ajax_course.php?course_title=" + courseTitle, true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById("course_details_sec1").innerHTML = xhr.responseText;
                    }
                };
                xhr.send();
            } else {
                document.getElementById("course_details_sec1").innerHTML = ""; // Clear details if no course category selected
            }
        }

        function fetchallCourseDeatails(event) {
            var courseTitle = event.srcElement.innerText

            if (courseTitle) {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "ajax_course.php?course_title=" + courseTitle, true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        document.getElementById("course_details_sec1").innerHTML = xhr.responseText;
                    }
                };
                xhr.send();
            } else {
                document.getElementById("course_details_sec1").innerHTML = ""; // Clear details if no course category selected
            }
        }
    </script>



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