<link rel="stylesheet" href="css/popup_banner.css">

<div class="popup_banner">
    <div class="banner_content">
        <button class="banner_close_btn" onclick="banner_close()"><i class="fa-solid fa-x"></i></button>
        <div class="banner_getdata">
            <div class="popbanner_title">
                <h3>Get in touch</h3>
            </div>

            <form class="bannerinputs"  method="POST" action="customers.php">
                <input type="hidden" name="course" id="ctitle">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
                <label for="contact">Contact</label>
                <input type="tel" name="contact" id="contact" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <div>
                    <button type="submit" class="popupSendbtn">Next</button>
                </div>
            </form>
        </div>
        <div class="bannermsg">
            <div>
                <h1>Thank <br>You.</h1>
            </div>
            <div>
                <p>We'll be in touch <br> Shortly!</p>
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

    function showAd(ctitle) {
        console.log(ctitle)
        document.querySelector('.popup_banner').style.display = 'block';
        document.getElementById('ctitle').value = ctitle;
    }

    let inptbox =document.querySelector(".banner_getdata")
    let msgbox =document.querySelector(".bannermsg")

    function opentq(){
        inptbox.style.display='none';
        msgbox.style.display='block';

        function closeTq(){
            document.querySelector('.popup_banner').style.display = 'none';
        }
    setTimeout(closeTq, 3000); 
    }

    // Check if the ad has been shown before
    // if (!localStorage.getItem('adShown')) {
    //     setTimeout(showAd, 5000);
    // }
</script>