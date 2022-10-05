<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EDUCAMPUS | Home Page </title>

        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='fonts/Lato-Medium.css' rel='stylesheet' type='text/css'>
        <link href='fonts/Lato-Heavy.css' rel='stylesheet' type='text/css'>

        <!-- Bootstrap css -->
        <link rel="stylesheet" href="/task_24.5/css/bootstrap.min.css">

        <!-- Font awesome css -->
        <link rel="stylesheet" href="/task_24.5/css/font-awesome.min.css">

        <!-- Stroke Font Icon css -->
        <link rel="stylesheet" href="/task_24.5/css/pe-icon-7-stroke.css">

        <!-- Animate css -->
        <link rel="stylesheet" href="/task_24.5/css/animate.css">

        <!-- Owl carousel 2 css -->
        <link rel="stylesheet" href="/task_24.5/css/owl.carousel.css">

        <!-- Custom css -->
        <link rel="stylesheet" href="/task_24.5/css/style.css">
        <link rel="stylesheet" href="/task_24.5/css/responsive.css">

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" href="/task_24.5/img/apple-touch-icon-precomposed.png">
        <link rel="shortcut icon" type="image/png" href="/task_24.5/img/fav-icon.png"/>  

    </head>
    
    <body>
        <div id="preloader">
            <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
        </div>
        
        <header class="header_area">
            <div class="container">
                <div class="header_content">
                    <div class="row">
                        <div class="col-md-3 col-sm-2">
                            <div class="logo">
                                <a href="/"><img src="img/icon_cap.png" alt="">Edu<span>campus</span></a>
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>                             
                            </div>
                        </div>                                    
                        <div class="col-md-9 col-sm-10 nav_area">
                            <nav class="main_menu">
                                <div class="navbar-collapse collapse"> 
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="current_page_item"><a href="index.php?url=main">Главная</a></li>
                                        <li><a href="index.php?url=services">Услуги</a></li>
                                        <li><a href="index.php?url=portfolio">Портфолио</a></li>
                                        <li><a href="index.php?url=contacts">Контакты</a></li>
                                    </ul>                                                     
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="key_to_success_area">
            <div class="container">
                <div class="row">
                    <div class="key_to_success">
                        <div class="col-md-7">
                            <div class="key2seccess_txt">
                                <?php include $content_view; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
  
        <footer class="footer_area">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="footer_widgets">
                            <div class="col-md-3 col-sm-6">
                                <div class="single_footer_widget">
                                    <h2 class="widget_title">О нас</h2>
                                    <p>On my way to where the air is sweet. Can you tell me how to get how to get to Sesame Street! The first mate and his Skipper too will do their very best to make the others comfortable </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single_footer_widget">
                                    <h2 class="widget_title">Контактная информация</h2>
                                    <ul class="footer_contact">
                                        <li>09 Design Street,Downtown, Sydney, Australia</li>
                                        <li>+01 123 456 78</li>
                                        <li>+01 123 456 78</li>
                                        <li>Info@educampus.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <p>© All rights reserved</p>
                        </div>
                        <div class="col-sm-8">
                            <nav class="footer_menu">
                                <ul>
                                    <li><a href="index.php?url=main">Главная</a></li>
                                    <li><a href="index.php?url=services">Услуги</a></li>
                                    <li><a href="index.php?url=portfolio">Портфолио</a></li>
                                    <li><a href="index.php?url=contacts">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery Latest version -->
        <script src="/task_24.5/js/vendor/jquery.1.11.1.js"></script>
        
        <!-- Google Maps API -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <!-- Bootstrap JS -->
        <script src="/task_24.5/js/bootstrap.min.js"></script>

        <!-- jQuery Counterup and Waypoints -->
        <script src="/task_24.5/js/waypoints.min.js"></script>
        <script src="/task_24.5/js/jquery.counterup.min.js"></script>

        <!-- jQuery easing -->
        <script src="/task_24.5/js/jquery.easing.1.3.min.js"></script>

        <!-- jQuery owl carousel -->
        <script src="/task_24.5/js/owl.carousel.min.js"></script>

        <!-- WOW Animation -->
        <script src="/task_24.5/js/wow.min.js"></script>
           
        <!--Activating WOW Animation only for modern browser-->
        <!--[if !IE]><!-->
            <script type="text/javascript">new WOW().init();</script>
        <!--<![endif]-->		

        <!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
        <!--[if gte IE 9]>
            <script type="text/javascript">new WOW().init();</script>
        <![endif]-->		 

        <!--Opacity & Other IE fix for older browser-->
        <!--[if lte IE 8]>
            <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
        <![endif]-->	    

        <!-- jQuery main script -->
        <script src="/task_24.5/js/main.js"></script>
    </body>
</html>