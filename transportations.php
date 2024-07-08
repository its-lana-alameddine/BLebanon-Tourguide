<!DOCTYPE html>
<?php
session_start();
require_once 'includes/database.php';
require_once 'includes/register-inc-trs.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="projectImages/iconn-removebg-preview.png">
    <title>B Lebanon: Transportations</title>
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


<?php require_once "login-register/login-register-trs.php" ?>

    <div class="transportations">
        <div class="rental">
            <!-- <h2>Car Rentals</h2><br> -->
            <div class="rental-container">
                <div class="inside-image">
                    <table border="0">
                        <tr class="row1">
                            <td>Average Rental Car Cost</td>
                            <td>Cheapest Rental Car Price</td>
                            <td>Most Popular Rental Type</td>
                            <td>Lowest Price Rental Company</td>
                        </tr>
                        <tr class="row2">
                            <td>$62 per day</td>
                            <td>Hyundai i10 ($27 per day)</td>
                            <td>Economy</td>
                            <td>Sixt ($21 per day)</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="rental-container2">
                <h1>Rent A Car</h1>
                <div class="rent rent1">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Sixt</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Sixt+Rent+a+Car+-+Beirut+Meet%26Greet/@34.3671974,32.1047251,7z/data=!4m9!
                                1m2!2m1!1ssixt!3m5!1s0x151f1723e04562d9:0x9e5900b305db903b!8m2!3d33.8883842!4d35.4958368!15sCgRzaXh0IgOIAQGSARFjYXJfcmVudGFsX2FnZW5jeQ"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Meet and Greet Service, Beirut</span>
                                </a>
                                <br>
                                <a href="https://www.sixt.com/funnel/#/fleet/selectcar/LB"  target="_blank">
                                    <span><i class="fa-solid fa-globe"></i></span>
                                    <span>www.sixt.com</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/sixt-rent.png"></div>
                    </div>
                </div>
                <div class="rent rent2">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Avis</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Avis+Rent+a+Car/@33.8265194,35.4581003,13z/data=!4m9!1m2!2m1!1savis+beirut+airport!3m5!1s0x151f199c
                                fd34c5af:0xed07aa1d8dea63cf!8m2!3d33.826579!4d35.493139!15sChNhdmlzIGJlaXJ1dCBhaXJwb3J0IgOIAQGSARFjYXJfcmVudGFsX2FnZW5jeQ"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Beirut International Airport</span>
                                </a>
                                <br>
                                <a href="https://www.avis.com.lb/#" target="_blank">
                                    <span><i class="fa-solid fa-globe"></i></span>
                                    <span> www.avis.com.lb</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/avis-rent.png"></div>
                    </div>
                </div>
                <div class="rent rent3">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3> Green Motion</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/green+motion+rent+a+car+lebanon/
                                @33.866433,35.4836611,17z/data=!3m1!4b1!4m5!3m4!1s0x151f1719436a7749:0x3efc17c446ba1064!8m2!3d33.8664286!4d35.4858551"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Hot Street Beirut</span>
                                </a>
                                <br>
                                <a href="https://greenmotion.com/locations/lebanon/beirut-airport" target="_blank">
                                    <span><i class="fa-solid fa-globe"></i></span>
                                    <span> www.greenmotion.com</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image exception"><img src="projectImages/greenmotion-rent.jpg"></div>
                    </div>
                </div>
                <div class="rent rent4">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>City Car</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/City+Car+Beirut/@33.8937823
                                ,35.4736337,17z/data=!3m1!4b1!4m5!3m4!1s0x151f10d30a64e7b9:0x92e92525d1b9fee!8m2!3d33.8937901!4d35.4758294"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Khaled Shehab Street, Ras Beirut </span>
                                </a>
                                <br>
                                <a href="https://www.citycar.com.lb/" target="_blank">
                                    <span><i class="fa-solid fa-globe"></i></span>
                                    <span>www.citycar.com.lb</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/citycar.png"></div>
                    </div>
                </div>
                <div class="rent rent5">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Budget</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Budget+Rent+A+Car/@33.8833535,35.5420086
                                ,17z/data=!3m1!4b1!4m5!3m4!1s0x151f16361fb8eb1d:0x6d4e69c2bbe320bc!8m2!3d33.8833491!4d35.5442026"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Freeway Center Sin el Fil, Beirut</span>
                                </a>
                                <br>
                                <a href="https://www.budgetinternational.com/budgetonline/lb-gb/budget.nsf" target="_blank">
                                    <span><i class="fa-solid fa-globe"></i></span>
                                    <span>www.budgetinternational.com</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/budget-rent.png"></div>
                    </div>
                </div>
                <div class="rent rent6">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Hertz</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Hertz/@33.8380939
                                ,35.4794874,13z/data=!4m9!1m2!2m1!1shertz!3m5!1s0x151f174d750b21a7:
                                0xb46e5af7e0d32567!8m2!3d33.876554!4d35.519676!15sCgVoZXJ0eiIDiAEBkgERY2FyX3JlbnRhbF9hZ2VuY3k"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Ministry of Industry Bldg, Beirut</span>
                                </a>
                                <br>
                                <a href="https://www.hertz.com/rentacar/reservation/" target="_blank">
                                    <span><i class="fa-solid fa-globe"></i></span>
                                    <span>www.hertz.com</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image exception"><img src="projectImages/hertz-rent.png"></div>
                    </div>
                </div>
                <div class="rent rent7">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Shreidi</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Shreidy+Rent+a+Car/@33.55855
                                ,35.3757915,17z/data=!3m1!4b1!4m5!3m4!1s0x151ef03d1ed65ded:0x76e4fea095b141ea!8m2!3d33.5585455!4d35.3779855"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> H95H+C59, Sidon</span>
                                </a>
                                <br>
                                <a href="https://www.facebook.com/ShreidiGroup/" target="_blank">
                                    <span><i class="fa-brands fa-facebook"></i></span>
                                    <span>Expo Shreidi Group</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/shreidi-rent.jpg"></div>
                    </div>
                </div>
                <div class="rent rent8">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Tripoli Rent a Car</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Tripoli+Rent+a+Car/@34.421501,35.8280595,15z/data=!4m9!1m2!2m1!1sTripoli+Rent+a+Car
                                ,+Tripoli!3m5!1s0x1521f6b7c7baddbf:0x7309c24707666da2!8m2!3d34.4214748!4d35.8368465!15sChtUcmlwb2xpIFJlbnQgYSBDYXIsIFRyaXBvbGmSARFjYXJfcmVudGFsX2FnZW5jeQ"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> CRCP+HPQ, Abou Samra, Tripoli</span>
                                </a>
                                <br>
                                <a href="https://www.facebook.com/rentcartripoli/" target="_blank">
                                    <span><i class="fa-brands fa-facebook"></i></span>
                                    <span>Tripoli Rent a Car</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/tripoli-rent.jpg"></div>
                    </div>
                </div>
                <div class="rent rent9">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Najib</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Najib+rent+a+car/@34.5288263,36.0109224,12z/data=!4m9!1m2!2m1!1snajib+akkar!
                                3m5!1s0x152225053107f575:0xcf6e656d7cccb6c2!8m2!3d34.5407868!4d36.0697281!15sCgtuYWppYiBha2thcpIBE2Nhcl9sZWFzaW5nX3NlcnZpY2U"
                                target="_blank" >
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Jdaidet El Joumeh, Akkar</span>
                                </a>
                                <br>
                                <a href="https://www.facebook.com/NajibCarRental/services" target="blank">
                                    <span><i class="fa-brands fa-facebook"></i></span>
                                    <span>Najib Car Rental</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/najib-rent.jpeg"></div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br>

            <div class="rental-container3">
                <h1>Taxi Services</h1>
                <div class="rent rent1">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Beirut Online Taxi & Tours</h3>
                            <p>
                                <a href="https://goo.gl/maps/mzpSqdrqH7XnqcNK6" target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Avenue de l'indépendance, Beirut</span>
                                </a>
                                <br>
                                <a href="https://www.beirutonlinetaxi.com/"  target="_blank">
                                    <span><i class="fa-solid fa-globe"></i></span>
                                    <span>www.beirutonlinetaxi.com</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/taxi_services/onlinetaxibeirut.png"></div>
                    </div>
                </div>
                <div class="rent rent2">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Sour Taxi Station</h3>
                            <p>
                                <a href="https://goo.gl/maps/LZVYV4CaVpLofNLQA" target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Beirut International AirportSahel Chamaly Main Road, Sue, Lebanon</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/taxi_services/Tyretaxi.jpg"></div>
                    </div>
                </div>
                <div class="rent rent3">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Cabs Taxi</h3>
                            <p>
                                <a href="https://goo.gl/maps/wD8qRTZPz1jk2WyH7" target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Sharhabeel Highway, Utruk Building, Ground Floor, Sidon</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/taxi_services/cabs.png"></div>
                    </div>
                </div>
                <div class="rent rent4">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>City Car</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/City+Car+Beirut/@33.8937823
                                ,35.4736337,17z/data=!3m1!4b1!4m5!3m4!1s0x151f10d30a64e7b9:0x92e92525d1b9fee!8m2!3d33.8937901!4d35.4758294"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Khaled Shehab Street, Ras Beirut </span>
                                </a>
                                <br>
                                <a href="https://www.citycar.com.lb/" target="_blank">
                                    <span><i class="fa-solid fa-globe"></i></span>
                                    <span>www.citycar.com.lb</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/citycar.png"></div>
                    </div>
                </div>
                <div class="rent rent5">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Budget</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Budget+Rent+A+Car/@33.8833535,35.5420086
                                ,17z/data=!3m1!4b1!4m5!3m4!1s0x151f16361fb8eb1d:0x6d4e69c2bbe320bc!8m2!3d33.8833491!4d35.5442026"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Freeway Center Sin el Fil, Beirut</span>
                                </a>
                                <br>
                                <a href="https://www.budgetinternational.com/budgetonline/lb-gb/budget.nsf" target="_blank">
                                    <span><i class="fa-solid fa-globe"></i></span>
                                    <span>www.budgetinternational.com</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/budget-rent.png"></div>
                    </div>
                </div>
                <div class="rent rent6">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Hertz</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Hertz/@33.8380939
                                ,35.4794874,13z/data=!4m9!1m2!2m1!1shertz!3m5!1s0x151f174d750b21a7:
                                0xb46e5af7e0d32567!8m2!3d33.876554!4d35.519676!15sCgVoZXJ0eiIDiAEBkgERY2FyX3JlbnRhbF9hZ2VuY3k"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Ministry of Industry Bldg, Beirut</span>
                                </a>
                                <br>
                                <a href="https://www.hertz.com/rentacar/reservation/" target="_blank">
                                    <span><i class="fa-solid fa-globe"></i></span>
                                    <span>www.hertz.com</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image exception"><img src="projectImages/hertz-rent.png"></div>
                    </div>
                </div>
                <div class="rent rent7">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Shreidi</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Shreidy+Rent+a+Car/@33.55855
                                ,35.3757915,17z/data=!3m1!4b1!4m5!3m4!1s0x151ef03d1ed65ded:0x76e4fea095b141ea!8m2!3d33.5585455!4d35.3779855"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> H95H+C59, Sidon</span>
                                </a>
                                <br>
                                <a href="https://www.facebook.com/ShreidiGroup/" target="_blank">
                                    <span><i class="fa-brands fa-facebook"></i></span>
                                    <span>Expo Shreidi Group</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/shreidi-rent.jpg"></div>
                    </div>
                </div>
                <div class="rent rent8">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Tripoli Rent a Car</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Tripoli+Rent+a+Car/@34.421501,35.8280595,15z/data=!4m9!1m2!2m1!1sTripoli+Rent+a+Car
                                ,+Tripoli!3m5!1s0x1521f6b7c7baddbf:0x7309c24707666da2!8m2!3d34.4214748!4d35.8368465!15sChtUcmlwb2xpIFJlbnQgYSBDYXIsIFRyaXBvbGmSARFjYXJfcmVudGFsX2FnZW5jeQ"
                                target="_blank">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> CRCP+HPQ, Abou Samra, Tripoli</span>
                                </a>
                                <br>
                                <a href="https://www.facebook.com/rentcartripoli/" target="_blank">
                                    <span><i class="fa-brands fa-facebook"></i></span>
                                    <span>Tripoli Rent a Car</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/tripoli-rent.jpg"></div>
                    </div>
                </div>
                <div class="rent rent9">
                    <div class="rent-container">
                        <div class="rent-subcontainer">
                            <h3>Najib</h3>
                            <p>
                                <a href="https://www.google.com/maps/place/Najib+rent+a+car/@34.5288263,36.0109224,12z/data=!4m9!1m2!2m1!1snajib+akkar!
                                3m5!1s0x152225053107f575:0xcf6e656d7cccb6c2!8m2!3d34.5407868!4d36.0697281!15sCgtuYWppYiBha2thcpIBE2Nhcl9sZWFzaW5nX3NlcnZpY2U"
                                target="_blank" >
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <span> Jdaidet El Joumeh, Akkar</span>
                                </a>
                                <br>
                                <a href="https://www.facebook.com/NajibCarRental/services" target="blank">
                                    <span><i class="fa-brands fa-facebook"></i></span>
                                    <span>Najib Car Rental</span>
                                </a>
                            </p>
                        </div>
                        <div class="rent-image"><img src="projectImages/najib-rent.jpeg"></div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
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
                    <a href="mailto:BLebanonn@hotmail.com" target="_blank"><span class="fa-solid fa-envelope"></span></a>
                    <span class="text"><a href="mailto:BLebanonn@hotmail.com" target="_blank">BLebanonn@hotmail.com</a></span>
                </div>
            </div>
        </div>
        <div class="rightt box">
            <h2>Contact us</h2>
            <div class="content">
                <form action="contact/contact3.php" method="post">
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
<script src="script/script.js"></script>
</body>
</html>