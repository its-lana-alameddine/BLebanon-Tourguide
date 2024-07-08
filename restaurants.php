<!DOCTYPE html>
<?php
session_start();
require_once 'includes/database.php';
require_once 'includes/register-inc-r.php';
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
    <title>B Lebanon: Restaurants</title>
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


<?php require_once "login-register/login-register-r.php" ?>

<div class="restaurants-container">
    <div class="inside-image-restaurants">
        <table >
            
            <tr class="food">
                <p>The richness and goodness of Middle Eastern cuisine is well-known around the world.
                    Because it is said that one thing that unifies all Lebanese is their love of food,
                    Lebanon is probably the best place to enjoy it...</p>
            </tr>
        </table>
    </div>
</div>
<div class="breakfast">
    <h1> Top Breakfast Places</h1>

</div>

<!-- pagination start -->
<div class="pagination-container-restaurants">
    <div class="card-content-restaurants" style="display: none">
        <!-- card 1 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/dar-bistro-books.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Dar Bistro & Books</h3>
                <br><br>
                <p>A space that includes a bistro, an excellent bookshop, and a lovely garden. Dar is a triple delight in the heart of Hamra!</p>
                <div class="socials">
                    <a href="https://www.facebook.com/darbistroandbooks/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/darbistroandbooks/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/search/dar+bistro+and+books/@33.8684811,34.7262136,8z"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 2 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/emsherif.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Em Sherif Cafe</h3>
                <br><br>
                <p>Em Sherif is a distinguished fine-dining Oriental restaurant that offers unique, authentic Oriental cuisine which brings back forgotten traditional flavors, providing its guests with an unsurpassed first-class dining experience. </p>
                <div class="socials">
                    <a href="https://www.emsherif-cafe.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/emsherifcafe/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/emsherifcafe/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/search/em+sherif+cafe/@33.8952463,35.4976985,16z/data=!3m1!4b1"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 3 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/mosaic.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Mosaic Restaurant</h3>
                <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 4 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/bartartine-branch-FB.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Bartartine</h3>
                <br><br>
                <p>Bartartine is home to hearty food and artisanal French bread and pastries with 8 branches in Lebanon. </p>
                <div class="socials">
                    <a href="http://www.bar-tartine.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/bartartine/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/bartartine/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/search/bar+tartine/@33.8942867,35.4904562,12z/data=!3m1!4b1"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 5 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/t-marbouta.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>T-Marbouta</h3>
                <br><br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 6 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/zaatarwzeit.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Zaatar w Zeit </h3>
                <br><br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>



        <div class="lunch">
            <h1> Top Lunch/Dinner Places</h1>
        </div>




        <!-- card 7 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/babel.webp" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Babel Bay</h3>
                <br>
                <p>Babel has been providing unique culinary experiences to Lebanese diners since 2009, and has become known for its progressive cuisine through a contemporary fusion of flavors, using the finest Lebanese ingredients.</p>
                <div class="socials">
                    <a href="https://www.babelrestaurant.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/BabelLebanon/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/babel_lebanon/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Babel+Bay/@33.9036133,35.496528,17z/data=!3m1!4b1!4m5!3m4!1s0x151f16c2eb3eb039:0x13ce6180a427c3c1!8m2!3d33.9036133!4d35.4987167"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 8 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/liza.jpeg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Liza</h3>
                <br>
                <p>  Liza is known as one of the most beautiful restaurants in the world, Liza’s kitchen dishes out classic Lebanese fare with a modern spin. </p>
                <div class="socials">
                    <a href="https://lizabeirut.com/"><i class="fa-solid fa-globe"></i></a>
                    <a href="https://www.facebook.com/lizabeirut/"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="https://www.instagram.com/lizabeirut/?hl=en"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="https://www.google.com/maps/place/Liza/@33.8891167,35.5102275,17z/data=!3m1!4b1!4m5!3m4!1s0x151f16fd1564d30b:0x88ecfcb2a888a0ab!8m2!3d33.8891167!4d35.5124162"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 9 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/ritage.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Ritage</h3>
                <br>
                <p>An urban garden and terrace by Chef Maroun Chedid in the heart of Beirut serving lunch, drinks, light snacks & dinner. Transforms into a cosy winter garden when the weather changes.</p>
                <div class="socials">
                    <a href="#"><i class="fa-solid fa-globe"></i></a>
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 10 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/mayrig.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Mayrig</h3>
            <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 11 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/onnobistro.avif" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Onno Bistro</h3>
                <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 12 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/emsherif.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Em Sherif Restaurant</h3>
            <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>

        <!-- card 13 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/rawand.avif" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Rawand Cuisine</h3>
                <br>

                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 14 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/ksar.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Ksar Diner</h3>
                <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 15 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/keif.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Keif</h3>
                <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
    


        <div class="dessert">
            <h1> Top Dessert Places</h1>
        </div>



        <!-- card 19 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/gustav.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Gustav Innovation Sucrée</h3>
                <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 20 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/jeddo.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Bouzet Jeddo</h3>
            <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 21 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/smushkies.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Smushkies</h3>
                <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        <!-- card 22 -->
        <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/hallab1881.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Hallab 1881</h3>
                <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
            <!-- card 22 -->
            <div class="card-restaurants">
            <div class="card-image-restaurants"><img src="projectImages/Restaurants/froozabpooza.jpg" alt=""></div>
            <div class="card-info-restaurants">
                <h3>Frooza Booza</h3>
                <br>
                <p>This modern suite hotel is conveniently located within a one km radius of Dekwaneh’s major corporate companies.</p>
                <div class="socials">
                    <a href="#"> <i class="fa-brands fa-facebook"  ></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"  ></i></a>
                    <a href="#"><i class="fa-solid fa-location-dot"  ></i></a>
                </div>
            </div>
        </div>
        


    </div>


    <!-- <div class="pagination">
    <li class="page-item previous-page"><a href="#" class="page-link">Prev</a></li>
    <li class="page-item current-page"><a href="#" class="page-link">1</a></li>
    <li class="page-item dots"><a href="#" class="page-link">...</a></li>
    <li class="page-item current-page"><a href="#" class="page-link">5</a></li>
    <li class="page-item current-page"><a href="#" class="page-link">6</a></li>
    <li class="page-item dots"><a href="#" class="page-link">...</a></li>
    <li class="page-item current-page"><a href="#" class="page-link">10</a></li>
    <li class="page-item next-page"><a href="#" class="page-link">Next</a></li> 
    </div> -->
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
    var numberOfItems = $(" .card-content-restaurants .card-restaurants ").length;
    var limitPerPage = 23; //cards shown per page
    var totalPages = Math.ceil(numberOfItems / limitPerPage);
    var paginationSize = 1; //page elements visible in the pagination
    var currentPage;

    function showPage(whichPage){
        if(whichPage < 1 || whichPage > totalPages) return false;

        currentPage = whichPage;

        $(".card-content-restaurants .card-restaurants").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

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

    $(".card-content-restaurants").show();
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
                    <form action="contact/contact2.php" method="post">
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
<!-- <script src="script/projectscript.js"></script> -->
<script src="https://kit.fontawesome.com/ca62e1404f.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script> 
<script src="script/script.js"></script>
</body>
</html>