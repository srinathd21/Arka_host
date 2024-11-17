<link rel="stylesheet" href="css/training_nav_v.2.css">

<?php include 'db_link.php'; ?>

<?php
// Fetch all course categories for the dropdown
$qur = "SELECT * FROM course_category";
$ans = $conn->query($qur);
?>

<div class="nav">
    <nav class="container">
        <button class="btn d-lg-none" style="width:40px;position:relative; left:-10px;" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#demo">
            <img id="nav-bar-icon" src="icons/bars-solid.svg" alt="">
        </button>

        <a href="index.php" class="logo_img ">
            <img src="img/Arka_logo.png" alt="">
        </a>


        <div class="srch_input">
            <input class="srch_input_1" type="text" placeholder="Search">
            <button id="serachbtn" onclick="searchfetch()"><img src="icons/magnifying-glass-solid.svg"
                    style="width:15px;margin-top:-2px;"></img></button>

            <div class="searchresultdiv">
                <a href="">Search..</a>
            </div>
        </div>

        <div class="nav_links">
            <div class="course_dropdown">
                <div id="courseBtn">
                    <button class="course_dropbtn">Course <img src="icons/angle-down-solid.svg" alt=""></button>
                    <div id="crsbtnhighlight">
                        <div>
                            <img src="img/up-arrow-l.png" alt="">
                        </div>
                        <div>
                            <h5>Explore Courses</h5>
                        </div>
                    </div>
                </div>
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
                                    if ($course_details['main_domain'] == 'Yes') {
                                        echo "<div id='mainTitlePc'>";
                                        echo "<span>{$course_details['title']}<img src='icons/angle-right-solid.svg'></span>";
                                        echo "<div id='sub_domainPc'>";
                                        $sql = "SELECT title from course_form where sub_domain='{$course_details['title']}'";
                                        $result2 = $conn->query($sql);
                                        if ($result2->num_rows > 0) {
                                            while ($sub_course = $result2->fetch_assoc()) {
                                                echo "<a href='course_details.php?category={$course_catagory_name}&title={$sub_course['title']}'>{$sub_course['title']}</a>";
                                            }
                                        }
                                        echo "</div>";
                                        echo "</div>";
                                    } else if (!$course_details['sub_domain']) {
                                        echo "<div id='subCourseTitlePc'>";
                                        echo "<a  href='course_details.php?category={$course_catagory_name}&title={$course_details['title']}'>{$course_details['title']}</a>";
                                        echo "</div>";
                                    }

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
                <a style="cursor:pointer;" onclick="openuserform()">Support</a>
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
                    <a class="admin_signin_btn" href=""><span class="profile_icon_mob"><i
                                style="font-size:17px; color:gray;" class="fa-regular fa-user"></i></span>Sign in
                    </a>
                </div>
                <div>
                    <a id="top_nav_link_mob" href="business.php">For Business</a>
                </div>

                <div>
                    <a id="top_nav_link_mob" href="index.php">For Training</a>
                </div>

                <div>
                    <a id="top_nav_link_mob" style="cursor:pointer;" onclick="openuserform()">Support</a>
                </div>
            </div>
        </div>
        <div id="nav_last_btn" style="">
            <div>
                <i id="open_serachbtn_mob" onclick="OpenMobSearch()" class="fa-solid fa-magnifying-glass"></i>
                <i id="close_serachbtn_mob" onclick="CloseMobSearch()" class="fa-solid fa-x"></i>
            </div>
            <div id="courseBtn">
                <button class="course_mob_btn" onclick="opensidenav()">Course <img src="icons/angle-down-solid.svg"
                        alt=""></button>
                <div id="crsbtnhighlightMob">
                    <div>
                        <img src="img/up-arrow-l.png" alt="">
                    </div>
                    <div>
                        <h5>Explore Courses</h5>
                    </div>
                </div>
            </div>
            <div>
                <a id="icon-location"
                    href="https://www.google.com/maps/place/Arka+Networkz+System/@12.7360388,77.8222739,17z/data=!3m1!4b1!4m6!3m5!1s0x3bae7185e99a9cb5:0x3520348054405036!8m2!3d12.7360336!4d77.8248488!16s%2Fg%2F11t1ds8dv0?authuser=0&entry=ttu"
                    target="_blank" style="width:12px; margin-top:2px; display:inline-block;"><img
                        src="icons/location-dot-solid.svg"></img></a>
            </div>
        </div>

    </nav>
</div>


<div class="course_catgr_side_nav">
    <div>
        <h1 class="catgr_side_nav_title">Domain</h1>

        <div>
            <button onclick="sidenavBack()" class="catgr_side_nav_back_btn"><img src="icons/arrow-left-solid.svg"
                    alt=""></button>
        </div>
    </div>

    <?php
    // Fetch all course categories for the dropdown
    $qur = "SELECT * FROM course_category";
    $ans = $conn->query($qur);
    ?>

    <div class="catgr_side_nav_content">
        <div class="catgr_side_nav_overflow">
            <?php
            // Populate the custom dropdown with course categories
            if ($ans->num_rows > 0) {
                while ($row = $ans->fetch_assoc()) {

                    echo "<div class='catgr_side_dropdown'>";
                    echo "<span class='catgr_drop_btn' onclick='loadSubCourse(event)'>{$row['category']}</span>
                <img src='img/angle-right-solid-black.svg'>
                ";

                    echo "</div>";
                }
            }
            ?>
        </div>
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
    /*
    document.addEventListener('DOMContentLoaded', () => {
        const courseBtnhighlight = document.getElementById('crsbtnhighlight');
        const courseBtnhighlightMob = document.getElementById('crsbtnhighlightMob');
        const courseBtn = document.querySelector('.course_dropbtn');
        const courseBtnMob = document.querySelector('.course_mob_btn');

        if (!localStorage.getItem('visited')) {
            setTimeout(() => {
                courseBtnhighlight.style.display = 'block';
                courseBtnhighlightMob.style.display = 'block';
                courseBtn.setAttribute('id', 'crsBtn');
                courseBtnMob.setAttribute('id', 'crsBtn');
                setTimeout(() => {
                    courseBtnhighlight.style.display = 'none';
                    courseBtnhighlightMob.style.display = 'none';
                    courseBtn.removeAttribute('id');
                    courseBtnMob.removeAttribute('id');
                },3000);
            }, 3000);

            localStorage.setItem('visited', 'true');
        }
    });

        */

</script>
<script>
    function toggleCollapse(headerElement) {
        // Select the content element that follows the header
        const content = headerElement.nextElementSibling;
        const icon = headerElement.querySelector('#maintitleIcon');

        // Toggle display of the content
        if (content.style.display === 'none' || content.style.display === '') {
            content.style.display = 'block';
            icon.style.transform = 'rotate(180deg)';
        } else {
            content.style.display = 'none';
            icon.style.transform = 'rotate(0deg)';
        }
    }

</script>
<script>
    var sidenav = document.querySelector('.course_catgr_side_nav')
    var subsidenav = document.querySelector('.side_nav_sub_catgr')
    var body = document.querySelector('body')

    function opensidenav() {
        sidenav.style.transform = "translateX(0%)"
        body.style.overflow = 'hidden';
    }
    function sidenavBack() {
        sidenav.style.transform = "translateX(100%)"
        body.style.overflow = 'auto';
    }

    function loadSubCourse(categoryName) {
        const courseNav = document.querySelector('.side_nav_sub_catgr');
        const courseContent = document.getElementById('subCourseDiv');

        courseNav.style.transform = 'translateX(0%)';

        // Use AJAX to fetch the courses for the selected category
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "side_subCourse.php?category_id=" + categoryName.target.innerText, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                courseContent.innerHTML = xhr.responseText; // Update the course list with the response
            }
        };
        xhr.send();
    }

    // Search functionality
    var searchbox = document.querySelector('.searchresultdiv');
    var searchval = document.querySelector('.srch_input_1');
    var searchButton = document.getElementById('serachbtn');

    searchval.addEventListener('keydown', function (e) {
        searchbox.style.display = 'block';
        searchfetch(e.target.value);
    });

    document.addEventListener('click', function (e) {
        if (!searchval.contains(e.target) && !searchButton.contains(e.target)) {
            searchbox.style.display = 'none';
        }
    });

    function OpenMobSearch() {
        var searchbox = document.querySelector('.srch_input')
        var OpenSearchBtn = document.getElementById('open_serachbtn_mob')
        var CloseSearchBtn = document.getElementById('close_serachbtn_mob')

        OpenSearchBtn.style.display = 'none';
        CloseSearchBtn.style.display = 'block';
        searchbox.style.display = 'block';
    }
    function CloseMobSearch() {
        var searchbox = document.querySelector('.srch_input')
        var OpenSearchBtn = document.getElementById('open_serachbtn_mob')
        var CloseSearchBtn = document.getElementById('close_serachbtn_mob')

        OpenSearchBtn.style.display = 'block';
        CloseSearchBtn.style.display = 'none';
        searchbox.style.display = 'none';
    }

    function searchfetch(searchName) {
        searchbox.style.display = 'block';
        const searchval = document.querySelector('.srch_input_1');
        if (searchval.value) {
            searchName = searchval.value
        }


        const xhr = new XMLHttpRequest();
        xhr.open("GET", "searchresult.php?search_val=" + searchName, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                searchbox.innerHTML = xhr.responseText; // Update the course list with the response
            }
        };
        xhr.send();

    }

    function innerSideNav() {
        subsidenav.style.transform = 'translateX(100%)'; // Hide the second nav
    }


</script>