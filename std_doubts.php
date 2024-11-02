<style>
    .card-header a {
        font-size: 12px !important;
        font-weight: 600;
        font-style: normal;
        color: rgb(52, 52, 52);
    }

    .card {
        width: 60vw;
        border: none;
        border-left: 3px solid #23bca0;
        background-color: rgb(238, 254, 249, 0.1);
        border-radius: 10px;
        color: rgb(52, 52, 52);

    }

    .card-header {
        border-radius: 10px !important, 0px;
        font-size: 12px;
    }

    #accordion>div {
        margin: 0px auto 15px;
    }

    #accordion a {
        position: relative;
        width: 100%;
        display: inline-block;
        padding: 7px;
        text-decoration: none;
        color: #323130 !important;
    }

    .card-body {
        font-size: 11px !important;
    }

    #accordion a i {
        position: absolute;
        right: 0px;
        top: 11px;
        color: #23bca0 !important;
        font-size: 13px;
        font-weight: 600;
    }

    .rotate-icon.active {
        transform: rotate(180deg);
    }

    @media screen and (max-width: 992px) {
        .card {
            width: 100%;
        }

        #accordion a i {

            right: -10px;
        }
    }
</style>
<!-- Students Doubts  -->
<div class="container mt-5 mb-5">
    <div class="mb-4">
        <h3>Frequently Asked Questions</h3>
    </div>
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a class="" data-bs-toggle="collapse" href="#collapseOne">
                    What services does Arka Technologies provide?<i class="fa-solid fa-chevron-down rotate-icon"></i>
                </a>
            </div>
            <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    Arka Technologies provides IT training, internships, in-plant training, and software development
                    services. You can learn advanced technologies in programming, cloud computing, and more. We also
                    help micro and small businesses with website development, app customization, and IT solutions.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo">
                    Who can join the training programs?<i class="fa-solid fa-chevron-down rotate-icon"></i>
                </a>
            </div>
            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                Anyone interested in learning technology can join. Arka specifically offers courses for students, working professionals, and school students from 6th to 12th grade.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseThree">
                    Does Arka Technology provides job placement assistance after training?<i
                        class="fa-solid fa-chevron-down rotate-icon"></i>
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                Yes, Arka Technologies offers job placement assistance to students who have completed a prior course, after the completion of the current course.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseFour">
                    What is the fee structure for courses in Arka Technologies?<i
                        class="fa-solid fa-chevron-down rotate-icon"></i>
                </a>
            </div>
            <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                The fee structure varies depending on the course. You can contact us or visit the Arka Technologies official website for the latest fee details. Arka Technologies aims to offer quality training at affordable prices.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseFive">
                    Is the training practical or theoretical?<i class="fa-solid fa-chevron-down rotate-icon"></i>
                </a>
            </div>
            <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                Training at Arka Technologies is mostly hands-on, focusing on practical learning so you can directly apply the skills in real-world projects.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseSix">
                    Where is Arka Technologies Located?<i class="fa-solid fa-chevron-down rotate-icon"></i>
                </a>
            </div>
            <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                Arka Technologies is located in the urban area of Hosur. Our office is just a 100-meter walk from the Hosur Main Bus Stand and 1.2 km from the Hosur Railway Station.<br><br>
                    How to Contact Us:<br><br>
                    No prior appointment is required, you can visit us directly!

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseSeven">
                    Why Choose Arka Technologies for Your Career Growth?<i
                        class="fa-solid fa-chevron-down rotate-icon"></i>
                </a>
            </div>
            <div id="collapseSeven" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                Arka Technologies, a premier training institute in Hosur, offers cutting-edge courses that align with the latest industry trends and technological advancements, ensuring students are always ahead of the curve. From foundational training to advanced skill development, Arka Technologies has been trusted by many, as reflected in our positive Google reviews from satisfied students.
                    <br><br>
                    Check out what our clients have to say: <a
                        style="text-decoration:underline; display:inline; color:#004bee !important;"
                        href="https://www.google.com/maps/place/Arka+Networkz+System/@12.7360388,77.8222739,17z/data=!3m1!4b1!4m6!3m5!1s0x3bae7185e99a9cb5:0x3520348054405036!8m2!3d12.7360336!4d77.8248488!16s%2Fg%2F11t1ds8dv0?authuser=0&entry=ttu"
                        target="_blank">Click here [https://maps.app.goo.gl/7kcv46nm5zt3m3DGA?g_st=iwb]</a>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('[data-bs-toggle="collapse"]').forEach(function (element) {
        element.addEventListener('click', function () {
            let icon = this.querySelector('.rotate-icon');
            let targetCollapse = document.querySelector(this.getAttribute('href'));

            targetCollapse.addEventListener('shown.bs.collapse', function () {
                icon.classList.add('active');
            });
            targetCollapse.addEventListener('hidden.bs.collapse', function () {
                icon.classList.remove('active');
            });
        });
    });

</script>