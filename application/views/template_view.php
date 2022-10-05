<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SkillFactory | Home Page </title>

        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='fonts/Lato-Medium.css' rel='stylesheet' type='text/css'>
        <link href='fonts/Lato-Heavy.css' rel='stylesheet' type='text/css'>

        <!-- Bootstrap css -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">

        <!-- Custom css -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/responsive.css">

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" href="/img/apple-touch-icon-precomposed.png">
        <link rel="shortcut icon" type="image/png" href="/img/fav-icon.png"/>  

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
                                <a href="index.php?url=main"><img src="img/icon_cap.png" alt="">Skill<span>Factory</span></a>
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
                                    <p>Расскажем что такое Машинное Обучение, нейронки и ИИ, как стать аналитиком данных или Data Scientist и зачем маркетологу Питон.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single_footer_widget">
                                    <h2 class="widget_title">Контактная информация</h2>
                                    <ul class="footer_contact">
                                        <li>09 Design Street,Downtown, Sydney, Australia</li>
                                        <li>+01 123 456 78</li>
                                        <li>+01 123 456 78</li>
                                        <li>Info@skillfactory.com</li>
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
        <!-- jQuery main script -->
        <script src="/js/main.js"></script>
    </body>
</html>