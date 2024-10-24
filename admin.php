<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <?php include 'links.php'; ?>

    <!--  css -->
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <?php include 'db_link.php'; ?>

    <?php
    $qur = "SELECT category FROM course_category";
    $ans = $conn->query($qur);
    ?>
    <div class="container">
        <h2 class="text-center mt-4">Add Course</h2>
        <div class="new_category_div">
            <a onclick="cat_btn_close()">X</a>
            <form action="add_category.php" method="POST">
                <label for="new_category">Add new Category:</label><br>
                <input class="form-control mt-2" type="text" id="new_category" name="cat_name" required>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success px-4">Add</button>
                </div>
            </form>
        </div>
        <form class="form1" action="add_course.php" method="post" enctype="multipart/form-data">

            <div class="cards">
                <div class="card_1">
                    <div>
                        <label for="title">Title:</label><br>
                        <input class="form-control" type="text" id="title" name="title" required>
                    </div>

                    <div>
                        <label for="category">Category</label>
                        <select class="form-control" id="cars" name="cars">
                            <option value=""></option>
                            <?php
                            if ($ans->num_rows > 0) {
                                while ($row = $ans->fetch_assoc()) {
                                    echo "<option value='{$row['category']}'>{$row['category']}</option>";
                                }
                            }
                            ?>
                        </select>
                        <a id="ct_on_btn" onclick="cat_on_btn()" class="btn btn-primary m-2">+ Add new</a>
                    </div>

                    <div>
                        <label for="hours">Hours:</label><br>
                        <input class="form-control" type="number" id="hours" name="hours" required>
                    </div>

                    <div>
                        <label for="cost">Cost:</label><br>
                        <input class="form-control" type="number" id="cost" name="cost" step="0.01" required>
                    </div>
                </div>

                <div class="card_2">
                    <div>
                        <label for="syllabus">Syllabus:</label><br>
                        <textarea class="form-control" type="te" id="syllabus" name="syllabus" required></textarea>
                    </div>

                    <div>
                        <label for="course_img">Upload Course Image:</label><br>
                        <input class="form-control" type="file" id="course_img" name="course_img" required>
                    </div>

                    <div>
                        <label for="description">Description:</label><br>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>

                    <div>
                        <label for="Trending"> Trending</label>
                        <input type="checkbox" id="Trending" name="Trending" value="Trending">
                    </div>

                    <div>
                        <label for="Offer"> Offer</label>
                        <input type="checkbox" id="Offer" name="Offer" value="Offer">
                    </div>

                    <div>
                        <label for="Special"> Special</label>
                        <input type="checkbox" id="Special" name="Special" value="Special">
                    </div>
                </div>
            </div>

            <div class="mt-2">
                <input class="btn btn-danger" type="reset" value="Reset">
            </div>

            <div class="text-center">
                <input class="btn btn-success px-5 py-2" type="submit" value="Submit">
            </div>
        </form>

        <br><br>
        <a href="course_list.php" class="allcrs">View all Courses</a>
    </div>

    <script>
        var add_category = document.querySelector(".new_category_div");

        function cat_on_btn() {
            add_category.style.height = "180px";
        }
        function cat_btn_close() {
            add_category.style.height = "0px";
        }
    </script>

</body>

</html>
