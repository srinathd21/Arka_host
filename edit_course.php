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
        $sub_domain = $course['sub_domain'];
        $hours = $course['hours'];
        $cost = $course['cost'];
        $syllabus = $course['syllabus'];
        $img_path = $course['img_path']; // Added for image path
        $description = $course['description'];
        $trending = $course['trending'] == 'Yes' ? 'checked' : '';
        $main_domain = $course['main_domain'] == 'Yes' ? 'checked' : '';
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
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <?php include 'db_link.php'; ?>

    <?php
    $qur = "SELECT category FROM course_category";
    $ans = $conn->query($qur);
    ?>
    <div class="container">
        <h2 class="text-center mt-4">Edit Course</h2>
        <a href="course_list.php" class="allcrs">Back</a>
        <form class="fomr1" action="update_course.php" method="post" enctype="multipart/form-data">
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
                            <?php
                            if ($ans->num_rows > 0) {
                                while ($row = $ans->fetch_assoc()) {
                                    echo "<option value='{$row['category']}'" . ($row['category'] == $category ? ' selected' : '') . ">{$row['category']}</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div>
                    <?php
                        $qur = "SELECT title FROM course_form";
                        $sbans = $conn->query($qur);
                    ?>
                        <label for="">Sub Domain</label>
                        <select class="form-control" id="cars" name="sbdomain">
                            <option value=""></option>
                            <?php
                            if ($sbans->num_rows > 0) {
                                while ($row = $sbans->fetch_assoc()) {
                                    echo "<option value='{$row['title']}'" . ($row['title'] == $sub_domain ? ' selected' : '') . ">{$row['title']}</option>";
                                }
                            }
                            ?>
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
                        <label for="syllabus">Syllabus:</label><br>
                        <textarea class="form-control" id="syllabus" name="syllabus" required><?php echo $syllabus; ?></textarea>
                    </div>

                    <div>
                        <label for="course_img">Course Image (Current: <?php echo basename($img_path); ?>):</label><br>
                        <input class="form-control" type="file" id="course_img" name="course_img">
                    </div>

                    <div>
                        <label for="description">Description:</label><br>
                        <textarea class="form-control" name="description"
                            id="description"><?php echo $description; ?></textarea>
                    </div>

                    <div>
                        <label for="main_domain">Is Main Domain</label>
                        <input type="checkbox" id="main_domain" name="main_domain" value="main_domain" <?php echo $main_domain; ?>>
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

            <div class="text-center mt-1">
                <input class="btn btn-info px-5 py-2" type="submit" value="Update">
            </div>
        </form>
    </div>
</body>

</html>