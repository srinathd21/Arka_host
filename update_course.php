<?php
include 'db_link.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $id = $_POST['id'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $hours = $_POST['hours'];
    $cost = $_POST['cost'];
    $description = $_POST['description'];
    $trending = isset($_POST['Trending']) ? 'Yes' : 'No';
    $offer = isset($_POST['Offer']) ? 'Yes' : 'No';
    $special = isset($_POST['Special']) ? 'Yes' : 'No';

    // Initialize variables for file paths
    $file_link = null;
    $course_img = null;

    // Define the directory where files will be saved
    $img_target_dir = "SiteImages/";
    $pdf_target_dir = "SyllabusPDF/";


    // Check if a course file has been uploaded
    if (!empty($_FILES["file_link"]["name"])) {
        $course_file_name = basename($_FILES["file_link"]["name"]);
        $file_link = $pdf_target_dir . $course_file_name;
        $course_file_tmp = $_FILES["file_link"]["tmp_name"];
        
        // Move the uploaded course file
        if (!move_uploaded_file($course_file_tmp, $file_link)) {
            echo "Error uploading course file.";
            exit();
        }
    }

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
            SET title=?, category=?, hours=?, cost=?, file_path=?, description=?, trending=?, offer=?, special=?, img_path=?
            WHERE id=?";
    echo $description;
    // Check if new files were uploaded
    if ($file_link && $course_img) {

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssidssssssi", $title, $category, $hours, $cost, $file_link, $description, $trending, $offer, $special, $course_img, $id);
    } elseif ($file_link) { // Only course file was uploaded
        $sql = "UPDATE course_form 
                SET title=?, category=?, hours=?, cost=?, file_path=?, description=?, trending=?, offer=?, special=? 
                WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssidsssssi", $title, $category, $hours, $cost, $file_link, $description, $trending, $offer, $special, $id);
    } elseif ($course_img) { // Only course image was uploaded
        $sql = "UPDATE course_form 
                SET title=?, category=?, hours=?, cost=?, img_path=?, description=?, trending=?, offer=?, special=? 
                WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssidsssssi", $title, $category, $hours, $cost, $course_img, $description, $trending, $offer, $special, $id);
    } else { // No new files were uploaded
        $sql = "UPDATE course_form 
                SET title=?, category=?, hours=?, cost=?, description=?, trending=?, offer=?, special=? 
                WHERE id=?";
  
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssisssssi", $title, $category, $hours, $cost, $description, $trending, $offer, $special, $id);
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
