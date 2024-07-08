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
                            <h2>Top Rated Cities</h2>
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
                                <div class="slide-img" id="img1">
                                    <img src="lebanon1.jpg" alt="">
                                    <a href="beirut.php">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Beirut</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img" id="img2">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Jounieh</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img"id= "img3">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Byblos</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img" id="img4">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Tripoli</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img" id="img5">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Akkar</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img" id="img6">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Baalbeck</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img" id="img7">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Faraya</h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="slide">
                                <div class="slide-img" id="img8">
                                    <a href="#">Learn More</a>
                                </div>
                                <br>
                                <div>
                                    <h3>Tyre</h3>
                                </div>
                            </div>
                        </div>
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