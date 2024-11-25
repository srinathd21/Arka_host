<?php include 'db_link.php' ?>

<?php

$course_catagory_name = $_GET['category_id'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get courses for the selected category
$sql = "SELECT * FROM course_form WHERE category = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $course_catagory_name);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($course_details = $result->fetch_assoc()) {
        if ($course_details['main_domain'] == 'Yes') {
            echo "<div id='mainTitle' onclick='toggleCollapse(this)'>";
            echo "<span>{$course_details['title']} <i id='maintitleIcon' class='fa-solid fa-angle-down'></i></span>";
            echo "</div>";
            echo "<div id='sub_domain'>";
            $sql = "SELECT title from course_form where sub_domain='{$course_details['title']}'";
            $result2 = $conn->query($sql);
            if ($result2->num_rows > 0) {
                while ($sub_course = $result2->fetch_assoc()) {
                    echo "<a href='course_details.php?category={$course_catagory_name}&title={$sub_course['title']}'>{$sub_course['title']}</a>";
                }
            }

            echo "</div>";
        }
    }
}
$sql = "SELECT * FROM course_form WHERE category = ? and main_domain='No'";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $course_catagory_name);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($course_details = $result->fetch_assoc()) {
        if (!$course_details['sub_domain']) {
            echo "<div id='subCourseTitle'>";
            echo "<a  href='course_details.php?category={$course_catagory_name}&title={$course_details['title']}'>{$course_details['title']}</a>";
            echo "</div>";
        }

    }
} else {
    echo "No course_details found.";
}

$stmt->close();
$conn->close();
?>