<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <title>Document</title>
</head>
<body>
<section id="slider">
        <div class="container2">
            <div class="subcontainer2">
                <div class="slider-wrapper">
                    <div class="controller">
                        <div>
                            <h2>More Lebanese cities</h2>
                        </div>
                        <div id="controls">
                            <button class="previous"><i class="fa-solid fa-angle-left"></i></button>
                            <button class="next"><i class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </div>
                    <br>
                    <div class="my-slider">
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-1">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Deir Al-Qamar</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-12">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Bkarzla</h3>
                                    <p>Akkar</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-11">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Bkassine</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-4">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Akkar Al-Aatika</h3>
                                    <p>Akkar</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-5">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Zahle</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-8">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Beino</h3>
                                    <p>Akkar</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-9">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Batroun</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-10">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Minnieh</h3>
                                    <p>Akkar</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1"id= "img-3">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Chekka</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-2">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Qammouaa</h3>
                                    <p>Akkar</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-7">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Jeita</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-6">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Kobayat</h3>
                                    <p>Akkar</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-13">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Nahr Ibrahim</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img slide-img1" id="img-14">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Aandket</h3>
                                    <p>Akkar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="note">
                        <a href="#containermap">
                            <div class="first">
                                <span>for more check the map above</span>
                            </div>
                            <span><i class="fa-solid fa-location-dot"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let slider = tns({
        container : ".my-slider",
        "slideBy" : 1,
        "speed" : 400,
        "nav" : false,
        controlsContainer: "#controls",
        prevButton : ".previous",
        nextButton : ".next",
        responsive: {
            1600:{
                items : 4,
                gutter: 20
            },
            1024:{
                items : 3,
                gutter: 20
            },
            768: {
                items : 2,
                gutter: 20
            }, 
            480:{
                items :1,
            }
            }
        })
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
</body>
</html>
