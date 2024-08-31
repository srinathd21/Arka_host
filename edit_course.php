<?php
include 'db_link.php'; // Database connection

// Check if an ID is passed
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing data from the database
    $sql = "SELECT * FROM course_form WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $course = $result->fetch_assoc();

    // Check if course data was found
    if ($course) {
        $title = $course['title'];
        $category = $course['category'];
        $hours = $course['hours'];
        $cost = $course['cost'];
        $file_link = $course['file_path'];
        $description = $course['description'];
        $trending = $course['trending'] == 'Yes' ? 'checked' : '';
        $offer = $course['offer'] == 'Yes' ? 'checked' : '';
        $special = $course['special'] == 'Yes' ? 'checked' : '';
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
    <link rel="stylesheet" href="css/adcors.css">
</head>

<body>
    <div class="container">
        <h2 class="text-center mt-4">Edit Course</h2>
        <form action="update_course.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="cards">
                <div class="card_1">
                    <div>
                        <label for="title">Title:</label><br>
                        <input class="form-control" type="text" id="title" name="title" value="<?php echo $title; ?>"
                            required>
                    </div>

                    <div>
                        <label for="category">Category</label>
                        <select class="form-control" id="cars" name="category">
                            <option value="Software" <?php echo $category == 'Software' ? 'selected' : ''; ?>>Software
                            </option>
                            <option value="Ui/Ux" <?php echo $category == 'Ui/Ux' ? 'selected' : ''; ?>>Ui/Ux</option>
                            <option value="Network" <?php echo $category == 'Network' ? 'selected' : ''; ?>>Network
                            </option>
                            <option value="Basics" <?php echo $category == 'Basics' ? 'selected' : ''; ?>>Basics</option>
                        </select>
                    </div>

                    <div>
                        <label for="hours">Hours:</label><br>
                        <input class="form-control" type="number" id="hours" name="hours" value="<?php echo $hours; ?>"
                            required>
                    </div>

                    <div>
                        <label for="cost">Cost:</label><br>
                        <input class="form-control" type="number" id="cost" name="cost" step="0.01"
                            value="<?php echo $cost; ?>" required>
                    </div>


                </div>
                <div class="card_2">

                    <div>
                        <label for="file_link">File Link:</label><br>
                        <input class="form-control" type="text" id="file_link" name="file_link"
                            value="<?php echo $file_link; ?>" required>
                    </div>

                    <div>
                        <label for="description">Description:</label><br>
                        <textarea class="form-control" name="description"
                            id="description"><?php echo $description; ?></textarea>
                    </div>

                    <div>
                        <label for="Trending"> Trending</label>
                        <input type="checkbox" id="Trending" name="Trending" value="Trending" <?php echo $trending; ?>>
                    </div>

                    <div>
                        <label for="Offer"> Offer</label>
                        <input type="checkbox" id="Offer" name="Offer" value="Offer" <?php echo $offer; ?>>
                    </div>

                    <div>
                        <label for="Special"> Special</label>
                        <input type="checkbox" id="Special" name="Special" value="Special" <?php echo $special; ?>>
                    </div>
                </div>

            </div>

            <div class="text-center mt-5">
                <input class="btn btn-success" type="submit" value="Update">
            </div>
        </form>
    </div>
</body>

</html>