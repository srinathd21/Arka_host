<style>
     *{
    margin:0px;
    padding: 0px;
    font-family: "Segoe UI", Arial, sans-serif;
  }

  nav {
    height: 70px;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo_img {
    width: 100px;

}

.logo_img img {
    width: 100%;
}

.nav_dropdown {
    background-color: white;
    border: none;
    font-size: 15px;
    color: rgb(69, 69, 69);
}

.srch_input {
    position: relative;
}

.srch_input_1 {
    width: 350px;
    height: 50px;
    border-radius: 30px;
    border: 1px solid rgb(226, 226, 226);
    padding-left: 20px;
}

.srch_input_1:focus {
    border: 1px solid rgb(160, 160, 160);
    outline: none;
}

.srch_input button {
    position: absolute;
    top: 5px;
    right: 5px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: none;
    background-color: green;
}

.srch_input_mob {
    display: none;
    position: absolute;
    right: 10px;
    top: -14px;
}

.srch_input_1_mob {
    width: 30px;
    height: 30px;
    border-radius: 30px;
    border: 1px solid rgb(226, 226, 226);
    padding-left: 10px;
    transition: 1s;
}

.srch_input_1_mob:focus {
    border: 1px solid rgb(160, 160, 160);
    outline: none;
}

.srch_input_mob:hover .srch_input_1_mob {
    width: 150px;
}

.srch_input_mob button {
    position: absolute;
    top: 5px;
    right: 5px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    text-align: center;
    border: none;
    background-color: green;
}

.nav_links {
    display: inline;
}

.nav_links ul {
    display: inline-flex;
    align-items: center;
    list-style-type: none;
    padding-left: 0px;
    padding-top: 15px;

}

.nav_links ul a {
    display: inline-block;
    color: rgb(69, 69, 69);
    text-decoration: none;
    margin-right: 35px;
    font-size: 15px;
}

.profile_icon {
    display: inline-block;
    padding: 8px 10px;
    margin-left: 5px;
    border-radius: 50%;
    border: 1px solid gray;
}

.nav_link_mob {
    list-style: none;
    padding-left: 0px;

}

.nav_link_mob li a {
    color: rgb(69, 69, 69);
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
}
#top_nav_link_mob {
    text-decoration: none;
    display: inline-block;
    color: rgb(69, 69, 69);
    margin: 10px 0px;
}

@media screen and (max-width: 992px) {

.dropdown,
.nav_links,
.srch_input,
.cover_img_pc {
    display: none;
}

.cover_img_mob {
    display: block;
}

.srch_input_mob {
    display: block;
}

.logo_img {
    margin-left: -65px;
    width: 80px;

}

}

</style>
<nav class="container">
        <button class="btn d-lg-none mx-3" style="margin-top: -5px ;" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#demo">
            <i class="fa-solid fa-bars" style="color: #000000;"></i>
        </button>
        <div class="logo">
            <div class="logo_img">
                <img src="img/Arka_logo.png" alt="">
            </div>
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
            <button><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
        </div>
        <div class="nav_links">
            <ul>
                <li><a href="">Identify your career</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">Sign in <span class="profile_icon"><i style="font-size:25px; color:gray;"
                                class="fa-regular fa-user"></i></span> </li></a>
            </ul>
        </div>

        <!-- Offcanva -->

        <div class="offcanvas offcanvas-start offcanvas-lg" id="demo">
            <div class="offcanvas-header">
                <h1 class="offcanvas-title mx-auto">Arka Technology</h1>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body">
                <div>
                    <a id="top_nav_link_mob" href="index.php">For Business</a>
                </div>

                <div>
                    <a id="top_nav_link_mob" href="training.php">For Training</a>
                </div>
                <div class="dropdown_mob">
                    <button type="button" class="nav_dropdown mt-2" data-bs-toggle="dropdown">
                        Categories <i class="fa-solid fa-chevron-down"
                            style="color: rgb(83, 83, 83); font-size:12px;"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Link 1</a></li>
                        <li><a class="dropdown-item" href="#">Link 2</a></li>
                        <li><a class="dropdown-item" href="#">Link 3</a></li>
                    </ul>
                </div>
                <ul class="nav_link_mob">
                    <li><a href="">Identify your career</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">Sign in <span class="profile_icon"><i style="font-size:25px; color:gray;"
                                    class="fa-regular fa-user"></i></span> </li></a>
                </ul>
            </div>
        </div>
        <div style="display:flex; position:relative;">
            <div class="srch_input_mob">
                <input class="srch_input_1_mob" type="text">
                <button><i class="fa-solid fa-magnifying-glass"
                        style="color: #ffffff;font-size:12px; position:relative;top:-3px;"></i></button>
            </div>

        </div>

    </nav>
