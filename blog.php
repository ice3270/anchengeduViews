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
    <script>
        document.getElementById("blog").setAttribute("class", "active");
    </script>

    <div class="intro-page">
        <div class="container">
            <h1>Blog</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </div>

    <div class="wrapper">
        <section class="our-blog">
            <div class="container">
                <h2>Great Integrations with Others</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <span class="dot-dash dark">.</span>
            </div>
            <div class="our-blog--container">
                <div class="our-blog--item">
                    <div class="our-blog--item__image">
                        <a href="single.php">
                            <img src="assets/img/blog1.png" alt="">
                        </a>
                    </div>
                    <div class="our-blog--item__text left">
                        <span>art / t-shirt</span>
                        <h3>T-shirt design</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
                        <a href="single.php">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="our-blog--item">
                    <div class="our-blog--item__image">
                        <a href="single.php">
                            <img src="assets/img/blog2.png" alt="">
                        </a>
                    </div>
                    <div class="our-blog--item__text left">
                        <span>art / t-shirt</span>
                        <h3>T-shirt design</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
                        <a href="single.php">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="our-blog--item">
                    <div class="our-blog--item__text right">
                        <span>art / t-shirt</span>
                        <h3>T-shirt design</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
                        <a href="single.php">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="our-blog--item__image">
                        <a href="single.php">
                            <img src="assets/img/blog2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="our-blog--item">
                    <div class="our-blog--item__text right">
                        <span>art / t-shirt</span>
                        <h3>T-shirt design</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
                        <a href="single.php">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="our-blog--item__image">
                        <a href="single.php">
                            <img src="assets/img/blog1.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>

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
