﻿<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8" />
    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
    <link href="css/vendor/bootstrap.css" rel="stylesheet" />
    <link href="css/vendor/font-awesome.css" rel="stylesheet" />
    <link href="css/vendor/slick.css" rel="stylesheet" />
    <link href="css/vendor/slick-theme.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
</head>
<body>

    <?php
        require "header.php";
    ?>

    <div class="intro-page">
        <div class="container">
            <h1>T-SHIRT DESIGN</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </div>

    <div class="wrapper">
        <article>
            <div class="container">
                <div class="single-portfolio">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="single-portfolio--slider">
                                <div>
                                    <img src="assets/img/services.png" alt="">
                                </div>
                                <div>
                                    <img src="assets/img/services.png" alt="">
                                </div>
                                <div>
                                    <img src="assets/img/services.png" alt="">
                                </div>
                            </div>
                            <div class="single-portfolio--slider__dots"></div>
                        </div>
                        <div class="col-md-5">
                            <h2>Lorem Ipsum</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <ul>
                                <li>
                                    <span>Categories</span>
                                    Web Development
                                </li>
                                <li>
                                    <span>Client</span>
                                    Rubik Technologies
                                </li>
                                <li>
                                    <span>Technologies</span>
                                    HTML, JS, CSS3
                                </li>
                            </ul>
                            <a href="#" class="button">Visit Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <?php
            require "section-floor.php";
        ?>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                  
                </div>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery-3.1.0.min.js"></script>
    <script src="js/vendor/jquery.easing.min.js"></script>
    <script src="js/vendor/tether.js"></script>
    <script src="js/vendor/bootstrap.js"></script>
    <script src="js/vendor/slick.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
