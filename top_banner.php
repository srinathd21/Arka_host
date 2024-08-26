<?php include 'links.php'; ?>
<link rel="stylesheet" href="css/top_banner.css">

<div class="tob_banner_div">
    <div class="banner_content">
        <button class="banner_close_btn" onclick="banner_close()">X</button>

    </div>
</div>

<script>
    let top_banner_div = document.querySelector('.tob_banner_div')

    function banner_close() {
        top_banner_div.style.display = 'none'
        localStorage.setItem('adShown', 'true');
    }

    function showAd() {
        document.querySelector('.tob_banner_div').style.display = 'block';
    }

    setTimeout(showAd, 5000);

    // Check if the ad has been shown before
    // if (!localStorage.getItem('adShown')) {
    //     setTimeout(showAd, 5000);
    // }
</script>