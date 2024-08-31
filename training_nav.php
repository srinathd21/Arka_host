<link rel="stylesheet" href="css/training_nav_v.2.css">
<div style="background-color:white;">
<nav class="container">
    <button class="btn d-lg-none mx-3" style="margin-top: -5px ;" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#demo">
        <i class="fa-solid fa-bars" style="color: #000000;"></i>
    </button>

    <div class="logo_img ">
        <img src="img/Arka_logo.png" alt="">
    </div>

    <div class="dropdown">
        <button type="button" class="nav_dropdown" data-bs-toggle="dropdown">
            Categories <i class="fa-solid fa-chevron-down" style="color: rgb(83, 83, 83); font-size:12px;"></i>
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Link 1</a></li>
            <li><a class="dropdown-item" href="#">Link 2</a></li>
            <li><a class="dropdown-item" href="#">Link 3</a></li>
        </ul>
    </div>
    <div class="srch_input">
        <input class="srch_input_1" type="text" placeholder="Search">
        <button><i class="fa-solid fa-magnifying-glass" style="color: #ffffff !important;"></i></button>
    </div>
    <div class="nav_links">
        <ul>
            <li><a href="">Identify your career</a></li>
            <li><a href="">Support</a></li>
            <li><a href="">Sign in <span class="profile_icon"><i style="font-size:17px; color:gray;"
                            class="fa-regular fa-user"></i></span> </li></a>
        </ul>
    </div>

    <!-- Offcanva -->

    <div class="offcanvas offcanvas-start offcanvas-lg" id="demo" style="background-color:#f2f2f2;">
        <div class="offcanvas-header mb-5">
            <div class="logo_img_mob">
                <img src="img/Arka_logo.png" alt="">
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="">
            <div>
                <a id="top_nav_link_mob" href="index.php">For Business</a>
            </div>

            <div>
                <a id="top_nav_link_mob" href="training.php">For Training</a>
            </div>
            <div class="">
                <a type="button" class="dropdown_mob" data-bs-toggle="dropdown">
                    Categories <i class="fa-solid fa-chevron-down" style="color: rgb(83, 83, 83); font-size:12px;"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Link 1</a></li>
                    <li><a class="dropdown-item" href="#">Link 2</a></li>
                    <li><a class="dropdown-item" href="#">Link 3</a></li>
                </ul>
            </div>
            <ul class="nav_link_mob">
                <li><a href="">Identify your career</a></li>
                <li><a href="">Support</a></li>
            </ul>
        </div>
    </div>
    <div>
        <a href=""><span class="profile_icon_mob"><i style="font-size:17px; color:gray; margin-right: 10px;"
                    class="fa-regular fa-user"></i></span> </li></a>
    </div>

</nav>
</div>