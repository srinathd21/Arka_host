<?php include "db_link.php"; ?>

<?php 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$que = $conn->prepare("INSERT into course_category (category) values(?)");

$que->bind_param("s", $category);

$category = $_POST['cat_name'];

$que->execute();

$que->close();

$conn->close();

header("Location:admin.php");
exit();

?>