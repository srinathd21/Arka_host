<style>
    .card-header a {
        font-size: 15px !important;
        font-weight: 600;
        font-style: normal;
        color: rgb(52, 52, 52);
    }
    .card{
        width: 60vw;
        border: none;
        border-left: 3px solid #23bca0;
        background-color: rgb(238, 254, 249,0.1);
        border-radius: 10px;
        color: rgb(52, 52, 52);

    }
    .card-header{
        border-radius: 10px !important,0px;
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

    .card-body{
        font-size: 15px !important;
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

    @media screen and (max-width: 992px){
        .card{
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
                    We offer IT training, internships, inplant training, and software development services. You can
                    learn advance
                    technologies in programming, cloud computing, and more. We also help businesses with website
                    development, app
                    customization, and IT solutions.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo">
                    Who can join your training programs?<i class="fa-solid fa-chevron-down rotate-icon"></i>
                </a>
            </div>
            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    Anyone interested in learning technology can join. We offer courses for students, working
                    professionals, and even
                    school kids from 6th to 12th grade.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseThree">
                    Do you provide job placement assistance after training?<i class="fa-solid fa-chevron-down rotate-icon"></i>
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    Yes, we help students with job placement after they complete the course. Many of our students have
                    been placed in
                    top companies.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseFour">
                    What is the fee structure for your courses?<i class="fa-solid fa-chevron-down rotate-icon"></i>
                </a>
            </div>
            <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    Our fees vary depending on the course. You can contact us or visit our website for the latest fee
                    details. We aim to
                    offer quality training at affordable prices.
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
                    Our training is mostly hands-on. We focus on practical learning so you can apply the skills directly
                    in real-world
                    projects.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <a class="collapsed" data-bs-toggle="collapse" href="#collapseSix">
                    Where is your office located, and how do I contact you?<i class="fa-solid fa-chevron-down rotate-icon"></i>
                </a>
            </div>
            <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    We are located in Hosur<a
                        style="text-decoration:underline; display:inline; color:#004bee !important;"
                        href="https://www.google.com/maps/place/Arka+Networkz+System/@12.7360388,77.8222739,17z/data=!3m1!4b1!4m6!3m5!1s0x3bae7185e99a9cb5:0x3520348054405036!8m2!3d12.7360336!4d77.8248488!16s%2Fg%2F11t1ds8dv0?authuser=0&entry=ttu"
                        target="_blank">click</a>here. You can visit our office, call us, or reach out via our website
                    for more details. We
                    are happy to help!
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