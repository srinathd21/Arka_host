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
        echo "<a href='course_details.php?category={$course_catagory_name}&title={$course_details['title']}'>{$course_details['title']}</a>";
    }
} else {
    echo "No course_details found.";
}

$stmt->close();
$conn->close();
?>