<?php
include 'db_link.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_POST['id'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $hours = $_POST['hours'];
    $cost = $_POST['cost'];
    $file_link = $_POST['file_link'];
    $description = $_POST['description'];
    $trending = isset($_POST['Trending']) ? 'Yes' : 'No';
    $offer = isset($_POST['Offer']) ? 'Yes' : 'No';
    $special = isset($_POST['Special']) ? 'Yes' : 'No';

    // Prepare the update statement
    $sql = "UPDATE course_form SET title=?, category=?, hours=?, cost=?, file_path=?, description=?, trending=?, offer=?, special=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssidsisssi", $title, $category, $hours, $cost, $file_link, $description, $trending, $offer, $special, $id);

    // Execute the update
    if ($stmt->execute()) {
        echo "Record updated successfully";
        header("Location: course_list.php"); // Redirect to the course list page after update
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
