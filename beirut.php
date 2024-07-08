<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- slider links  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <!-- slider links  -->
    <link rel="icon" type="image/x-icon" href="projectImages/iconn-removebg-preview.png">
    <title>B Lebanon: Beirut</title>
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


    <div class="container-beirut">
<img src="projectImages/beirut/beirut1.png" alt="">
<img src="projectImages/beirut/beirut2.png" alt="">
<img src="projectImages/beirut/beirut3.png" alt="">
<img src="projectImages/beirut/beirut4.png" alt="">
<img src="projectImages/beirut/beirut5.png" alt="">
<img src="projectImages/beirut/beirut6.png" alt="">
    </div>
    <div class="beirut-weather">
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-2686e02c-70d6-41d2-9c27-223cbf8e2228"></div>
</div>
    <div class="beirut-info">
        <div class="beirut-details">
            Beirut is Lebanon's capital and largest city. Despite several conflicts and turbulence, Beirut is a vibrant destination for shopping,
             socializing, and sightseeing. Modern architecture coexists with Ottoman and colonial French structures throughout the city, which has been rebuilt multiple times. 
             The National Museum and the Gibran Museum provide visitors with a sense of the city's history, and hopping nightlife.
             Jogging and biking are popular activities along the Corniche.</div>
        </div>
    </div>

    <div class="rental-container2">
        <h1>To Stay</h1>
        <div class="moree"> <a href="hotels.php">check more</a></div>
        <div class="rent rent1">
            <div class="rent-container">
                <div class="rent-subcontainer">
                    <h3>Raouché Arjaan by Rotana</h3>
                    <p>
                      
                        <a href="https://www.rotana.com/arjaanhotelapartments/lebanon/beirut/raouchearjaanbyrotana/"  target="_blank">
                            <span><i class="fa-solid fa-globe"></i></span>
                            <span>Raouché Arjaan</span>
                        </a>
                        <br>

                        <a href="tel:+961-01 781 111"  target="_blank">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <span> 01 781 111</span>
                        </a>
                    </p>
                </div>
                <div class="rent-image"><img src="projectImages/beirut/hotel2 (1).png"></div>
            </div>
        </div>

    <div class="rent rent2">
        <div class="rent-container">
            <div class="rent-subcontainer">
                <h3> Royal Tulip</h3>
                <p>
                  
                    <a href="https://royal-tulip-achrafieh.goldentulip.com/en-us/"  target="_blank">
                        <span><i class="fa-solid fa-globe"></i></span>
                        <span>Royal Tulip Achrafieh</span>
                    </a>
                    <br>

                    <a href="tel:+961-01 333 048"  target="_blank">
                        <span><i class="fa-solid fa-phone"></i></span>
                        <span> 01 333 048</span>
                    </a>
                </p>
            </div>
            <div class="rent-image"><img src="projectImages/beirut/hotel1.jpg"></div>
        </div>
    </div>
    <div class="rent rent3">
        <div class="rent-container">
            <div class="rent-subcontainer">
                <h3>Staybridge Suites Beirut</h3>
                <p>
                    <a href="https://www.ihg.com/staybridge/hotels/gb/en/beirut/beyvs/hoteldetail?cm_mmc=GoogleMaps-_-SB-_-LB-_-BEYVS"  target="_blank">
                        <span><i class="fa-solid fa-globe"></i></span>
                        <span>Staybridge Suites Beirut</span>
                    </a>
                    <br>

                    <a href="tel:+961-01 333 048"  target="_blank">
                        <span><i class="fa-solid fa-phone"></i></span>
                        <span> 01 333 048</span>
                    </a>
                </p>
            </div>
            <div class="rent-image"><img src="projectImages/beirut/hotel3.png"></div>
        </div>
    </div>
</div>


<div class="rental-container2">
    <h1>To Eat</h1>
    <div class="moree1"> <a href="restaurants.php">check more</a></div>
    <div class="rent rent1">
        <div class="rent-container">
            <div class="rent-subcontainer">
                <h3>Diwan</h3>
                <p>
                  
                    <a href="http://diwanbeirut.com/"  target="_blank">
                        <span><i class="fa-solid fa-globe"></i></span>
                        <span>Diwan, Beirut</span>
                    </a>
                    <br>

                    <a href="tel:+961-01 781 111"  target="_blank">
                        <span><i class="fa-solid fa-phone"></i></span>
                        <span> 01 781 111</span>
                    </a>
                </p>
            </div>
            <div class="rent-image"><img src="projectImages/beirut/rest1.png"></div>
        </div>
    </div>

<div class="rent rent2">
    <div class="rent-container">
        <div class="rent-subcontainer">
            <h3> Centrale</h3>
            <p>
              
                <a href="https://royal-tulip-achrafieh.goldentulip.com/en-us/"  target="_blank">
                    <span><i class="fa-solid fa-globe"></i></span>
                    <span>Royal Tulip Achrafieh</span>
                </a>
                <br>

                <a href="tel:+961-01 333 048"  target="_blank">
                    <span><i class="fa-solid fa-phone"></i></span>
                    <span> 01 333 048</span>
                </a>
            </p>
        </div>
        <div class="rent-image"><img src="projectImages/beirut/rest2.png"></div>
    </div>
</div>
<div class="rent rent3">
    <div class="rent-container">
        <div class="rent-subcontainer">
            <h3>Loris Restaurant</h3>
            <p>
                <a href="https://m.facebook.com/Loris.Restaurant/"  target="_blank">
                    <span><i class="fa-solid fa-globe"></i></span>
                    <span>Loris Restaurant</span>
                </a>
                <br>

                <a href="tel:+961-01 333 048"  target="_blank">
                    <span><i class="fa-solid fa-phone"></i></span>
                    <span> 01 333 048</span>
                </a>
            </p>
        </div>
        <div class="rent-image"><img src="projectImages/beirut/do33.png"></div>
    </div>
</div>
</div>


<div class="rental-container2">
    <h1>To Do</h1>
    <div class="moree3"> <a href="Thingstodo.php">check more</a></div>
    <div class="rent rent1">
        <div class="rent-container">
            <div class="rent-subcontainer">
                <h3>National Museum of Beirut</h3>
                <p>
                  
                    <a href="http://museebeyrouth-liban.org/"  target="_blank">
                        <span><i class="fa-solid fa-globe"></i></span>
                        <span>National Museum of Beirut</span>
                    </a>
                    <br>

                    <a href="tel:+961-01 781 111"  target="_blank">
                        <span><i class="fa-solid fa-phone"></i></span>
                        <span> 01 781 111</span>
                    </a>
                </p>
            </div>
            <div class="rent-image"><img src="projectImages/beirut/do1.png"></div>
        </div>
    </div>

<div class="rent rent2">
    <div class="rent-container">
        <div class="rent-subcontainer">
            <h3>Sursock Museum</h3>
            <p>
              
                <a href="https://royal-tulip-achrafieh.goldentulip.com/en-us/"  target="_blank">
                    <span><i class="fa-solid fa-globe"></i></span>
                    <span>Sursock Museum</span>
                </a>
                <br>

                <a href="tel:+961-01 333 048"  target="_blank">
                    <span><i class="fa-solid fa-phone"></i></span>
                    <span> 01 333 048</span>
                </a>
            </p>
        </div>
        <div class="rent-image"><img src="projectImages/beirut/do2.png"></div>
    </div>
</div>
<div class="rent rent3">
    <div class="rent-container">
        <div class="rent-subcontainer">
            <h3>Staybridge Suites Beirut</h3>
            <p>
                <a href="https://www.ihg.com/staybridge/hotels/gb/en/beirut/beyvs/hoteldetail?cm_mmc=GoogleMaps-_-SB-_-LB-_-BEYVS"  target="_blank">
                    <span><i class="fa-solid fa-globe"></i></span>
                    <span>Staybridge Suites Beirut</span>
                </a>
                <br>

                <a href="tel:+961-01 333 048"  target="_blank">
                    <span><i class="fa-solid fa-phone"></i></span>
                    <span> 01 333 048</span>
                </a>
            </p>
        </div>
        <div class="rent-image"><img src="projectImages/beirut/hotel3.png"></div>
    </div>
</div>
</div>


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
                    <a href="mailto:bLebanon@gmail.com"><span class="fa-solid fa-envelope"></span></a>
                    <span class="text"><a href="mailto:bLebanon@gmail.com">bLebanon@gmail.com</a></span>
                </div>
            </div>
        </div>
        <div class="rightt box">
            <h2>Contact us</h2>
            <div class="content">
                <form action="#">
                    <div class="email">
                        <div class="text">Email *</div>
                        <input type="email" required>
                    </div>
                    <div class="mesg">
                        <div class="text">Message *</div>
                        <textarea cols="25" rows="2" required></textarea>
                    </div>
                    <div class="btnn">
                        <button type="submit">Send</button>
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