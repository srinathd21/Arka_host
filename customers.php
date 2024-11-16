<?php include "db_link.php"; ?>

<?php 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input values
    $name = $_POST['name'] ?? null;
    $contact = $_POST['contact'] ?? null;
    $email = $_POST['email'] ?? null;
    $course = $_POST['course'] ?? null;

    // Check for null or empty values
    if (empty($name) || empty($contact)) {
        die("All fields are required.");
    }

    // Prepare the SQL statement
    $que = $conn->prepare("INSERT INTO customer_data (name, contact, email,course) VALUES (?, ?, ?,?)");
    
    // Check if prepare() succeeded
    if (!$que) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    // Bind parameters
    $que->bind_param("ssss", $name, $contact, $email,$course);

    // Execute the query
    if ($que->execute()) {
        echo "Data inserted successfully!";
    } else {
        die("Execute failed: (" . $que->errno . ") " . $que->error);
    }
}
setcookie("username", $name, time() + (7 * 24 * 60 * 60), "/");

$que->close();

$conn->close();

header("Location:all_course.php?userform='submited'");
exit();

?>