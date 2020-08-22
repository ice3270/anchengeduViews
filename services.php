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
        document.getElementById("services").setAttribute("class", "active");
    </script>

   <div class="intro-page">
       <div class="container">
           <h1>Services</h1>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
       </div>
   </div>

    <div class="wrapper">
        <section class="four-elements">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="four-elements--image"><i class="fa fa-eye" aria-hidden="true"></i></div>
                        <h3>Sleek Design</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="four-elements--image"><i class="fa fa-heart" aria-hidden="true"></i></div>
                        <h3>Clean Code</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="four-elements--image"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></div>
                        <h3>Creative Ideas</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                    <div class="col-md-3">
                        <div class="four-elements--image"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                        <h3>Free Support</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Our Services</h2>
                        <div class="our-services--element">
                            <h4>Web Design</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ip sum has been the industry's standard dummy text ever.</p>
                            <div class="our-services--element__image"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                        </div>
                        <div class="our-services--element">
                            <h4>Print Design</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ip sum has been the industry's standard dummy text ever.</p>
                            <div class="our-services--element__image"><i class="fa fa-print" aria-hidden="true"></i></div>
                        </div>
                        <div class="our-services--element">
                            <h4>Photography</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ip sum has been the industry's standard dummy text ever.</p>
                            <div class="our-services--element__image"><i class="fa fa-camera" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-services--slider">
                <div>
                    <img src="assets/img/services.png" alt="" />
                </div>
                <div>
                    <img src="assets/img/services.png" alt="" />
                </div>
                <div>
                    <img src="assets/img/services.png" alt="" />
                </div>
            </div>
            <div class="our-services--dots"></div>
        </section>

        <section class="our-pricing">
            <div class="container">
                <h2>Our Pricing</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <span class="dot-dash dark">.</span>
                <div class="row">
                    <div class="col-md-4">
                        <div class="our-pricing--package">
                            <h3>Starter</h3>
                            <div class="our-pricing--package__data">
                                <span><b>$19</b>per month</span>
                                <ul>
                                    <li>Competition Analysis Methods</li>
                                    <li>All Ranked URLs</li>
                                    <li>International Support System</li>
                                    <li>Social Media Tracking</li>
                                </ul>
                                <a href="#" class="button small">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-pricing--package starred">
                            <h3>Premium</h3>
                            <div class="our-pricing--package__data">
                                <span><b>$39</b>per month</span>
                                <ul>
                                    <li>Competition Analysis Methods</li>
                                    <li>All Ranked URLs</li>
                                    <li>International Support System</li>
                                    <li>Social Media Tracking</li>
                                </ul>
                                <a href="#" class="button small">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="our-pricing--package">
                            <h3>Business</h3>
                            <div class="our-pricing--package__data">
                                <span><b>$99</b>per month</span>
                                <ul>
                                    <li>Competition Analysis Methods</li>
                                    <li>All Ranked URLs</li>
                                    <li>International Support System</li>
                                    <li>Social Media Tracking</li>
                                </ul>
                                <a href="#" class="button small">Choose Plan</a>
                            </div>
                        </div>
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
