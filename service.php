<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A free Bootstrap powerd HTML template exclusively crafted for the super lazy designers like me who designed thousand of websites till today but never got a chance to build one himself.">
    <meta name="keywords" content="Free Portfolio Template, Free Template, Free Bootstrap Template, Dribbble Portfolio Template, Free HTML5 Template">
    <meta name="author" content="EvenFly Team">

    <title>Portfolio Irvan Nurfauzan Saputra</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">
</head>

<body data-spy="scroll" class="light-mode">
    

    <header>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">
                        <span class="brandname">Irvan Nurfauzan Saputra </span>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php"><span class="btnicon icon-user"></span>About</a></li>
                        <li><a href="service.php"><span class="btnicon icon-cup"></span>Services</a></li>
                        <li><a href="portfolio.php"><span class="btnicon icon-rocket"></span>Portfolio</a></li>
                        <li><a href="testimonial.php"><span class="btnicon icon-bubble"></span>Testimonials</a></li>
                        <li><a href="mailto:irvanck5@gmail.com"><span class="btnicon icon-envelope-open"></span>Contact</a></li>
                        <li>
                            <a href="#" id="toggle-mode" onclick="toggleMode()">
                                <span class="btnicon icon-moon"></span>Dark Mode
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="services" class="container">

       
        <div class="sectionhead  row wow fadeInUp">
            <span class="bigicon icon-cup "></span>
            <h3>This is what I can do for you</h3>
            <hr class="separetor">
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                <img src="img/s1.png" alt="">
                <h4>Responsive Web Design</h4>
                <p>Grinder affogato, dark, sweet carajillo, flavour seasonal aroma single origin cream. Percolator. Eligendi impedit dolores nulla.</p>
            </div>

            <!-- ITEM END -->

            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                <img src="img/s4.png" alt="">
                <h4>Windows App Design</h4>
                <p>Grinder affogato, dark, sweet carajillo, flavour seasonal aroma single origin cream. Percolator. Eligendi impedit dolores nulla.</p>
            </div>
            <!-- ITEM END -->

            <!-- ITEM END -->
        </div>
        <!-- SERVICE ITEMS END-->
    </div>
    <footer>
        <div class="container">
            <span class="bigicon icon-speedometer "></span>

            <div class="footerlinks">
                <!-- FOOTER LINKS START -->
                <ul>
                    <li><a href="index.html">About</a></li>
                    <li><a href="service.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="testimonial.html">Testimonials</a></li>

                    <!--replace the email address below with your email address-->
                    <li><a href="mailto:you@yourmail.com">Contact</a></li>
                </ul>
            </div>
            <!-- FOOTER LINKS END -->

            <div class="copyright">
                <!-- FOOTER COPYRIGHT START -->
                <p><a href="#">Drifolio</a> stands for Dribbble-Portolio. This is a free HTML template designed and coded by <a href="http://creativealiens.com">Creative Aliens</a>. All logo and images in this template used for preview purpose only. You are free to use the template but make sure to use your own images.</p>
            </div>
            <!-- FOOTER COPYRIGHT END -->

            <div class="footersocial wow fadeInUp" data-wow-duration="3s">
                <!-- FOOTER SOCIAL ICONS START -->
                <ul>
                    <li><a href="http://facebook.com/MamunSrizon"><span class="icon-social-facebook"></span></a></li>
                    <li><a href="http://twitter.com/MamunSrizon"><span class="icon-social-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-social-youtube"></span></a></li>
                    <li><a href="http://dribbble.com/srizon"><span class="icon-social-dribbble"></span></a></li>
                    <li><a href="#"><span class="icon-social-tumblr"></span></a></li>
                </ul>
            </div>
            <!-- FOOTER SOCIAL ICONS END -->
        </div>
    </footer>
    
    <script>
        function toggleMode() {
            var body = document.body;
            var toggleButton = document.getElementById("toggle-mode");
    
            // Toggle between light and dark mode
            body.classList.toggle("dark-mode");
            body.classList.toggle("light-mode");
    
            // Update the button text
            if (body.classList.contains("dark-mode")) {
                toggleButton.innerHTML = '<span class="btnicon icon-sun"></span>Light Mode';
            } else {
                toggleButton.innerHTML = '<span class="btnicon icon-moon"></span>Dark Mode';
            }
        }
    
        // Default mode is light mode
        document.body.classList.add("light-mode");
    </script>
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <!--Other necessary scripts-->
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jribbble.min.js"></script>
    <script src="js/drifolio.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>