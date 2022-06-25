<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KFC</title>
        <link rel="stylesheet" href="A2/css/style.css"type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="sidelogo">
                    <a href="Homepage.php"><img src="A2/image/logoKFC.png" alt="KFC_side_logo"></a>
                </div>
                <div id="subheader">
                    <div class="container">  
                        <a href="A3/reg.php">SIGN IN</a>
                        <a>CONTACT US</a>
                        <a href="A3/order.php">ORDER</a>
                        <a href="A3/menu.php">MENU</a>
                        <a href="Homepage.php">HOME</a>
                    </div>
                </div>
                </div>
                <div>
                    <p></p>
                </div>
                
                <!-- Slideshow container -->
                    <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img src="A2/image/slider1.png" style="width:100%">
                </div>
  
                <div class="mySlides fade">
                    <img src="A2/image/slider2.jpg" style="width:100%">
                </div>
  
                <div class="mySlides fade">
                    <img src="A2/image/slider3.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="A2/image/slider4.png" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="A2/image/slider5.jpg" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="A2/image/slider6.jpg" style="width:100%">
                </div>
  
                <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
            <br>
  
                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    <span class="dot" onclick="currentSlide(4)"></span>
                    <span class="dot" onclick="currentSlide(5)"></span>
                    <span class="dot" onclick="currentSlide(6)"></span>
                </div>
  
            <script>
                var slideIndex = 1;
                showSlides(slideIndex);
    
                function plusSlides(n) {
                showSlides(slideIndex += n);
                }
    
                 function currentSlide(n) {
                 showSlides(slideIndex = n);
                }
    
                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  }

                    for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");}
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " active";}
            </script>

                <!--Category-->
                <div class="container">
                <div id="heading">
                    <h2>MENU</h2>
                </div>
                <!--category1-->
                <a href="A2/Boxmeals.php">
                <div class="categorybox">
                    <img src="A2/image/boxmeals.webp" alt="">
                    <span>Box Meals</span>
                </div>
                </a>
                <!--category2-->
                <a href="A2/Chickenmeals.php">
                <div class="categorybox">
                    <img src="A2/image/chickenmeals.webp" alt="">
                    <span>Chicken Meals</span>
                </div>
                </a>
                <!--category3-->
                <a href="A2/Burgers.php">
                <div class="categorybox">
                    <img src="A2/image/burgers.webp" alt="">
                    <span>Burgers</span>
                </div>
                </a>
                <!--category4-->
                <a href="A2/Sides&Snacks.php">
                <div class="categorybox">
                    <img src="A2/image/s&s.webp" alt="">
                    <span>Sides & Snacks</span>
                </div>
                </a>
                <!--category5-->
                <a href="A2/Drinks.php">
                    <div class="categorybox">
                        <img src="A2/image/drinks.webp" alt="">
                        <span>Drinks</span>
                    </div>
                    </a>
                <!--category5-->
                    <a>
                    <div class="categorybox">
                        <img src="A2/image/comingsoon.png" alt="">
                        <span>COMING SOON</span>
                    </div>
                    </a>
                <br><br>
                
                
                <div class="container">
                    <div id="heading">
                        <h2>HIGHLIGHTS</h2>
                    </div>
                        <div class="offer">
                            <a><img src="A2/image/slider2.jpg" alt=""></a>
                        </div>
                        <div class="offer">
                            <a><img src="A2/image/slider3.png" alt=""></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div id="footer">
                    <div class="container">
                        <div class="footer_sub">
                            <h2>About Us</h2>
                            <ul>
                                <li><a>KFC Malaysia</a></li>
                                <li><a>The Colonel's Story</a></li>
                                <li><a>Milestone and Achievements</a></li>
                                <li><a>CSR</a></li>
                                <li><a>New</a></li>
                                <li><a>Join Us</a></li>
                                <li><a>Scam Alert</a></li>
                            </ul>
                        </div>
                        <div class="footer_sub">
                            <h2>Food</h2>
                            <ul>
                                <li><a>FAQ</a></li>
                                <li><a>Terms and Conditions</a></li>
                                <li><a>Quality Assurance</a></li>
                                <li><a>Halal Policy</a></li>
                                <li><a>Nutrition Facts</a></li>
                            </ul>
                        </div>
                        
                        <div class="footer_sub_2">
                            <h2>Subscribe Us</h2>
                                <input type="text" name="email" class="email" placeholder="Enter your e-mail">
                                <input type="submit" name="submit" value="SUBSCRIBE" class="submit">
                                <p class="sub">Get latest promotions and news.</p>
                        </div>
                    </div>
                </div>
    </div>
    </body>
</html>