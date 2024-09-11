<style>
    #accordion>div{
        margin-bottom: 15px;
    }

    #accordion a {
        position: relative;
        width: 100%;
        display: inline-block;
        padding: 7px;
        text-decoration: none;
        font-size: 20px;
        color: #323130 !important;
    }
    #accordion a i{
        position: absolute;
        right: 20px;
        top: 15px;
        color: #6e6e6e !important;
        font-size: 15px;
    }
</style>
<!-- Students Doubts  -->
<div class="container mt-5 mb-5">
    <div class="mb-5">
        <h3>Frequently Asked Questions</h3>
    </div>
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a class="" data-bs-toggle="collapse" href="#collapseOne">
                    Collapsible Group Item #1<i class="fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo">
                    Collapsible Group Item #2<i class="fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseThree">
                    Collapsible Group Item #3<i class="fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
        </div>
    </div>
</div>