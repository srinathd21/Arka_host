<?php include 'db_link.php'; ?>

<?php 
$search_val = $_GET['search_val'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM course_form WHERE title LIKE ?  and main_domain is null";
$stmt = $conn->prepare($sql);

$search_val = '%' . $search_val . '%'; // Add wildcards to the variable
$stmt->bind_param("s", $search_val);

$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
    while ($course_details = $result->fetch_assoc()) {
        echo "<a href='course_details.php?category={$course_details['category']}&title={$course_details['title']}'>{$course_details['title']}</a>";
    }
} else {
    echo "No search result found.";
}

$stmt->close();
$conn->close();
?>