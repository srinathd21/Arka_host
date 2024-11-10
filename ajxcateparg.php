<?php include 'db_link.php' ?>

<?php

$category_name = $_GET['coursecategory'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
        $stmt = $conn->prepare("SELECT * FROM course_category WHERE category = ?");
        $stmt->bind_param("s", $category_name);
        $stmt->execute();
        $ans = $stmt->get_result();
    
        if ($ans->num_rows > 0) {
            while ($row = $ans->fetch_assoc()) {
                echo '<p id="coursedescription" class="mt-4 crs_para" data-aos="fade-left" data-delay="100">' .$row["description"]. '</p>';
            }
        } else {
            echo '<p>No courses found for this category.</p>';
        }

        $stmt->close();
?>