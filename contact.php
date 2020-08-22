<!DOCTYPE html>
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
        document.getElementById("concat").setAttribute("class", "active");
    </script>

    <div class="intro-page">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
    </div>

    <div class="wrapper">
        <section class="keep-touch">
            <div class="container">
                <h2>Keep in touch</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <span class="dot-dash dark">.</span>
                <div class="row">
                    <div class="col-md-5">
                        <div class="keep-touch--white">
                            <h4>Our Adress</h4>
                            <p>House #13, Streat road, Sydney<br>2310 Australia</p>
                            <h4>Call Us</h4>
                            <p>+ 880 168 109 1425<br>+ 0216809142</p>
                            <h4>Email Us</h4>
                            <p><a href="mailto:contactus@email.com">contactus@email.com</a></p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="keep-touch--white">
                            <form action="">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Subject">
                                <textarea name="" id="" rows="5" placeholder="Message"></textarea>
                                <input type="submit" class="button small">
                            </form>
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
