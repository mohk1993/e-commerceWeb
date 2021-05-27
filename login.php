<?php
include_once 'header.php';
?>
</div>
<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images\loginPage.jpg" width="100%">
            </div>
            <div class="col-2 colForm">
                <div class="form-container">
                    <div class="for-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="indicator">
                    </div>

                    <form action="includes\login.inc.php" method="post" id="logForm">
                        <input type="email" placeholder="Email" name="email" required="required">
                        <input type="password" placeholder="Password" name="password" required="required">
                        <button tybe="submit" name="submit" class="btn">Login</button>
                        <a href="">Forgot Password</a>
                    </form>

                    <form action="includes\register.inc.php" method="post" id="regForm">
                        <input type="text" placeholder="Username" name="username" required="required">
                        <input type="text" placeholder="Address" name="address" required="required">
                        <input type="text" placeholder="Phone" name="phone" required="required">
                        <input type="email" placeholder="Email" name="email" required="required">
                        <input type="password" placeholder="Password" name="password" required="required">
                        <input type="password" placeholder="Confirm Password" name="confirm_password" required="required">
                        <button tybe="submit" name="submit" class="btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ---------------- JS for toggle form ------------- -->
<script>
    var logForm = document.getElementById("logForm");
    var regForm = document.getElementById("regForm");
    var indicator = document.getElementById("indicator");
        function register(){
            regForm.style.transform = "translateX(0px)";
            logForm.style.transform = "translateX(0px)";
            indicator.style.transform = "translateX(100px)";
        }
        function login(){
            regForm.style.transform = "translateX(300px)";
            logForm.style.transform = "translateX(300px)";
            indicator.style.transform = "translateX(0px)";
        }
</script>
<?php
include_once 'footer.php';
?>