<?php
include 'db_link.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_POST['id'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $hours = $_POST['hours'];
    $cost = $_POST['cost'];
    $syllabus = $_POST['syllabus'];
    $description = $_POST['description'];
    $trending = isset($_POST['Trending']) ? 'Yes' : 'No';
    $offer = isset($_POST['Offer']) ? 'Yes' : 'No';
    $special = isset($_POST['Special']) ? 'Yes' : 'No';

    // Initialize variables for file paths
    $course_img = null;

    // Define the directory where files will be saved
    $img_target_dir = "SiteImages/";


    // Check if a course image has been uploaded
    if (!empty($_FILES["course_img"]["name"])) {
        $course_img_name = basename($_FILES["course_img"]["name"]);
        $course_img = $img_target_dir . $course_img_name;
        $course_img_tmp = $_FILES["course_img"]["tmp_name"];
        
        // Move the uploaded image file
        if (!move_uploaded_file($course_img_tmp, $course_img)) {
            echo "Error uploading course image.";
            exit();
        }
    }

    // Prepare the update SQL statement
    $sql = "UPDATE course_form 
            SET title=?, category=?, hours=?, cost=?, syllabus=?, description=?, trending=?, offer=?, special=?, img_path=?
            WHERE id=?";
    echo $description;
    // Check if new files were uploaded
    if ($course_img) {

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssidssssssi", $title, $category, $hours, $cost, $syllabus, $description, $trending, $offer, $special, $course_img, $id);
    }else { // No new files were uploaded
        $sql = "UPDATE course_form 
                SET title=?, category=?, hours=?, cost=?, syllabus=?, description=?, trending=?, offer=?, special=?
            WHERE id=?";
  
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssissssssi", $title, $category, $hours, $cost, $syllabus, $description, $trending, $offer, $special, $id);
    }

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
?>
