<?php include 'contact.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Andreja Trajkovic - Portfolio</title>

<!--    google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500italic,600italic,600,700,700italic,300italic,300,400,400italic,800,900' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,400italic,600italic,700,900' rel='stylesheet' type='text/css'>

    <!--    bootstrap.min.css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!--    font awesome-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!--    Animate.css  -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--    custom style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body id="hide">
    <!--  Header  -->
    <header class="header" id="home">
        <div class="header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="header-text text-center wow flipInY">
                            <h1>Andreja Trajkovic</h1>
                            <h3>PHP Developer</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

<!--    about me section -->
    <section id="about">
        <div class="container">
            <div class="row ">

                <div class="section-title"> <h2 class="wow pulse">Who am I? </h2></div>

                <div class="about-text">
                    <div class="col-md-6 col-md-offset-1 wow slideInLeft">
                        <p>I finished ITAcademy at November 2015 in Belgrade.I specialized in PHP Web Development.
                            <br>At June 2016 I became Cambridge Computing Science A Level Certified.
                        </p>
                        <p>I am currently focused on mastering my PHP and MySQL skills.<br>
                            I have a basic knowledge of xHTML/HTML5, CSS/CSS3, JavaScript, jQuery, Bootstrap and XML.</p>
                        <p>I do not have any concrete working experience.I am available for work and any entry level job or internship opportunity will be perfect for me.</p>
                        <p>I live in south Serbia but I am available for moving on another location for job purposes.</p>
                        <p>Feel free to take a look at my <a href="at-cv.pdf" target="_blank">CV</a> and my humble
                        <a href="#projects" data-toggle="collapse">Projects</a>
                            <div id="projects" class="collapse">
                                <button type="button" class="btn btn-info"><a href="https://github.com/andreja87/cms" target="_blank">CMS Project</a></button>
                                <button type="button" class="btn btn-info"><a href="https://github.com/andreja87/rss" target="_blank">Simple RSS</a></button>
                        </div>
                        </p>.
                        <p>In free time I love to travel, to spend Saturdays with my friends, to make my own unique clothes, and I love my job.</p>
                        <p>Here is my <a href="https://rs.linkedin.com/in/andreja-trajkovic-24280086" target="_blank"> linkedin</a> profile and contact form is right bellow.</p>
                    </div>

                    <div class="col-md-4 col-md-offset-1 wow slideInRight">
                        <!-- portfolio image-->
                        <img class="img-circle img-responsive" src="images/portfolio.jpg" alt="this is I">
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="section-title wow pulse">
                        <h2 class="section-title">Contact</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form action="contact.php" method="post" role="form" enctype="multipart/form-data">
                    <div class="col-md-4 wow slideInLeft">

                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        <span class="has-error"></span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                    </div>

                    <div class="col-md-8 wow slideInRight">

                        <textarea class="form-control" id="message" name="message" rows="25" cols="10" placeholder="Message text..."></textarea>
                        <button type="submit" name="submit" class="btn btn-default submit-btn form_submit">SEND</button>

                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container wow fadeInUp">
            <div class="row">

                <div class="col-md-8">

                    <div id="copyright">
                        <p>Copyright &copy; 2017 <a href="#"> at-web-dev.com</a> </p>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="scroll-top">
                        <a href="#home" id="scroll-top"><i class="fa fa-angle-double-up"></i> </a>
                    </div>

                </div>

            </div>
        </div>
    </footer>

    <!--    jquery library -->
    <script src="js/jquery.js"></script>

    <!--    bootstrap.min.js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- wow.js  -->
    <script src="js/wow.min.js"></script>


    <script>

        // add animation/ Initialize Woo
        $(document).ready(function () {

            'use strict';
            new WOW().init();

        });


    </script>

</body>
</html>
