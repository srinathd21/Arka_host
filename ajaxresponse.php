<?php include 'db_link.php' ?>

<?php

$course_catagory_name = $_GET['coursecategory'];

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get courses for the selected category
$sql = "SELECT * FROM course_form WHERE category = ?  and main_domain='No'";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $course_catagory_name);
$stmt->execute();
$result = $stmt->get_result();

echo '<div class="mb-3" id='.$course_catagory_name.'>';
echo "<h3>{$course_catagory_name} Courses</h3>";
echo '</div>';

echo '<div id="course_cards_div">';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<a href="course_details.php?category='.$course_catagory_name.'&title='.$row["title"].'">';
        if ($row['offer'] == 'Yes') {
            echo '<span class="offer_lable">Offer</span>';
        }
        echo "<div class='course_title'>";

        echo "<h4 class=''>" . $row["title"] . "</h4>";
        echo "<p>Extensive syllabus</p>";
        echo '<span><i class="fa-solid fa-book-open"></i>Specialized certificate</span>';

        echo "</div>";

        echo '<div class="course_details">
                        <span><i class="fa-regular fa-calendar-days"></i>' . $row["hours"] . 'Hours</span><br>
                        <span><i class="fa-regular fa-circle-check"></i>Certification program</span>
                        <div class="crs-msg">
                            <span><span>*</span>Including Internship, Project Guidance, Career Guidance</span>
                        </div>
                        
                        <span class="crs_tC">*T&C Apply</span>
                    </div>';
       // echo "<a href='course_details.php?category={$course_catagory_name}&title={$row["title"]}' id='course_cards'  data-aos='fade-right'>";
    
        echo "</a>";
    }
} else {
    echo "No course_details found.";
}
echo '</div>';

$stmt->close();
$conn->close();
?>