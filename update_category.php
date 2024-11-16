<?php
include 'db_link.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data

    $id = $_POST['id'];
    $category = $_POST['title'];
    $description = $_POST['description'];


    // Prepare the update SQL statement
    $sql = "UPDATE course_category 
            SET  category=?, description=? WHERE cid=?";
  
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi",$category,$description, $id);
    

    // Execute the update
    if ($stmt->execute()) {
        echo "Record updated successfully";
        header("Location: category_list.php"); // Redirect to the course list page after update
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
?>
