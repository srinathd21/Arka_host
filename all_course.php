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



    <div>
        <div>
            <img class="course_top_img" src="img/cours_top_mob.png" alt="">
        </div>
    </div>



    <div class="text-center mt-3 container">
        <span class="course_grd_text" data-aos="fade-right" data-aos-duration="1300">Explore Our Courses and Unlock <br>
            Your Potential</span>

        <div class="catyparag">

        </div>

    </div>


    <div class="scroll-container-wrapper">
        <button class="scroll-button left">&#8249;</button>
        <?php
        $qur = "SELECT * FROM course_category";
        $ans = $conn->query($qur);
        ?>

        <div class="scroll-container">
            <?php
            if ($ans->num_rows > 0) {
                while ($row = $ans->fetch_assoc()) {

                    echo "<a id='courseCategoryTitle' class='scroll-item' href='#?category={$row['category']}' onclick='coursechanger(event)'>{$row['category']}</a>";
                }
            }
            ?>
        </div>
        <button class="scroll-button right">&#8250;</button>
    </div>



    <div class="container coursecontainer mt-3">

    </div>

    <script>



        function coursechanger(e) {
            const coursecategory = e.target.innerText;
            const coursecontainer = document.querySelector('.coursecontainer');
            const catyparagElement = document.querySelector('.catyparag');

            console.log(coursecategory);

            // Use AJAX to fetch the courses for the selected category
            const xhr1 = new XMLHttpRequest();
            xhr1.open("GET", "ajaxresponse.php?coursecategory=" + coursecategory, true);
            xhr1.onreadystatechange = function () {
                if (xhr1.readyState === 4 && xhr1.status === 200) {
                    coursecontainer.innerHTML = xhr1.responseText; // Update the course list with the response
                }
            };
            xhr1.send();


            function updateCatyparag(val) {
                const xhr2 = new XMLHttpRequest();
                xhr2.open("GET", "ajxcateparg.php?coursecategory=" + val, true);
                xhr2.onreadystatechange = function () {
                    if (xhr2.readyState === 4 && xhr2.status === 200) {
                        catyparagElement.innerHTML = xhr2.responseText; // Update the paragraph with the response
                    }
                };
                xhr2.send();
            }

            updateCatyparag(coursecategory);
        }




        function onlodetrigger() {
            const coursecategory = document.getElementById("courseCategoryTitle")
            const catyparagElement = document.querySelector('.catyparag');

            const coursecontainer = document.querySelector('.coursecontainer')
            coursecategory.classList.add('active');

            const xhr = new XMLHttpRequest();
            xhr.open("GET", "ajaxresponse.php?coursecategory=" + coursecategory.innerText, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    coursecontainer.innerHTML = xhr.responseText;
                }
            };
            xhr.send();

            function updateCatyparag(val) {
                const xhr2 = new XMLHttpRequest();
                xhr2.open("GET", "ajxcateparg.php?coursecategory=" + val, true);
                xhr2.onreadystatechange = function () {
                    if (xhr2.readyState === 4 && xhr2.status === 200) {
                        catyparagElement.innerHTML = xhr2.responseText; // Update the paragraph with the response
                    }
                };
                xhr2.send();
            }

            updateCatyparag(coursecategory.innerText);
        }
        window.onload = onlodetrigger;
    </script>
    <script>
        const items = document.querySelectorAll('.scroll-item');

        items.forEach(item => {
            item.addEventListener('click', () => {
                // Remove 'active' class from all items
                items.forEach(i => i.classList.remove('active'));

                // Add 'active' class to the clicked item
                item.classList.add('active');

                window.scrollTo({
                    top: 500,
                    behavior: "smooth"
                });
            });

        });
    </script>

    <script>
        const scrollContainer = document.querySelector('.scroll-container');
        const leftButton = document.querySelector('.scroll-button.left');
        const rightButton = document.querySelector('.scroll-button.right');

        leftButton.addEventListener('click', () => {
            scrollContainer.scrollLeft -= 600; // Adjust scroll distance as needed
        });

        rightButton.addEventListener('click', () => {
            scrollContainer.scrollLeft += 600; // Adjust scroll distance as needed
        });
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <?php include "training_footer.php"; ?>

    <?php include "supports.php"; ?>
</body>

</html>