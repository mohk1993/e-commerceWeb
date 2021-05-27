    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p> Download App For Android And ios Mobile Phone. </p>
                    <div class="app-logo">
                        <img src="images\Apple-App-Store-Icon.png" alt="">
                        <img src="images\google-play.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images/Logo.PNG" alt="" width="115px">
                    <p> Is Your Best Way To Sell And Buy From People Near You. </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li> Coupons </li>
                        <li> Return Policy </li>
                        <li> About Us </li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li> Facebook </li>
                        <li> Twitter </li>
                        <li> Instagram </li>
                        <li> YouTube </li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2021 - Mohanad Kher</p>
        </div>
    </div>
 <!-- -------------- JS for toggle minu ---------------- -->
    <script>
        var minuItems = document.getElementById("minuItems");
        minuItems.style.maxHeight = "0px";

        function minuToggle(){
            if(minuItems.style.maxHeight == "0px"){
                minuItems.style.maxHeight = "200px";
            }
            else
            {
                minuItems.style.maxHeight = "0px";
            }
        }
    </script>

    <!-- ----------  js for product gallery ---------- -->
    <script>
        var productImg = document.getElementById("productImg");
        var smallImg = document.getElementsByClassName("smallImg");
        smallImg[0].onclick = function(){
            productImg.src = smallImg[0].src;
        }
        smallImg[1].onclick = function(){
            productImg.src = smallImg[1].src;
        }
        smallImg[2].onclick = function(){
            productImg.src = smallImg[2].src;
        }
        smallImg[3].onclick = function(){
            productImg.src = smallImg[3].src;
        }
    </script>
</body>
</html>