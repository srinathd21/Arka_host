<link rel="stylesheet" href="css/popup_banner.css">

<div class="popup_banner">
    <div class="banner_content">
        <button class="banner_close_btn" onclick="banner_close()">X</button>
        <div class="banner_getdata">
            <div class="popbanner_title">
                <h3>Get in touch</h3>
            </div>

            <div class="bannerinputs">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="contact">Contact</label>
                <input type="tel" name="contact" id="contact">
                <label for="course">Course</label>
                <input type="text" name="course" id="course">

                <div>
                    <button onclick="opentq()" class="popupSendbtn">SEND <span><span id="lettericon">&#9993;</span></span></button>
                </div>
            </div>
        </div>
        <div class="bannermsg">
            <div>
                <h1>Thank <br>You.</h1>
            </div>
            <div>
                <p>We'll be in touch <br> Shortly!</p>

                <div>
                    <button onclick="banner_close()" class="popupNextbtn">Next <span><span id="arrowicon">&rarr;</span></span></button>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    let top_banner_div = document.querySelector('.popup_banner')

    function banner_close() {
        top_banner_div.style.display = 'none'
        localStorage.setItem('adShown', 'true');
    }

    function showAd() {
        document.querySelector('.popup_banner').style.display = 'block';
    }

    let inptbox =document.querySelector(".banner_getdata")
    let msgbox =document.querySelector(".bannermsg")

    function opentq(){
        inptbox.style.display='none';
        msgbox.style.display='block';
    }

    setTimeout(showAd, 5000);

    // Check if the ad has been shown before
    // if (!localStorage.getItem('adShown')) {
    //     setTimeout(showAd, 5000);
    // }
</script>