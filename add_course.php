<?php 
include 'db_link.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the directory where files will be saved
$img_target_dir = "SiteImages/";
$pdf_target_dir = "SyllabusPDF/";


// Upload course file
$course_file_name = basename($_FILES["file_link"]["name"]);
$course_file_path = $pdf_target_dir . $course_file_name;
$course_file_tmp = $_FILES["file_link"]["tmp_name"];

// Upload course image
$course_img_name = basename($_FILES["course_img"]["name"]);
$course_img_path = $img_target_dir . $course_img_name;
$course_img_tmp = $_FILES["course_img"]["tmp_name"];

// Validate and move uploaded files
if (move_uploaded_file($course_file_tmp, $course_file_path) && move_uploaded_file($course_img_tmp, $course_img_path)) {

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO course_form (title, category, hours, cost, file_path, img_path, description, trending, offer, special) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisssssss", $title, $category, $hours, $cost, $file_path, $img_path, $description, $trending, $offer, $special);

    // Set parameters from POST request
    $title = $_POST['title'];
    $category = $_POST['cars'];
    $hours = $_POST['hours'];
    $cost = $_POST['cost'];
    $file_path = $course_file_path;  // File path for course file
    $img_path = $course_img_path;    // File path for course image
    $description = $_POST['description'];
    $trending = isset($_POST['Trending']) ? "Yes" : "No";
    $offer = isset($_POST['Offer']) ? "Yes" : "No";
    $special = isset($_POST['Special']) ? "Yes" : "No";

    // Execute the query
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();

} else {
    echo "Error uploading files.";
}

// Close the connection
$conn->close();

// Redirect to admin page
header("Location: admin.php");
exit();
?>
