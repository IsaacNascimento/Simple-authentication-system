<html>
<head><title>Junior Kindergarten - Maple Bear</title></head>
<!doctype html>
<html class="no-js" lang="pt-BR">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <
    <meta name="author" content="Gustavo Assunção / Agência Triplus" />
    <meta name="keywords" content="residência, residencia, residencia medica, medicina, residência medica, curso, cursinho, preparatório, residencia, 2021, high, level, high level, residencia high level, método, metodo" />
    <meta name="description" content="O método Residência High Level reúne o melhor conteúdo e a melhor experiência de ensino para te levar ao mais alto nível e ao topo das listas de aprovados." />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="../../assets/images/logo_maple.png" type="image/png">



    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="../../assets/css/animate.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="../../assets/css/LineIcons.2.0.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="../../assets/css/bootstrap.4.5.2.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="../../assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="../../assets/fonts/awesome/css/all.css">

</head>

<body>

    
    

    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <section class="header_area" style="overflow-x: hidden !important;">
        <div class="header_navbar">
        <?php
    session_start();
    if(!(isset($_SESSION['user_id']))){
        session_destroy();
        header("Location: index.php?erro=2");
    
      
      } 
    ?>
      <?php
    if($_SESSION['user_id']) {
    ?>
    Bem vindo <?php/* echo ($_SESSION['user_id']);*/ ?>. clique aqui para  <a href="logout.php" tite="Logout">
    Sair.
    <?php
    };
    ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="../../">
                                <img src="../../assets/images/logo_maple.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <!--<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Início</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Recursos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">Sobre</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#screenshot">PlanosD</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#Doctor">Dr. Gustavo</a>
                                    </li>
                                     <li class="nav-item">
                                        <a class="page-scroll" href="#cursos">Cursos</a>
                                    </li>
                                </ul>
                            </div>-->
                            <!-- navbar collapse -->
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- header navbar -->

        <div id="home" class="header_hero d-lg-flex align-items-center"  style="background-image: linear-gradient(to bottom, #F4F4F4, #fff);">

            <!--<img class="shape shape-1" src="../../assets/images/shape-1.svg" alt="shape">
            <img class="shape shape-2" src="../../assets/images/shape-2.svg" alt="shape">
            <img class="shape shape-3" src="../../assets/images/shape-3.svg" alt="shape">-->

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header_hero_content mt-45">
                            <h2 class="header_title wow fadeInLeftBig " data-wow-duration="1.3s" data-wow-delay="0.2s">Valparaíso de Goiás
                            <br>
                            JUNIOR KINDERGARTEN
                            <br>
                            Ms. Nayana Carilena
                            </h2>
                            <br>
                            <!--<p  class="wow fadeInLeftBig header_text_black" data-wow-duration="1.3s" data-wow-delay="0.6s">A educação Infantil não é apenas uma fase em que as crianças trilham apenas para passar o tempo. É o momento mais importante do seu desenvolvimento. 
                                <br>
                            Aqui, elas começaram a construir todas as bases para serem bem sucedidas nos anos seguintes, por meio de um ambiente seguro onde se incentiva assumir riscos e onde os alunos veem a si mesmos como aprendizes capazes e compententes.
                                <br>
                            Let´s go Bear!
                            </p>-->
                            <!--<ul>
                                <li><a class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1s" href="#saiba-mais">Saiba Mais
                                </a></li>
                                <a class="btn-play-home wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s" href="https://www.youtube-nocookie.com/embed/QjUVh8DcApo" style="visibility: visible; animation-duration: 1.3s; animation-delay: 1.4s; animation-name: fadeInUp;"><img src="https://cdn.iconscout.com/icon/free/png-512/video-play-button-461759.png" height="55">
                                    <p></p>
                                </a>
                            </ul>-->
                        </div>
                        <!-- header hero content -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
            <!--<div class="red_box header_image d-flex align-items-end">
                <div class="image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="1.8s">
                    <img src="../../assets/images/header_app.png" alt="header App">-->
                    <!--<img src="../../assets/images/dots.svg" alt="dots" class="dots">-->
                <!--</div>-->
                <!-- image -->
            <!--</div>-->
           
            <!-- header image -->
        </div>
            <!--<div class="red_flat_box Text_red_box">
              <h2>
                Turmas - Maple Bear Valparaíso
              </h2>-->

            </div>
        <!-- header hero -->
    </section>
    

    <!--====== HEADER PART ENDS ======-->

    <!--====== FEATURES PART START ======-->
    <!--<div class="col-lg-6">
        <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
            <div class="section_title">
                <h4 class="title">Selecione a Turma
                </h4>
                <br>
                <h5>Clique no nome da turma abaixo para acessar o 
                    <br>
                    <b> link das aulas remotas.</b></h5>
            </div>
        </div>
    </div>-->   

    <section id="saiba-mais" class="features_area pt-35 pb-80">
        <div class="container">
           
           
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8" style="margin-bottom: -30px;">
                    <div class="single_features mt-30 features_1 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                       
                        <div class="features_content">
                        
                            
                            <a href="https://meet.google.com/wps-surw-ots">
                              <h4 class="features_title">Link da Aula</h4>
                            </a>  
                            <br>
                            <br>
                            Use o link abaixo para participar
                             <br>
                            das aulas síncronas.
                            <br>
                           <a href="https://meet.google.com/wps-surw-ots">
                              <p> https://meet.google.com/wps-surw-ots</p>
                           </a>
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_2 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                       
                        <div class="features_content">
                            <h4 class="features_title">E-mail para Atividades</h4>
                            <br>
                            As atividades deverão ser enviadas
                            <br>
                            para o email abaixo.
                            <br>
                            <a href="nayana.carilena@te.maplebear.com.br">
                              <p> nayana.carilena@te.maplebear.com.br</p>
                            </a>
                        </div>
                    </div>
                </div>
               
                
                
            </div>
        </div>
    </section>

    <!--====== FEATURES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <!--<section id="about" class="about_area pt-30 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-9">
                    <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <img class="image" src="../../assets/images/about.png" alt="about">
                        <img class="dots" src="../../assets/images/dots.svg" alt="dots">
                    </div>-->
                    <!-- about image -->
               <!-- </div>-->
               
                    <!-- <a class="main-btn" href="#">Discover</a> -->

               <!--- </div>-->
                <!-- about image -->
            <!--</div>
        </div>-->
        <!-- row -->
        <!-- container -->
    <!--</section>-->

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APP FEATURES PART START ======-->

    <!--<section id="app_features">

    </section>-->

    <!--====== APP FEATURES PART ENDS ======-->

    <!--====== VIDEO PART START ======-->

    <!--<section id="video" class="video_area pt-80 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_title text-center">
                        <h4 class="title">You are using free lite version</h4>
                        <p>Please, purchase full version of the template to get all sections, features and permission to remove footer credits.</p></br>

                        <a href="https://rebrand.ly/advanced-ud" rel="nofollow" class="main-btn">Purchase Now</a>
                    </div>-->
        <!-- section title -->
        <!--</div>-->
        <!--</div>-->
        <!-- row -->
        <!--</div>-->
        <!-- container -->
    <!--</section>

    <section id="screenshot">

    </section>-->

    <!--====== PRICNG PART START ======-->



    <!--====== PRICNG PART ENDS ======-->

    <!--====== DOWNLOAD APP PART START ======-->

    <!--section id="Doctor" class="download_app_area pt-80 mb-80">
        <div class="container">
            <div class="download_app">
                <div class="download_shape">
                    <img src="../../assets/images/shape-5.svg" alt="shape">
                </div>
                <div class="download_shape_2">
                    <img src="../../assets/images/shape-6.png" alt="shape">
                </div>
                <div class="download_app_content">
                    <h3 class="download_title">Quem é o Dr. Gustavo?</h3>
                    <br>
                    <p>Gustavo Alves Assunção Filho é a pessoa por trás do Residência High Level. Nascido em 19 de março de 1990 em Goiânia (GO), formou-se em medicina pela Universidade de Santa Catarina (USC). Hoje atua como médico cirurgião de cirurgia
                        cardiovascular Hospital das Clínicas de Santa Catarina.
                        <br><br> Como grande idealizador, Gustavo fez com que sua vocação para ajudar as pessoas ultrapassasse as fronteiras do hospital e fosse até a vida de vários estudantes pelo Brasil.
                    </p>
                    <div class="footer_social">
                        <ul>
                            <li>
                                <a style="background-color: #0a888f;" href="#" styl="float: left;">
                                    <span class="lni lni-facebook-filled"></span>
                                </a>
                            </li>
                            <li>
                                <a style="background-color: #0a888f;" href="https://www.instagram.com/dr_gustavoassuncao/">
                                    <span class="lni lni-instagram-filled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>-->
                    <!-- footer social -->

                <!--</div>-->
                <!-- download app content -->
            <!--</div>-->
            <!-- download app -->
        <!--</div>-->
        <!-- container -->
        <!--<div class="download_app_image d-none d-lg-flex align-items-end">
            <div class="image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                <img src="../../assets/images/download.png" alt="download">
            </div>-->
            <!-- image -->
        <!--</div>-->
        <!-- download app image -->
    <!--</section>-->

    <!--====== DOWNLOAD APP PART ENDS ======-->

    <!--====== BLOG PART START ======-->

    <!--<section id="cursos" class="blog_area pt-80 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-25">
                        <h4 class="title">Siga o High Level!</h4>
                        <p>Nós estamos indo pro topo! E aí, vem com a gente?</p>
                    </div>-->
                    <!-- section title -->
                <!--</div>
            </div>-->
            <!-- row -->
           <!-- <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="single_blog blog_1 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="blog_image">
                            <img src="../../assets/images/blog-1.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <div class="blog_meta d-flex justify-content-between">
                                <div class="meta_date">
                                    <span>18 de Março</span>
                                </div>-->
                                <!-- <div class="meta_like">
                                    <ul>
                                        <li><a href="#"><i class="lni lni-comments-alt"></i> 20</a></li>
                                        <li><a href="#"><i class="lni lni-heart"></i> 15</a></li>
                                    </ul>
                                </div> 
                            </div>
                            <h4 class="blog_title"><a href="https://www.instagram.com/p/CMkoaFPBcLW/">Diagnóstico para alta performance.</a></h4>
                            <a href="https://www.instagram.com/p/CMkoaFPBcLW/" class="main-btn">
                                <span class="lni lni-instagram-filled">
                                        </span> Ler mais</a>
                        </div>
                    </div>
                    single blog -->
               <!-- </div>-->
               <!-- <div class="col-lg-4 col-md-8">
                    <div class="single_blog blog_2 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="blog_image">
                            <img src="../../assets/images/blog-2.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <div class="blog_meta d-flex justify-content-between">
                                <div class="meta_date">
                                    <span>16 de Março</span>
                                </div>
                            </div>
                            <h4 class="blog_title"><a href="https://www.instagram.com/p/CMe6p_3hSF2/">Conhecimento é demais?</a></h4>
                            <a href="https://www.instagram.com/p/CMe6p_3hSF2/" class="main-btn"> <span class="lni lni-instagram-filled">
                            </span> Ler mais</a>
                        </div>
                    </div>-->
                    <!-- single blog -->
                <!--</div>
                <div class="col-lg-4 col-md-8">
                    <div class="single_blog blog_3 mt-30 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="blog_image">
                            <img src="../../assets/images/blog-3.jpg" alt="blog">
                        </div>
                        <div class="blog_content">
                            <div class="blog_meta d-flex justify-content-between">
                                <div class="meta_date">
                                    <span>12 de Março</span>
                                </div>
                            </div>
                            <h4 class="blog_title"><a href="https://www.instagram.com/p/CMViAGmBqHU/">A melhor escolha da sua vida!</a></h4>
                            <a href="https://www.instagram.com/p/CMViAGmBqHU/" class="main-btn"><span class="lni lni-instagram-filled">
                            </span> Ler mais</a>
                        </div>
                    </div>-->
                    <!-- single blog -->
                <!--</div>
            </div>-->
            <!-- row -->
        <!--</div>-->
        <!-- container -->
    <!--</section>-->

    <!--====== BLOG PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer_area pt-75 pb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="footer_subscribe text-center">
                        <h3 class="subscribe_title">Precisa de ajuda?</h3>
                

                        <!--<div class="subscribe_form" id="subscribe_form">
                            <form action="subcribe.php">
                                <input type="text" placeholder="Digite seu email...">
                                <button class="main-btn">Inscrever-se</button>
                            </form>
                        </div>-->
                        <!-- subscribe form -->
                    </div>
                    <!-- footer subscribe -->
                    <!--<div class="footer_social text-center mt-61">
                        <ul>
                            <li><a href="#"><span class="lni lni-facebook-filled"></span></a></li>
                            <li><a href="#"><span class="lni lni-twitter-original"></span></a></li>
                            <li><a href="https://www.instagram.com/residenciahighlevel/"><span class="lni lni-instagram-filled"></span></a></li>
                            <li><a href="#"><span class="lni lni-linkedin-original"></span></a></li>
                        </ul>
                    </div> -->
                    <!--footer social -->
                    <div class="footer_copyright text-center mt-55">
                        <p>Copyright &copy; 2021. Designed and Developed by Triplus</p>
                    </div>
                    <!-- footer copyright -->
                </div>
                
            </div>
            <!-- row -->
          <div>
        <!-- container -->
       </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->


    <!--====== Jquery js ======-->
    <script src="../../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <script src="../../assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.4.5.2.min.js"></script>


    <!--====== Scrolling Nav js ======-->
    <script src="../../assets/js/jquery.easing.min.js"></script>
    <script src="../../assets/js/scrolling-nav.js"></script>

    <!--====== wow js ======-->
    <script src="../../assets/js/wow.min.js"></script>

    <!--====== Main js ======-->
    <script src="../../assets/js/main.js"></script>

</body>

</html>