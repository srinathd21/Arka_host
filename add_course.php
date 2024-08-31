<?php include 'db_link.php';?>
<?php
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO course_form (title, category, hours, cost, file_path, description, trending, offer, special) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissssss", $title, $category, $hours, $cost, $file_link, $description, $trending, $offer, $special);

// Set parameters and execute
$title = $_POST['title'];
$category = $_POST['cars'];
$hours = $_POST['hours'];
$cost = $_POST['cost'];
$file_link = $_POST['file_link'];
$description = $_POST['description'];
$trending = isset($_POST['Trending']) ? "Yes" : "No";
$offer = isset($_POST['Offer']) ? "Yes" : "No";
$special = isset($_POST['Special']) ? "Yes" : "No";
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();

header("Location:admin.php");
exit();
?>
