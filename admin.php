<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <?php include 'links.php'; ?>

    <!--  css -->
    <link rel="stylesheet" href="css/adcors.css">
</head>

<body>

    <div class="container">
        <h2 class="text-center mt-4">Add Course</h2>
        <form action="add_course.php" method="post" enctype="multipart/form-data">
            <div class="cards">
                <div class="card_1">
                    <div>
                        <label for="title">Title:</label><br>
                        <input class="form-control" type="text" id="title" name="title" required>
                    </div>

                    <div>
                        <label for="category">Category</label>
                        <select class="form-control" id="cars" name="cars">
                            <option value="none">Select</option>
                            <option value="Software">Software</option>
                            <option value="Ui/Ux">Ui/Ux</option>
                            <option value="Network">Network</option>
                            <option value="Basics">Basics</option>
                        </select>
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
                        <label for="file_link">File Link:</label><br>
                        <input class="form-control" type="text" id="file_link" name="file_link" required>
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

            <div class="text-center mt-3">
                <input class="btn btn-success" type="submit" value="Submit">
            </div>
        </form>

        <br><br>
        <a href="course_list.php">All Courses</a>
    </div>

</body>

</html>