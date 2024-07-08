<!DOCTYPE html>
<?php
session_start();
require_once 'includes/database.php';
require_once 'includes/register-inc-n.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="projectImages/iconn-removebg-preview.png">
    <title>B Things to do</title>
</head>

<body>
<div class="fixed2">
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
    echo "<span class='l31'><img src='projectImages/login.png' alt='login' title='your profile' class='limage' style='width: 50px;height: 50px;'></span>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</nav>";
    echo "</div>";
}
?>


<?php require_once "login-register/login-register-n.php" ?>




<section class="night"> 
    <figure class="card-night"> 
        <div class="cardnight-hero"> 
            <img class="cardnight-img" src="projectimages/nightlife/download.jpg" />
            <a href="https://standalone-group.com/spine-beirut.html"> 
            <div class="cardnight-middle">
                    <p class="cardnight-middle-text">Spine Rooftop</p>
            </div>  </a>
        </div>
        <div class="cardnight-content">  
            <div class="cardnight-info">
                <p class="cardnight-address">SPINE is a lounge bar that offers a refined, yet vibrant experience embracing a contemporary cuisine and a social bar amidst floating light elements.</p>

                <div class="socials-night">
                    <a href="https://www.facebook.com/spinebeirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/spinebeirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/SPINE+Beirut/@33.9240546,35.5823031,19z/data=!3m1!4b1!4m5!3m4!1s0x151f3f2029034ed9:0x87e3c388ac044e67!8m2!3d33.9220916!4d35.5855097"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div> 
    </figure> 

    <figure class="card-night"> 
        <div class="cardnight-hero"> 
            <img class="cardnight-img" src="projectimages/nightlife/download.jpg" />
            <a href="https://standalone-group.com/spine-beirut.html"> 
            <div class="cardnight-middle">
                    <p class="cardnight-middle-text">Spine Rooftop</p>
            </div>  </a>
        </div>
        <div class="cardnight-content">  
            <div class="cardnight-info">
                <p class="cardnight-address">SPINE is a lounge bar that offers a refined, yet vibrant experience embracing a contemporary cuisine and a social bar amidst floating light elements.</p>

                <div class="socials-night">
                    <a href="https://www.facebook.com/spinebeirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/spinebeirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/SPINE+Beirut/@33.9240546,35.5823031,19z/data=!3m1!4b1!4m5!3m4!1s0x151f3f2029034ed9:0x87e3c388ac044e67!8m2!3d33.9220916!4d35.5855097"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div> 
    </figure> 
    <figure class="card-night"> 
        <div class="cardnight-hero"> 
            <img class="cardnight-img" src="projectimages/nightlife/download.jpg" />
            <a href="https://standalone-group.com/spine-beirut.html"> 
            <div class="cardnight-middle">
                    <p class="cardnight-middle-text">Spine Rooftop</p>
            </div>  </a>
        </div>
        <div class="cardnight-content">  
            <div class="cardnight-info">
                <p class="cardnight-address">SPINE is a lounge bar that offers a refined, yet vibrant experience embracing a contemporary cuisine and a social bar amidst floating light elements.</p>

                <div class="socials-night">
                    <a href="https://www.facebook.com/spinebeirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/spinebeirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/SPINE+Beirut/@33.9240546,35.5823031,19z/data=!3m1!4b1!4m5!3m4!1s0x151f3f2029034ed9:0x87e3c388ac044e67!8m2!3d33.9220916!4d35.5855097"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div> 
    </figure> 
    <figure class="card-night"> 
        <div class="cardnight-hero"> 
            <img class="cardnight-img" src="projectimages/nightlife/download.jpg" />
            <a href="https://standalone-group.com/spine-beirut.html"> 
            <div class="cardnight-middle">
                    <p class="cardnight-middle-text">Spine Rooftop</p>
            </div>  </a>
        </div>
        <div class="cardnight-content">  
            <div class="cardnight-info">
                <p class="cardnight-address">SPINE is a lounge bar that offers a refined, yet vibrant experience embracing a contemporary cuisine and a social bar amidst floating light elements.</p>

                <div class="socials-night">
                    <a href="https://www.facebook.com/spinebeirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/spinebeirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/SPINE+Beirut/@33.9240546,35.5823031,19z/data=!3m1!4b1!4m5!3m4!1s0x151f3f2029034ed9:0x87e3c388ac044e67!8m2!3d33.9220916!4d35.5855097"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div> 
    </figure> 
    <figure class="card-night"> 
        <div class="cardnight-hero"> 
            <img class="cardnight-img" src="projectimages/nightlife/download.jpg" />
            <a href="https://standalone-group.com/spine-beirut.html"> 
            <div class="cardnight-middle">
                    <p class="cardnight-middle-text">Spine Rooftop</p>
            </div>  </a>
        </div>
        <div class="cardnight-content">  
            <div class="cardnight-info">
                <p class="cardnight-address">SPINE is a lounge bar that offers a refined, yet vibrant experience embracing a contemporary cuisine and a social bar amidst floating light elements.</p>

                <div class="socials-night">
                    <a href="https://www.facebook.com/spinebeirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/spinebeirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/SPINE+Beirut/@33.9240546,35.5823031,19z/data=!3m1!4b1!4m5!3m4!1s0x151f3f2029034ed9:0x87e3c388ac044e67!8m2!3d33.9220916!4d35.5855097"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div> 
    </figure> 
    <figure class="card-night"> 
        <div class="cardnight-hero"> 
            <img class="cardnight-img" src="projectimages/nightlife/download.jpg" />
            <a href="https://standalone-group.com/spine-beirut.html"> 
            <div class="cardnight-middle">
                    <p class="cardnight-middle-text">Spine Rooftop</p>
            </div>  </a>
        </div>
        <div class="cardnight-content">  
            <div class="cardnight-info">
                <p class="cardnight-address">SPINE is a lounge bar that offers a refined, yet vibrant experience embracing a contemporary cuisine and a social bar amidst floating light elements.</p>

                <div class="socials-night">
                    <a href="https://www.facebook.com/spinebeirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/spinebeirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/SPINE+Beirut/@33.9240546,35.5823031,19z/data=!3m1!4b1!4m5!3m4!1s0x151f3f2029034ed9:0x87e3c388ac044e67!8m2!3d33.9220916!4d35.5855097"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div> 
    </figure> 
    
</section>











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
                    <span class="text"><a href="https://goo.gl/maps/XJHz1dYVQejyRn1p9">Tripoli, Lebanon</a></span>
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
                <form action="contact/contact5.php" method="post">
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
            <span class="credit">Created By <a href="#">B-Lebanon</a> • </span>
            <span class="fa-regular fa-copyright"></span><span> 2022 All rights reserved.</span>
        </center>
    </div>
</footer>


<script src="https://kit.fontawesome.com/ca62e1404f.js" crossorigin="anonymous"></script>
<script src="script/script.js"></script>
</body>
</html>