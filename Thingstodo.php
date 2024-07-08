<!DOCTYPE html>
<?php
session_start();
require_once 'includes/database.php';
require_once 'includes/register-inc-todo.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- slider links  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css"> -->
    <!-- slider links  -->
    <link rel="icon" type="image/x-icon" href="projectImages/iconn-removebg-preview.png">
    <title>B Lebanon: Things to do</title>
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


<?php require_once "login-register/login-register-todo.php" ?>

    <div class="containermap" id="containermap">
        <div class="map">
            <div class="mapimage"><img src="projectImages/lebanonMap1.jpg" class="lebanonMap"></div>
                <a alt="akkar" title="Akkar" href="akkar.php" class="hotspot" id="akkar">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
                <a alt="tripoli" title="Tripoli" href="tripoli.php" class="hotspot" id="tripoli">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
                <a alt="chekka" title="Chekka" href="chekka.php" class="hotspot" id="chekka">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
                <a alt="selaata" title="Selaata" href="selaata.php" class="hotspot" id="selaata">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
                <a alt="jounieh" title="Jounieh" href="jounieh.php" class="hotspot" id="jounieh">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
                <a alt="beirut" title="Beirut" href="beirut.php" class="hotspot" id="beirut">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
                <a alt="sidon" title="Sidon" href="sidon.php" class="hotspot" id="sidon">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
                <a alt="tyre" title="Tyre" href="tyre.php" class="hotspot" id="tyre">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
                <a alt="baalbek" title="Baalbek" href="baalbek.php" class="hotspot" id="baalbek">
                    <i class="fa-solid fa-location-dot"></i>
                </a>
                <a alt="baalbek castle" title="Baalbek castle" href="kal3etbaalbak.php" class="hotspot hotspot1" id="baalbekcastle">
                    <i class="fa-solid fa-rectangle"></i>
                </a>
                <a alt="mohammad al amin mosque" title="Mohammad Al-Amin Mosque" href="mosque.php" class="hotspot hotspot1" id="mosque">
                    <i class="fa-solid fa-rectangle"></i>
                </a>
                <a alt="jezzine water fall" title="Jezzine Waterfall" href="jezzinewaterfall.php" class="hotspot hotspot1" id="jezzinewaterfall">
                    <i class="fa-solid fa-rectangle"></i>
                </a>
                <a alt="The Cliff Camp" title="The Cliff Camp" href="TheCliffCamp.php" class="hotspot hotspot1" id="cliff">
                    <i class="fa-solid fa-rectangle"></i>
                </a>
                <a alt="Arz" title="Arz" href="Arz.php" class="hotspot hotspot1" id="arz">
                    <i class="fa-solid fa-rectangle"></i>
                </a>
                <a alt="Beirut-Rafic Hariri International Airport" title="Beirut-Rafic Hariri International Airport" href="beirutairport.html" class="hotspot hotspot1" id="airport">
                    <i class="fa-solid fa-rectangle"></i>
                </a>
                <a alt="Al-Tal clock tower" title="Al-Tal Clock tower" href="talclocktower.php" class="hotspot hotspot1" id="tal">
                    <i class="fa-solid fa-rectangle"></i>
                </a>
                <a alt="Beqaa valley" title="Beqaa valley" href="beqaavalley.php" class="hotspot hotspot1" id="beqaa">
                    <i class="fa-solid fa-rectangle"></i>
                </a>
                <a alt="pigeon rocks in raouche" title="Pigeon rocks in Raouche" href="rawche.php" class="hotspot hotspot1" id="raouche">
                    <i class="fa-solid fa-rectangle"></i>
                </a>
                <a alt="Shopping Stores" title="Shopping Stores" href="shopping.php" class="hotspot hotspot1" id="shopping">
                    <i class="fa-solid fa-rectangle"></i>
                </a>
                <a alt="baalbek castle" title="Baalbek castle" href="kal3etbaalbak.php" class="hotspot hotspot2" id="baalbekcastle">
                    <i class="fa-solid fa-arrow-down-long"></i>
                </a>
                <a alt="mohammad al amin mosque" title="Mohammad Al-Amin Mosque" href="mosque.php" class="hotspot hotspot1" id="mosque">
                    <i class="fa-solid fa-arrow-down-long"></i>
                </a>
                <a alt="jezzine water fall" title="Jezzine Waterfall" href="jezzinewaterfall.php" class="hotspot hotspot1" id="jezzinewaterfall">
                    <i class="fa-solid fa-arrow-down-long"></i>
                </a>
                <a alt="The Cliff Camp" title="The Cliff Camp" href="TheCliffCamp.php" class="hotspot hotspot1" id="cliff">
                    <i class="fa-solid fa-arrow-down-long"></i>
                </a>
                <a alt="Arz" title="Arz" href="Arz.php" class="hotspot hotspot1" id="arz">
                    <i class="fa-solid fa-arrow-down-long"></i>
                </a>
                <a alt="Beirut-Rafic Hariri International Airport" title="Beirut-Rafic Hariri International Airport" href="beirutairport.php" class="hotspot hotspot1" id="airport">
                    <i class="fa-solid fa-arrow-down-long"></i>
                </a>
                <a alt="Al-Tal clock tower" title="Al-Tal Clock tower" href="talclocktower.php" class="hotspot hotspot1" id="tal">
                    <i class="fa-solid fa-arrow-down-long"></i>
                </a>
                <a alt="Beqaa valley" title="Beqaa valley" href="beqaavalley.php" class="hotspot hotspot1" id="beqaa">
                    <i class="fa-solid fa-arrow-down-long"></i>
                </a>
                <a alt="pigeon rocks in raouche" title="Pigeon rocks in Raouche" href="rawche.php" class="hotspot hotspot1" id="raouche">
                    <i class="fa-solid fa-arrow-down-long"></i>
                </a>
                <a alt="Shopping Stores" title="Shopping Stores" href="shopping.php" class="hotspot hotspot1" id="shopping">
                    <i class="fa-solid fa-arrow-down-long"></i>
                </a>
        </div>

        <div class="right">
            <div class="infos">
                Lebanon is a gorgeous country with mountains on one side and the Mediterranean Sea on the other. It is also an underrated one.
                Ancient towns surround the Mediterranean, with Roman remains and panoramic views of the sea, and timeworn villages mark the mountainsides.
            </div>

            <div class="weather">
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-47dc76c1-4ea9-4cdc-8454-0ff9edfaeb72"></div>
            </div>
        </div>
    </div>

<?php
require_once 'slider/slider.php';
?>

    <div class="citiesgallery">
        <h2>Explore more</h2>
        <div class="nightlife"><a href="nightlife.php"><div class="image"><p>Night Life</p></div></a></div>
        <div class="skiresorts"><a href="#"><div class="image"><p>Ski resorts</p></div></a></div>
        <div class="adventure"><a href="#"><div class="image"><p>Nature Sports and Adventure</p></div></a></div>
        <div class="seaside"><a href="#"><div class="image"><p>Seaside and Beaches</p></div></a></div>
        <div class="history"><a href="history.php"><div class="image"><p>History and Museums</p></div></a></div>
        <div class="religious"><a href="#"><div class="image"><p>Religious Tourism</p></div></a></div>
    </div>
    <br><br><br><br><br>

    <!-- FOOTER STARTS -->
    <footer class="footer" id="contact">
        <div class="maincontent">
            <div class="left box">
                <h2>About us</h2>
                <div class="content">
                    <p>Despite the fact that things are challenging in Lebanon, we are honored to be the guide you trust 
                        to show you the beautiful sights of the country and its generous, full-of-life people.</p>
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
                    <form action="contact/contact1.php" method="post">
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
                <span class="credit">Created By <a href="#">B-Lebanon</a>  |  </span>
                <span class="fa-regular fa-copyright"></span><span> 2022 All rights reserved.</span>
            </center>
        </div>
    </footer>


<script src="https://kit.fontawesome.com/ca62e1404f.js" crossorigin="anonymous"></script>
<script src="script/script.js"></script>
</body>
</html>