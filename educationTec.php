<?php 
 	try{
		$db = new PDO("mysql:host=localhost;dbname=stemferndb;port=3306","root","");
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(Exception $e){
		echo "Cannot connect to database ".$e->getMessage();
		exit;
	}

    if(isset($_GET["feature_id"])){
		$featureId=$_GET["feature_id"];
	}
    try{
		$featureData = $db->query("select * from  features where id=".$featureId)->fetchAll();	
	}catch(Exception $e){
		echo "Not able to get Data ".$e->getMessage(); exit;
	}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> StemFern Limited</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1> <a class="navbar-brand" href="adminLogin.php">
                  STEMFern
              </a></h1>
                <!-- if logo is image enable this   
  <a class="navbar-brand" href="#index.php">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item @@home__active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item @@about__active">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item @@services__active">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <!--/search-right-->
                        <div class="search-right">
                            <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">

                                    <form action="error.php" method="GET" class="search-box">
                                        <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus="">
                                        <button type="submit" class="btn"><span class="fa fa-search"
                                          aria-hidden="true"></span></button>
                                    </form>

                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                            <!-- /search popup -->
                        </div>
                        <!--//search-right-->
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--/header-->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Feature Detail</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- banner bottom shape -->
    <div class="position-relative">
        <div class="shape overflow-hidden">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
        </div>
    </div>
    <!-- banner bottom shape -->

    <section class="w3l-index3" id="about">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
            <?php
					
					foreach($featureData as $feature){
						echo '
                <div class="row">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="features/'.$feature["image"].'" alt="" class="radius-image-full img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 align-self">
                        <h3 class="title-big mx-0">'.$feature["feature_name"].' </h3>
                        <p class="mt-md-4 mt-3">'.$feature["short_descrip"].'</p>
                        <p class="mt-3">'.$feature["long_descrip"].'
                        </p>
                    </div>
                </div>
                ';
            }
        ?>
    
            </div>
        </div>
    </section>


    <!-- copyright -->
    <section class="w3l-copyright">
        <div class="container">
            <div class="row bottom-copies">
                <p class="col-lg-8 copy-footer-29">© 2022 STEMFern. All rights reserved.</p>

                <div class="col-lg-4 main-social-footer-29">
                    <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                    <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                </div>

            </div>
        </div>

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    <!-- //copyright -->

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- Common jquery plugin -->

    <script src="assets/js/theme-change.js"></script>
    <!-- theme switch js (light and dark)-->

    <script src="assets/js/owl.carousel.js"></script>
    <!-- owl carousel -->

    <!-- script for tesimonials carousel slider -->
    <script>
        $(document).ready(function() {
            $("#owl-demo1").owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        loop: false
                    }
                }
            })
        })
    </script>
    <!-- //script for tesimonials carousel slider -->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

    <!--/MENU-JS-->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!--//MENU-JS-->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap-->

</body>

</html>