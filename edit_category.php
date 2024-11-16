<?php
include 'db_link.php'; // Database connection

// Check if an ID is passed
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing data from the database
    $sql = "SELECT * FROM course_category WHERE cid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $course = $result->fetch_assoc();

    // Check if course data was found
    if ($course) {
        $category = $course['category'];
        $description = $course['description'];
    } else {
        echo "Course not found.";
        exit();
    }
} else {
    echo "No ID provided.";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <?php include 'links.php'; ?>

</head>

<body>
    <style>
        form{
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card_1 div{
            margin-bottom: 20px;
        }
        #backBtn{
            position: relative;
            left: 85%;
        }
    </style>
    <?php include 'db_link.php'; ?>

    <?php
    $qur = "SELECT category FROM course_category";
    $ans = $conn->query($qur);
    ?>
    <div class="container" style="width:550px">
        <h2 class="text-center mt-4">Edit Category</h2>
        <a href="course_list.php" id="backBtn" class="btn btn-primary mb-2">Back</a>
        <form class="fomr1 border p-5" action="update_category.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="cards">
                <div class="card_1">
                    <div>
                        <label for="title">Title:</label><br>
                        <input class="form-control" type="text" id="title" name="title" value="<?php echo $category; ?>"
                            required>
                    </div>
                  
                    <div>
                        <label for="description">Description:</label><br>
                        <textarea class="form-control" name="description"
                            id="description"><?php echo $description; ?></textarea>
                    </div>

                   
                </div>
            </div>

            <div class="text-center mt-1">
                <input class="btn btn-info px-5 py-2" type="submit" value="Update">
            </div>
        </form>
    </div>
</body>

</html>