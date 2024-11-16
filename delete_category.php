<?php
include 'db_link.php'; // Database connection
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the delete query
    $sql = "DELETE FROM course_category WHERE cid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "No ID provided for deletion.";
}
header("Location:category_list.php");

?>