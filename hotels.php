<!DOCTYPE html>
<?php
session_start();
require_once 'includes/database.php';
require_once 'includes/register-inc-ht.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="projectImages/iconn-removebg-preview.png">
    <!-- pagination -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>B Lebanon: Hotels </title>
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


<?php require_once "login-register/login-register-ht.php" ?>


<!-- pagination start -->
<div class="pagination-container">
    <div class="card-content" style="display: none">
        <!-- card 1 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/thesmallvillehotel.webp" alt=""></div>
            <div class="card-info">
                <h3>The Smallville Hotel</h3>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br> <br>
                <p>The Smallville Hotel is a unique 5-star super design hotel - the first in the region located in the neighborhood of Badaro,
                    in the heart of the Lebanese capital.</p>
                <div class="socials">
                    <a href="https://www.thesmallville.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/thesmallvillehotel/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/thesmallville_hotel/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/The+Smallville+Hotel/@33.8773586,35.5148421,17z/data=!3m1!4b1!4m8!3m7!1s0x151f17060925fc67:0x20c56cd455ce9973!5m2!4m1!1i2!8m2!3d33.8773586!4d35.5170308"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 2 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/urbancentralsuites.webp" alt=""></div>
            <div class="card-info">
                <h3>Urban Central Suites</h3>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br> <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="https://urbancentralsuites.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/UrbanCentralSuites/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/urbancentralsuites/"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Urban+Central+Suites+-+Beirut/@33.8800006,35.5420031,16.99z/data=!4m8!3m7!1s0x151f163581798a5f:0xa551b840368a9ce8!5m2!4m1!1i2!8m2!3d33.8800006!4d35.544202"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 3 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/intercontinental.jpg" alt=""></div>
            <div class="card-info">
                <h3>InterContinental Phoenicia Beirut</h3>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <br> <br>
                <p>A Beirut landmark, Phoenicia Hotel is within walking distance to a host of art, shopping, dining and entertainment spaces.</p>
                <div class="socials">
                    <a href="https://www.ihg.com/intercontinental/hotels/us/en/beirut/beyha/hoteldetail"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/PhoeniciaBeirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/phoeniciabeirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/InterContinental+Phoenicia+Beirut,+an+IHG+Hotel/@35.2037548,27.9587491,6z/data=!4m12!1m2!2m1!1sintercontinental!3m8!1s0x151f16dc7dbed627:0x4c436908c262b02!5m2!4m1!1i2!8m2!3d33.900734!4d35.49498!15sChBpbnRlcmNvbnRpbmVudGFsIgOIAQFaEiIQaW50ZXJjb250aW5lbnRhbJIBBWhvdGVs"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 4 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/leroyalhotel.webp" alt=""></div>
            <div class="card-info">
                <h3>Le Royal Hotels & Resorts</h3>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <br> <br>
                <p>Five star luxury Hotel in Beirut Lebanon, located 20 minutes from the Airport and few minutes drive to clubbing nightlife, designer boutiques, supermarket and multiplex cinema</p>
                <div class="socials">
                    <a href="https://www.leroyal.com/en"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/LeRoyalBeirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/leroyalbeirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Le+Royal+Hotel+Beirut/@33.9480105,35.592953,17z/data=!3m1!4b1!4m8!3m7!1s0x151f16f7f4f29179:0x263325b8c705068!5m2!4m1!1i2!8m2!3d33.9480105!4d35.5951417?hl=en"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 5 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/minosarthotel.jpg" alt=""></div>
            <div class="card-info">
                <h3>Minos Beach Art Hotel</h3>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br> <br>
                <p> Minos Beach Art Hotel, located on a beach in Agios Nikolaos, offers superior holiday experiences by the sea.</p>
                <div class="socials">
                    <a href="https://www.minosbeach.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/MinosBeach/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/minosbeach_art_hotel/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Minos+Beach+Art+Hotel/@35.1999024,25.7117392,17z/data=!3m1!4b1!4m8!3m7!1s0x14a896d8d1b2e419:0xc325ae3cd9847761!5m2!4m1!1i2!8m2!3d35.1999024!4d25.7139279"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 6 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/fourseasons.jpg" alt=""></div>
            <div class="card-info">
                <h3>Four Seasons Hotel</h3>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br> <br>
                <p>Four Seasons Hotel Beirut offers centuries-old Lebanese hospitality with a modern twist alongside fine dining, amenities & more in the heart of downtown.</p>
                <div class="socials">
                    <a href="https://www.fourseasons.com/beirut/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/FourSeasonsHotelBeirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/fsbeirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Four+Seasons+Hotel+Beirut/@33.9016751,34.9387014,9z/data=!4m12!1m2!2m1!1sfour+seasons+hotel+lebanon+instagram!3m8!1s0x151f16dd38749253:0xc25f0ac5ac2581fc!5m2!4m1!1i2!8m2!3d33.9016751!4d35.4990041!15sCiRmb3VyIHNlYXNvbnMgaG90ZWwgbGViYW5vbiBpbnN0YWdyYW0iA4gBAVomIiRmb3VyIHNlYXNvbnMgaG90ZWwgbGViYW5vbiBpbnN0YWdyYW2SAQVob3RlbJoBJENoZERTVWhOTUc5blMwVkpRMEZuU1VOWmRWbEVlV2wzUlJBQg?hl=en"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 7 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/radissonblu.webp" alt=""></div>
            <div class="card-info">
                <h3>Radisson BLU Martinez Hotel</h3>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br> <br>
                <p>Radisson BLU Martinez Hotel, Beirut is located in Ain Al Mraiseh, a neighborhood in Beirut, and is in the city center and on the boardwalk.</p>
                <div class="socials">
                    <a href="https://www.radissonhotels.com/en-us/hotels/radisson-blu-beirut"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/RadissonBluMartinezHotelBeirut/videos/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/radissonblubeirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Radisson+BLU+Martinez+Hotel/@33.900174,35.4904643,17z/data=!3m1!4b1!4m8!3m7!1s0x151f16dbc7258a29:0x3a0a0a6969dccdfc!5m2!4m1!1i2!8m2!3d33.900174!4d35.492653?hl=en"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 8 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/hiltonhabtoorgrandhotel.jpg" alt=""></div>
            <div class="card-info">
                <h3>Hilton Beirut Habtoor Grand Hotel</h3>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br> <br>
                <p>A landmark hotel in Beirut, Hilton Habtoor Grand features opulent penthouse suites, extensive spa facilities & the largest convention hall in Lebanon.</p>
                <div class="socials">
                    <a href="https://www.hilton.com/en/hotels/beyhghi-hilton-beirut-habtoor-grand/?SEO_id=GMB-EMEA-HI-BEYHGHI"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/HiltonBeirutHabtoorGrand/"><i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/hiltonbeiruthabtoorgrand/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Hilton+Beirut+Habtoor+Grand/@33.8695145,35.5349347,17z/data=!3m1!4b1!4m8!3m7!1s0x151f17ba1200b569:0xcd73e144f8e3820c!5m2!4m1!1i2!8m2!3d33.8695145!4d35.5371234?hl=en"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 9 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/kempinski.jpg" alt=""></div>
            <div class="card-info">
                <h3>Kempinski Summerland Hotel & Resort</h3>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br> <br>
                <p>Kempinski brings the most refined European hotel & resort experience to the heart of Beirut.</p>
                <div class="socials">
                    <a href="https://www.kempinski.com/en/beirut/kempinski-summerland-hotel-resort/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/kempinski.beirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/kempinski.beirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Kempinski+Summerland+Hotel+%26+Resort/@33.1668679,35.1023337,8.76z/data=!4m12!1m2!2m1!1skempinski!3m8!1s0x151f1756f85ea317:0xe2b82e2bc240dc72!5m2!4m1!1i2!8m2!3d33.8666273!4d35.4806141!15sCglrZW1waW5za2kiA4gBAVoLIglrZW1waW5za2mSAQVob3RlbA"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 10 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/al bustan.jpg" alt=""></div>
            <div class="card-info">
                <h3>Al Bustan Hotel</h3>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br> <br>
                <p>The Hotel Al Bustan is superbly located, with breathtaking views over Beirut and the Mediterranean, exclusive, secure and beautifully furnished.</p>
                <div class="socials">
                    <a href="https://hotelalbustan.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/albustanlb/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/hotelalbustan/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Al+Bustan+Hotel/@33.8606733,35.600179,17z/data=!4m12!1m2!2m1!1sal+bustan+hotel!3m8!1s0x151f1797921479c3:0x66576065e740ccff!5m2!4m1!1i2!8m2!3d33.8609799!4d35.6024328!15sCg9hbCBidXN0YW4gaG90ZWxaESIPYWwgYnVzdGFuIGhvdGVskgEFaG90ZWyaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVUlJlbkZwZWtabkVBRQ"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 11 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/1866hotel.jpg" alt=""></div>
            <div class="card-info">
                <h3>1866 Court & Suites</h3>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br> <br>
                <p>1866 Court & Suites Hotel offers modern accommodations with panoramic sea and city views.  Family-friendly Beirut hotel in Al Jaameah, walk to Hamra Street </p>
                <div class="socials">
                    <a href="https://1866courtsuiteshotel.com-lebanon.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/1866Beirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/1866beirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/1866+Court+%26+Suites/@33.8989397,35.4817904,17z/data=!3m1!4b1!4m8!3m7!1s0x151f16d67ae5b18d:0x3297bb4f194aa250!5m2!4m1!1i2!8m2!3d33.8989397!4d35.4839791?hl=en"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 12 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/lamunia.jpg" alt=""></div>
            <div class="card-info">
                <h3>Lamunia Hotel & Wellness Spa</h3>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i> 
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <p> Lamunia Hotel & Wellness spa, an exclusive slice of bliss in the heart of the North Lebanon</p>
                <div class="socials">
                    <a href="https://lamuniahotel.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/lamunialb/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/lamunia_hotel/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Lamunia+Hotel+%26+Wellness+Spa/@34.3943143,35.7964135,17z/data=!3m1!4b1!4m8!3m7!1s0x1521f0eb629b49f9:0x20d5a1b1f0c50ef9!5m2!4m1!1i2!8m2!3d34.3943143!4d35.7986022?hl=en"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 13 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/lassalinas.jpg" alt=""></div>
            <div class="card-info">
                <h3>Las Salinas</h3>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <br><br>
                <p>Las salinas is a grand sea resort situated in enfeh, on the northern coast of lebanon. It is the perfect gateaway for leisure travelers, family vacationers and water sports lovers.</p>
                <div class="socials">
                    <a href="https://lassalinas-lb.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/lassalinasanfeh/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/lassalinasspa/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Las+Salinas/@34.36394,35.7337399,17z/data=!3m1!4b1!4m8!3m7!1s0x1521e52c3d4c1133:0xa408b98a95c0888!5m2!4m1!1i2!8m2!3d34.36394!4d35.7359286?hl=en"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
<!-- card 14 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/cedarspalace.jpg" alt=""></div>
            <div class="card-info">
                <h3>Cedars Palace</h3>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <i class="fa-regular fa-star"></i>
                <br><br>
                <p>Cedars Palace is located in an elevated spot in Al Arz, offering beautiful views of the Cedars Mountain. Guests can enjoy skiing activities and the equipment can be provided by the hotel.</p>
                <div class="socials">
                    <a href="http://cedars-palace.com/english/index.php"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/Cedarspalacelb/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/cedarspalacelb/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Cedars+Palace/@34.2488784,36.0478029,17z/data=!3m1!4b1!4m8!3m7!1s0x152205abc0a671d7:0x82542dcf13367e49!5m2!4m1!1i2!8m2!3d34.248792!4d36.0499874"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 15 -->
        <div class="card">
            <div class="card-image"><img src="projectImages/Hotels/urbancentralsuites.webp" alt=""></div>
            <div class="card-info">
                <h3>Urban Central Suites</h3>
                <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <br><br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="https://www.thesmallville.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/thesmallvillehotel/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/thesmallville_hotel/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/The+Smallville+Hotel/@33.8773586,35.5148421,17z/data=!3m1!4b1!4m8!3m7!1s0x151f17060925fc67:0x20c56cd455ce9973!5m2!4m1!1i2!8m2!3d33.8773586!4d35.5170308"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        

    </div>


    <div class="pagination">
    <!-- <li class="page-item previous-page"><a href="#" class="page-link">Prev</a></li>
    <li class="page-item current-page"><a href="#" class="page-link">1</a></li>
    <li class="page-item dots"><a href="#" class="page-link">...</a></li>
    <li class="page-item current-page"><a href="#" class="page-link">5</a></li>
    <li class="page-item current-page"><a href="#" class="page-link">6</a></li>
    <li class="page-item dots"><a href="#" class="page-link">...</a></li>
    <li class="page-item current-page"><a href="#" class="page-link">10</a></li>
    <li class="page-item next-page"><a href="#" class="page-link">Next</a></li> -->
    </div>
</div>

<script>

function  getPageList(totalPages, page, maxLength){
    function range(start, end){
        return Array.from(Array(end - start + 1 ), (_,i) => i + start);
    }

    var sideWidth = maxLength < 9 ? 1 : 2;
    var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
    var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

    if(totalPages <= maxLength){
        return range(1, totalPages);
    }

    if(page <= maxLength - sideWidth - 1 - rightWidth){
        return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
    }

    if(page >= totalPages - sideWidth - 1 - rightWidth){
        return range(1, sideWidth).concat(0, range(totalPages- sideWidth - 1 - rightWidth - leftWidth, totalPages));
    }

    return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));

}

$(function(){
    var numberOfItems = $(" .card-content .card ").length;
    var limitPerPage = 6; //cards shown per page
    var totalPages = Math.ceil(numberOfItems / limitPerPage);
    var paginationSize = 5; //page elements visible in the pagination
    var currentPage;

    function showPage(whichPage){
        if(whichPage < 1 || whichPage > totalPages) return false;

        currentPage = whichPage;

        $(".card-content .card").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

        $(".pagination li").slice(1, -1).remove();

        getPageList (totalPages, currentPage, paginationSize).forEach(item =>{
            $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots" ).toggleClass("active", item === currentPage).append($("<a>").addClass("page-link").attr({ href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page");

        });

        $(".previous-page").toggleClass("disable", currentPage === 1);
        $(".next-page").toggleClass("disable", currentPage === totalPages);
        return true; 
    }
    $(".pagination").append(
        $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
        $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next"))

    );

    $(".card-content").show();
    showPage(1);

    $(document).on("click",".pagination li.current-page:not(.active)", function(){
        return showPage(+$(this).text());
    });


    $(".next-page").on("click", function(){
        return showPage(currentPage + 1);

    });

    $(".previous-page").on("click", function(){
        return showPage(currentPage - 1);
    });

});
</script>





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
                    <form action="contact/contact0.php" method="post">
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
<script src="https://kit.fontawesome.com/ca62e1404f.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script> 
</body>
</html>