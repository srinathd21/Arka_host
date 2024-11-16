<?php include "db_link.php"; ?>

<?php 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$que = $conn->prepare("INSERT into course_category (category, description) values(?, ?)");

$que->bind_param("ss", $category, $description);

$category = $_POST['cat_name'];

$description = $_POST['cat_descp'];

$que->execute();

$que->close();

$conn->close();

header("Location:admin.php");
exit();

?>