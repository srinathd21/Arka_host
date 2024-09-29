<?php
// Include the database connection
include 'db_link.php';  // Assuming you put your connection code in 'db_connect.php'

if (isset($_GET['category'])) {
    $course_catagory_name = $_GET['category'];

    // Fetch the course_details details from the database
    $sql = "SELECT * FROM course_form WHERE category = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $course_catagory_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($course_details = $result->fetch_assoc()) {
            echo "<a id='scroll_item_btn' href='#selectedOption' onclick=fetchallCourseDeatails(event) class='scroll-item {$course_details['title']}' data-value='{$course_details['title']}' >{$course_details['title']}</a>";
        }
    } else {
        echo "No course_details found.";
    }
}

if (isset($_GET['course_title'])) {
    $course_title_name = $_GET['course_title'];

    // Fetch the course_details details from the database
    $sql = "SELECT * FROM course_form WHERE title = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $course_title_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($course_details = $result->fetch_assoc()) {
            echo "<h1 class='crs_title'>{$course_details['title']}</h1>";
            echo "<p class='crs_description'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum quod accusamus harum exercitationem itaque
            numquam! Praesentium, et? Dignissimos nobis consequuntur minus velit, cumque nesciunt, perspiciatis facere
            sapiente ut at incidunt? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum quod accusamus harum exercitationem itaque
            numquam! Praesentium, et? Dignissimos nobis consequuntur minus velit, cumque nesciunt, perspiciatis facere
            sapiente ut at incidunt?</p>";
        }
    } else {
        echo "No course_details found.";
    }
}
?>