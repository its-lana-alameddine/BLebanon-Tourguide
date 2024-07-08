<!DOCTYPE html>
<?php
session_start();
require_once 'includes/database.php';
require_once 'includes/register-inc.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="projectImages/iconn-removebg-preview.png">
    <script src="https://kit.fontawesome.com/ca62e1404f.js" crossorigin="anonymous"></script>
    <!-- slider links  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <!-- slider links  -->
    <title>B Lebanon</title>
</head>

<body>
    <div class="fixed1" id="fixed">
    <script>
        fixedheader= document.querySelector('#fixed');
        window.addEventListener('scroll', () => {
            console.log(window.scrollY);
            if (window.scrollY >= 50) {
                fixedheader.classList.add('header-colored');
            } else {
                fixedheader.classList.remove('header-colored');
            }
        })
    </script>
        <header>
            <a href="touristguide project.php"><img src="projectImages/blebanonlogo.png" alt="logo" class="img"></a>
            <caption class="bLebanon">
                <a href="touristguide project.php" class="backhome">
                    <h1 class="bLebanon">B Lebanon</h1>
                </a>
            </caption>
        </header>
        <nav>
            <div class="nav">
                <div class="h">
                    <a href="hotels.php" class="h1">
                        <span class="h2"> Hotels </span>
                        <span class="h3"> <img src="projectImages/bed-icon-removebg-preview (1).png" alt="Bed"
                                class="himage"> </span>
                    </a>
                </div>
                <div class="th">
                    <a href="Thingstodo.php" class="th1">
                        <span class="th2">Things to do</span>
                        <span class="th3"><img src="projectImages/th-removebg-preview (2).png" alt="Error"
                                class="thimage"></span>
                    </a>
                </div>
                <div class="r">
                    <a href="Restaurants.php" class="r1">
                        <span class="r2">Restaurants</span>
                        <span class="r3"><img src="projectImages/food-removebg-preview.png" alt="Restaurant"
                                class="rimage"></span>
                    </a>
                </div>
                <div class="tr">
                    <a href="Transportations.php" class="tr1">
                        <span class="tr2">Transportations</span>
                        <span class="tr3"><img src="projectImages/transp-removebg-preview.png" alt="Transportation"
                                class="trimage"></span>
                    </a>
                </div>
                <div class="c">
                    <a href="#contact" class="c1">
                        <span class="c2">Contact</span>
                        <span class="c3"><img src="projectImages/contact-removebg-preview.png" alt="contact"
                                class="cimage"></span>
                    </a>
                </div>
<?php

if (!isset($_SESSION['sessionemail'])) {
    echo "<div class='l' id='login'>";
    echo "<div class='l1'>";
    echo "<span class='l2'>Log In</span>";
    echo "<span class='l3'><img src='projectImages/login.png' alt='login' class='limage'></span>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</nav>";
    echo "</div>";
} else {
    echo "<div class='th'>";
    echo "<a href='includes/logout-inc.php' class='th1'>";
    echo "<span class='th2'>Log out</span>";
    echo "</a></div>";
    echo "<span class='l31'><img src='projectImages/login.png' alt='login' title='my profile' class='limage' style='width: 50px;height: 50px;'></span>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</nav>";
    echo "</div>";
}
?>

<?php require_once "login-register/login-register.php" ?>


    <div class="welcomeContainer">
        <div class="wallpaper homepage extra-padding">
            <img src="projectImages/lebanon_homepage.jpg" alt="" class="wallpaper">
            <div class="welcome">
                <span class="text1">Welcome</span> 
                <span class="text1">to</span> 
                <span class="text1">Lebanon!</span> <br>
                <span class="lineDown2">Bienvenue au Liban!</span> <br>
                <span class="lineDown">! اهلا وسهلا بكم في لبنان</span> <br>
            </div>
        </div>
    </div>

    <div class="introduction">
        Lebanon's diverse atmosphere and ancient history make it an important tourist destination,
        and the country is slowly rebuilding itself after years of conflict.
        Lebanon has a lot to offer, from ancient Roman ruins to well-preserved castles, limestone caves, historic
        Churches and Mosques,
        beautiful beaches nestled in the Mediterranean Sea, world-renowned Lebanese cuisine, nonstop nightlife and
        discothèques, and mountainous ski resorts.
    </div>

    <hr>

    <marquee behavior="scroll" direction="left" scrollamount="15" onmouseover="stop()" onmouseout="start()">
        <div class="slideshow">
            <div class="slides">
                <img src="projectImages/leb1.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb32.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb2.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb39.avif">
            </div>

            <div class="slides">
                <img src="projectImages/leb20.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb3.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb16.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/lebanon4.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb36.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/lebanon7.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb5.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb40.avif">
            </div>

            <div class="slides">
                <img src="projectImages/leb26.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb37.avif">
            </div>

            <div class="slides">
                <img src="projectImages/lebanon3.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb6.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb38.avif">
            </div>

            <div class="slides">
                <img src="projectImages/leb31.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb8.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb41.avif">
            </div>

            <div class="slides">
                <img src="projectImages/leb22.jpg">

            </div>
            <div class="slides">
                <img src="projectImages/leb9.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb27.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb10.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb11.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb28.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb12.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb19.png">
            </div>

            <div class="slides">
                <img src="projectImages/leb13.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb30.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb23.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb14.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb33.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb15.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb21.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb17.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb35.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb29.jpg">
            </div>

            <div class="slides">
                <img src="projectImages/leb18.jpeg">
            </div>
        </div>
    </marquee>

<?php
require_once 'slider/slider1.php';
?>

<!-- FOOTER STARTS -->
<footer class="footer" id="contact">
    <div class="maincontent">
        <div class="left box">
            <h2>About us</h2>
            <div class="content">
                <p>Despite the fact that things are challenging in Lebanon, we are honored to be the guide you trust 
                    to show you the beautiful sights of the country and its full-of-life experience.</p>
                <div class="social">
                    <a href=""><span class="fa-brands fa-facebook-f"></span></a>
                    <a href=""><span class="fa-brands fa-twitter"></span></a>
                    <a href=""><span class="fa-brands fa-instagram"></span></a>
                    <a href=""><span class="fa-brands fa-youtube"></span></a>
                </div>
            </div>
        </div>
        <div class="center box">
            <h2>Address</h2>
            <div class="content">
                <div class="place">
                    <a href="https://goo.gl/maps/XJHz1dYVQejyRn1p9"><span class="fa-solid fa-location-dot"></span></a>
                    <span class="text"><a href="https://goo.gl/maps/XJHz1dYVQejyRn1p9" target="_blank">Tripoli, Lebanon</a></span>
                </div>
                <div class="phone">
                    <a href="tel:+961-71000000"><span class="fa-solid fa-phone"></span></a>
                    <span class="text"><a href="tel:+961-71000000">+961-71000000</a></span>
                </div>
                <div class="email">
                    <a href="mailto:BLebanonn@hotmail.com" target="_blank"><span class="fa-solid fa-envelope"></span></a>
                    <span class="text"><a href="mailto:BLebanonn@hotmail.com" target="_blank">BLebanonn@hotmail.com</a></span>
                </div>
            </div>
        </div>
        <div class="rightt box">
            <h2>Contact us</h2>
            <div class="content">
                <form action="contact/contact.php" method="post">
                    <div class="email">
                        <div class="text">Email *</div>
                        <input type="email" name="email" required>
                    </div>
                    <div class="mesg">
                        <div class="text">Message *</div>
                        <textarea cols="25" rows="2" name="message" required></textarea>
                    </div>
                    <div class="btnn">
                        <button type="submit" name="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom">
        <center>
            <span class="credit"><a href="#" style="color:silver">Privacy Policy</a><span class="dot">  •  </span></span>
            <span class="credit">Created By <a href="#">B-Lebanon</a> •   </span>
            <span class="fa-regular fa-copyright"></span><span> 2022 All rights reserved.</span>
        </center>
    </div>
</footer>

<script src="https://kit.fontawesome.com/ca62e1404f.js" crossorigin="anonymous"></script> 
<script src="https://kit.fontawesome.com/ca62e1404f.js" crossorigin="anonymous"></script>
</body>
</html>