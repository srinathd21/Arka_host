<link rel="stylesheet" href="css/training_nav_v.2.css">

<?php include 'db_link.php'; ?>

<?php
// Fetch all course categories for the dropdown
$qur = "SELECT * FROM course_category";
$ans = $conn->query($qur);
?>

<div class="nav">
    <nav class="container">
        <button class="btn d-lg-none mx-3" style="margin-top: -5px ;" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#demo">
            <i class="fa-solid fa-bars" style="color: #000000;"></i>
        </button>

        <div class="logo_img ">
            <img src="img/Arka_logo.png" alt="">
        </div>


        <div class="srch_input">
            <input class="srch_input_1" type="text" placeholder="Search">
            <button><i class="fa-solid fa-magnifying-glass" style="color: #ffffff !important;"></i></button>
        </div>

        <div class="nav_links">
            <div class="course_dropdown">
                <button class="course_dropbtn">Course <img src="icons/angle-down-solid.svg" alt=""></button>
                <div class="course_dropdown-content">
                    <?php
                    // Populate the custom dropdown with course categories
                    if ($ans->num_rows > 0) {
                        while ($row = $ans->fetch_assoc()) {
                            echo "<div class='catgr_link'><a href='all_course.php?category={$row['category']}' class='catgr_link_btn'>{$row['category']}<img src='icons/angle-right-solid.svg'></a>";
                            echo "<div class='catgr_dropdown_content'>";

                            $course_catagory_name = $row['category'];
                            $sql = "SELECT * FROM course_form WHERE category = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("s", $course_catagory_name);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                while ($course_details = $result->fetch_assoc()) {
                                    echo "<a href=''>{$course_details['title']}</a>";
                                }
                            } else {
                                echo "No course_details found.";
                            }

                            echo "</div></div>";
                        }
                    }
                    ?>
                </div>
            </div>

            <div>
                <a href="">Support</a>
            </div>

            <div>

                <a href="">Sign in <span class="profile_icon"><i style="font-size:17px; color:gray;"
                            class="fa-regular fa-user"></i></span>
                </a>
            </div>
        </div>



        <!-- Offcanva -->

        <div class="offcanvas offcanvas-start offcanvas-lg" id="demo" style="background-color:#f2f2f2;">
            <div class="offcanvas-header mb-5">
                <div class="logo_img_mob">
                    <img src="img/Arka_logo.png" alt="">
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="">
                <div>
                    <a id="top_nav_link_mob" href="index.php">For Business</a>
                </div>

                <div>
                    <a id="top_nav_link_mob" href="training.php">For Training</a>
                </div>

                <ul class="nav_link_mob">
                    <li><a href="">Support</a></li>
                </ul>
            </div>
        </div>
        <div style="display:inline-flex; margin-left:-100px;">
            <button class="course_mob_btn" onclick="opensidenav()">Course <img src="icons/angle-down-solid.svg" alt=""></button>
            <a href=""><span class="profile_icon_mob"><i style="font-size:17px; color:gray;"
                        class="fa-regular fa-user"></i></span> </li></a>
        </div>

    </nav>
</div>


<div class="course_catgr_side_nav">
    <div>
        <h1 class="catgr_side_nav_title">Category</h1>

        <div>
            <button onclick="sidenavBack()" class="catgr_side_nav_back_btn"><img src="icons/arrow-left-solid.svg"
                    alt="">Back</button>
        </div>
    </div>

    <?php
    // Fetch all course categories for the dropdown
    $qur = "SELECT * FROM course_category";
    $ans = $conn->query($qur);
    ?>

    <div class="catgr_side_nav_content">
        <?php
        // Populate the custom dropdown with course categories
        if ($ans->num_rows > 0) {
            while ($row = $ans->fetch_assoc()) {

                echo "<div class='catgr_side_dropdown'>";
                echo "<span class='catgr_drop_btn' onclick='loadSubCourse(event)'>{$row['category']}</span>";
                echo "</div>";
            }
        }
        ?>
        <div class='side_nav_sub_catgr'>
            <div class="mb-4">
                <h1 class="catgr_side_nav_title">Courses</h1>
                <button onclick="innerSideNav()" class="catgr_side_nav_back_btn"><img src="icons/arrow-left-solid.svg"
                        alt="">Back</button>

                <div id="subCourseDiv">

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var sidenav = document.querySelector('.course_catgr_side_nav')
    var subsidenav = document.querySelector('.side_nav_sub_catgr')

    function opensidenav() {
        sidenav.style.transform = "translateX(0%)"
    }
    function sidenavBack() {
        sidenav.style.transform = "translateX(100%)"
    }

    function loadSubCourse(categoryName) {
            const courseNav = document.querySelector('.side_nav_sub_catgr');
            const courseContent = document.getElementById('subCourseDiv');

            console.log(categoryName.target.innerText)
            // Show the second nav
            courseNav.style.transform = 'translateX(0%)';

            // Use AJAX to fetch the courses for the selected category
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "side_subCourse.php?category_id=" + categoryName.target.innerText, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    courseContent.innerHTML = xhr.responseText; // Update the course list with the response
                }
            };
            xhr.send();
        }
    
        function innerSideNav() {
            subsidenav.style.transform = 'translateX(100%)'; // Hide the second nav
        }
</script>