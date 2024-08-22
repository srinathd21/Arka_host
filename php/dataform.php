<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="form.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<body>
    <div class="form-container" style="position: relative;">

        <div class="section1">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://arka.org.in/img/Arka%20Drops%20copy%202_mob.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://arka.org.in/img/Arka%20Drops%20copy_mob.jpg" class="d-block" alt="...">
                    </div>
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>
            <div class="section2">
                <form action="excel.php" method="post">
                    <h3 style="text-align: center; margin-bottom: 40px;color: black;">GET IN TOUCH</h3>
                    <div class="form-group">
                        <label for="username">Username:</label><br>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact:</label><br>
                        <input type="contact" id="contact" name="contact" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label><br>
                        <textarea rows="3" name=" msg" id=""></textarea>
                    </div>


                    <div class="btn_section">
                        <div class="sendbtn">

                        </div>

                        <button type="submit" class="send_btn">
                            <i class="fa-brands fa-telegram icon" style=""></i>
                        </button>

                    </div>
                    <script src="https://kit.fontawesome.com/8b7cdef8f0.js" crossorigin="anonymous"></script>
                </form>
            </div>
        </div>



</body>

</html>