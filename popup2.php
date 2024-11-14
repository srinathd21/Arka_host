<style>
.UserFormFrontPage{
    display: none;
    height: 100%;
    width: 100%;
    background-color: rgba(214, 214, 214, 0.9);
    position: fixed;
    top: 0px;
    z-index: 10;
}
.UserInnerForm span{
    display: inline-block;
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 15px;
    cursor: pointer;

}
.UserInnerForm{
    background-color: #fbfbfb;
    padding: 30px;
    width: 350px;
    margin: 100px auto;
    color: #1e1e1e;
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-sizing: border-box;
}
.UserInnerForm input{
    width: 100%;
    padding: 10px;
    border: none;
    background-color: #e9e9e9;
    margin-bottom: 15px;
    font-size: 13px;
}
.UserInnerForm input::placeholder{
    color: #757575;
}
.UserInnerForm button{
    width: 100%;
    padding: 10px 20px;
    background-color: #d9d9d9;
    border: none;
    color: #1e1e1e;
    font-size: 16px;
    cursor: pointer;
}
.UserInnerForm p{
    font-size: 12px;
    text-align: center;
}
@media screen and (max-width: 500px) {
    .UserInnerForm{
        position: absolute;
        width: 100%;
        bottom: -110px;
        padding: 30px 35px;
    }
    .UserFormFrontPage{
        background-color: rgba(214, 214, 214, 0.4)
    }
}
</style>
<div class="UserFormFrontPage">
        <form class="UserInnerForm">

            <span onclick="closeuserform()"><i class="fa-solid fa-x"></i></span>

            <h4 class="mb-3">Interested to learn <br> new skills?</h4>

            <div><input id="username" type="text" name="name" placeholder="Name"></div>
            <div><input id="usercontact" type="tel" name="contact" placeholder="Phone Number"></div>
            <div><input type="email" name="email" placeholder="Mail ID(optional)"></div>

            <div>
                <p>87% learners upskilling to get high paying IT jobs</p>
            </div>

            <button id="userformbtn" type="submit" disabled>I'm interested</button>

        </form>
</div>
<script>
        var userform = document.querySelector('.UserFormFrontPage');
        var userbtn = document.getElementById('userformbtn');
        var username = document.getElementById('username');
        var usercontact = document.getElementById('usercontact');

        function closeuserform() {
            let body = document.querySelector('body')
            body.style.overflow = 'auto';
            userform.style.display = 'none';
        }
        function openuserform() {
            let body = document.querySelector('body')
            body.style.overflow = 'hidden';
            userform.style.display = 'block';
        }
        function updateButtonState() {
        if (username.value.length > 2 && usercontact.value.length > 9) {
            userbtn.style.background = '#008535';
            userbtn.style.color = 'white';
            userbtn.disabled = false;
        } else {
            userbtn.style.background = '#d9d9d9';
            userbtn.style.color = '#1e1e1e';
            userbtn.disabled = true;
        }
    }
    usercontact.addEventListener('input', updateButtonState);
    username.addEventListener('input', updateButtonState);

    </script>