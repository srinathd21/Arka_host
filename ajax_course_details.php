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
            echo "<span id='scroll_item_btn' class='scroll-item' >{$course_details['title']}</span>";
        }
    } else {
        echo "No course_details found.";
    }

    
}
?>
