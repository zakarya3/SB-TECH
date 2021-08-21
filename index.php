<?php
include 'db.php';
$query=$conn->prepare("SELECT * FROM `categorie`;");
$query->execute();
$results=$query->fetchAll();

$queryP=$conn->prepare("SELECT * FROM `partner`;");
$queryP->execute();
$resultsP=$queryP->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Aug 2021 17:31:15 GMT -->

<head>
  <!-- Title -->
  <title>SB-TECH | Fournisseur de référence de matériels industriels</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5da19ef311.js" crossorigin="anonymous"></script>

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-show-hide"
    data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>


    <div class="header-section">


      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg">
          <!-- Logo -->
          <a class="navbar-brand" href="index.php" aria-label="Front">
            <img src="assets/svg/logo2.png" alt="Logo">
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle" aria-label="Toggle navigation"
            aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
            <span class="navbar-toggler-default">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor"
                  d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
              </svg>
            </span>
            <span class="navbar-toggler-toggled">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor"
                  d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
              </svg>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse">
            <div class="navbar-body header-abs-top-inner">
              <ul class="navbar-nav">
                <!-- Home -->
                <li class="hs-has-mega-menu navbar-nav-item">
                  <a id="homeMegaMenu" class="hs-mega-menu-invoker nav-link" href="index.php" aria-haspopup="true"
                    aria-expanded="false">Accueil</a>

                  <!-- Home - Mega Menu -->
                  <div class="hs-mega-menu " aria-labelledby="homeMegaMenu">

                  </div>

                  <!-- End Home - Mega Menu -->
                </li>
                <!-- End Home -->

                <!-- Pages -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle " href="categories.php"
                    aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Produits</a>

                  <!-- Pages - Submenu -->
                  <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu"
                    style="min-width: 230px;">
                    <!-- Contacts -->
                    <?php
                    if (sizeof($results)>0) {
                for ($i=0; $i < sizeof($results); $i++) { 
                  $cat=$results[$i]['nom_cat'];
                  echo"
                    <div class='hs-has-sub-menu'>
                      <a id='navLinkContactsServices' class='hs-mega-menu-invoker dropdown-item ' href='shop-products-grid.php?categorie=$cat'
                        aria-haspopup='true' aria-expanded='false'
                        aria-controls='navSubmenuContactsServices'> $cat</a>

                      <div id='navSubmenuContactsServices' class='hs-sub-menu' aria-labelledby='navLinkContactsServices'
                        style='min-width: 230px;'>

                      </div>
                    </div>";
                  }
                  }
                    ?>
                    <!-- Contacts -->
                  </div>
                  <!-- End Pages - Submenu -->
                </li>
                <!-- End Pages -->

                <!-- Blog -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link " href="brochure.html" aria-haspopup="true"
                    aria-expanded="false" aria-labelledby="blogSubMenu">Brochure</a>

                  <!-- Blog - Submenu -->
                  <div id="blogSubMenu" class="hs-sub-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">

                    <!-- End Submenu -->
                </li>
                <!-- End Blog -->
                <!-- Blog -->
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link " href="#meteo" aria-haspopup="true"
                    aria-expanded="false" aria-labelledby="blogSubMenu">Météo</a>

                  <!-- Blog - Submenu -->
                  <div id="blogSubMenu" class="hs-sub-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">

                    <!-- End Submenu -->
                </li>
                <!-- End Blog -->


                <!-- Demos -->
                <li class="hs-has-mega-menu navbar-nav-item" data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "900px"
                      }
                    }'>
                  <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link " href="page-contacts-start-up.php" aria-haspopup="true"
                    aria-expanded="false">Contact</a>

                  <!-- Demos - Mega Menu -->
                  <div class="hs-mega-menu" aria-labelledby="demosMegaMenu">
                    <div class="row no-gutters">


                    </div>
                  </div>
                  <!-- End Demos - Mega Menu -->
                </li>
                <!-- End Demos -->


                <!-- End Docs - Submenu -->
                </li>
                <!-- End Docs -->
              </ul>
            </div>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="d-lg-flex position-relative">
      <div class="container d-lg-flex align-items-lg-center space-top-2 space-lg-0 min-vh-lg-100">
        <!-- Content -->
        <div class="w-md-100">
          <div class="row">
            <div class="col-lg-5">
              <div class="mb-5 mt-11">
                <h1 class="display-4 mb-3">
                  Matériel et Fourniture Industriel
                </h1>
                <p class="lead">Fournisseur de référence de matériels industriels .</p>
              </div>

              <a class="btn btn-primary btn-wide transition-3d-hover" href="categories.php">Nos produits</a>
              <a class="btn btn-link btn-wide" href="page-contacts-start-up.php">Contactez-nous <i class="fas fa-angle-right fa-sm ml-1"></i></a>
            </div>
          </div>
        </div>
        <!-- End Content -->

        <!-- SVG Shape -->
        <figure class="col-lg-7 col-xl-6 d-none d-lg-block position-absolute top-0 right-0 pr-0 ie-main-hero"
          style="margin-top: 6.75rem;">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1137.5 979.2">
            <path fill="#F9FBFF" d="M565.5,957.4c81.1-7.4,155.5-49.3,202.4-115.7C840,739.8,857,570,510.7,348.3C-35.5-1.5-4.2,340.3,2.7,389
              c0.7,4.7,1.2,9.5,1.7,14.2l29.3,321c14,154.2,150.6,267.8,304.9,253.8L565.5,957.4z" />
            <defs>
              <path id="mainHeroSVG1"
                d="M1137.5,0H450.4l-278,279.7C22.4,430.6,24.3,675,176.8,823.5l0,0C316.9,960,537.7,968.7,688.2,843.6l449.3-373.4V0z" />
            </defs>
            <clipPath id="mainHeroSVG2">
              <use xlink:href="#mainHeroSVG1" />
            </clipPath>
            <g transform="matrix(1 0 0 1 0 0)" clip-path="url(#mainHeroSVG2)">
              <image width="750" height="650" xlink:href="assets/img/hi.jpeg"
                transform="matrix(1.4462 0 0 1.4448 52.8755 0)"></image>
            </g>
          </svg>
        </figure>
        <!-- End SVG Shape -->
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Articles Section -->
    <div class="container space-2 space-top-xl-3 space-bottom-lg-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2>Nos services</h2>
      </div>
      <!-- End Title -->

      <div class="row mx-n2 mx-lg-n3">
        <div class="col-sm-6 col-lg-4 px-2 px-lg-3 mb-3 mb-lg-0" data-aos="fade-up">
          <!-- Card -->
          <a class="card bg-primary text-left h-100 transition-3d-hover" href="#">
            <div class="card-body">
              <div class="mb-5">
                <h3 class="text-white">Fourniture industrielles</h3>
                <p class="text-white">Notre priorité est de fournir à nos clients la meilleure qualité de produits
                  disponible sur le marché à des tarifs négociés.</p>
              </div>
              <img class="img-fluid w-100" src="assets/svg/docs-frame.svg" alt="Image Description">
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-4 px-2 px-lg-3 mb-3 mb-lg-0" data-aos="fade-up" data-aos-delay="150">
          <!-- Card -->
          <a class="card bg-dark text-left h-100 transition-3d-hover" href="#">
            <div class="card-body">
              <div class="mb-5">
                <h3 class="text-white">Automatisation industriel</h3>
                <p class="text-white">Installation, programmation et service d'entretien d'automates, Dessins et
                  programmation par ordinateur. </p>
              </div>
              <img class="img-fluid w-100" src="assets/svg/snippets-frame.svg" alt="Image Description">
            </div>
          </a>
          <!-- End Card -->
        </div>

        <div class="col-sm-6 col-lg-4 px-2 px-lg-3" data-aos="fade-up" data-aos-delay="200">
          <!-- Card -->
          <a class="js-go-to card bg-warning text-left h-100 transition-3d-hover" href="#"
            data-hs-go-to-options='{
              "targetSelector": "#demoExamplesSection",
              "offsetTop": 0,
              "position": null,
              "animationIn": false,
              "animationOut": false
             }'>
            <div class="card-body">
              <div class="mb-5">
                <h3 class="text-white">Electricité industrielle</h3>
                <p class="text-white">
                  Electricité industrielle
                  Électricité industrielle - installation & maintenance des équipements électriques </p>
              </div>
              <img class="img-fluid w-100" src="assets/svg/layouts-frame.svg" alt="Image Description">
            </div>
          </a>
          <!-- End Card -->
        </div>
      </div>
    </div>
    <!-- End Articles Section -->


    <!-- Features Section -->
    <div class="container space-2 space-lg-3">
      <div class="row justify-content-lg-between">
        <div class="col-lg-5 order-lg-2 pl-lg-0">
          <div class="bg-img-hero h-100 min-h-450rem rounded-lg"
            style="background-image: url(assets/img/2.jpeg);"></div>
        </div>

        <div class="col-lg-6 order-lg-1">
          <div class="pt-8 pb-lg-8">
            <!-- Title -->
            <div class="mb-5 mb-md-7">
              <h2 class="mb-3">Nos produits</h2>
              <p> SB-TECH , la spécialiste dans l'importation et la forniture de tous matériels industriels conformément
                aux normes, propose une large gamme de choix de fornitures industrielles.</p>
            </div>
            <!-- End Title -->

            <div class="row">
              <div class="col-6 mb-3 mb-md-5">
                <div class="pr-lg-4">
                  <h2 style="color:  #ff9a00">Robotique</h2>
                  <p>Notre gamme de robots industriels est conçue pour travailler dans les environnements les plus
                    hostiles, mais également pour répondre aux critères des salles blanches,les robots démontrent leur
                    efficacité en toutes circonstances..</p>
                </div>
              </div>

              <div class="col-6 mb-3 mb-md-5">
                <div class="pr-lg-4">
                  <h2 style="color:  #ff9a00">Automatisme</h2>
                  <p>Chez SB-TECH vous trouvez une gamme d'automates et des modules de contrôle qui va révolutionner
                    votre système de contrôle de process.</p>
                </div>
              </div>

              <div class="col-6">
                <div class="pr-lg-4">
                  <h2 style="color:  #ff9a00">Instrumentation & Régulation</h2>
                  <p>SB-TECH met à votre disposition offre des capacités de connectivité permettant de réagir plus
                    rapidement aux demandes d'informations dans le cadre d'un environnement sûr et sécurisé.</p>
                </div>
              </div>

              <div class="col-6">
                <div class="pr-lg-4">
                  <h2 style="color:  #ff9a00">Electronique</h2>
                  <p>Chez SB-TECH vous trouvez tous les composants électroniques avec une très bonne qualité.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-light" id="meteo">
      <div class="container space-2">
        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-6">
            <!-- Title -->
            <div class="text-center mb-4">
              <h2 class="h1">Plateforme météo</h2>
              <p>SB-TECH Cloud Platform <br> Accédez à toutes les données de votre moniteur d'environnement ou de votre station météo <br> <br>  <a class="btn btn-sm btn-primary transition-3d-hover"
                    href="meteo/login.php"
                    target="_blank">Se connecter</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Subscribe Section -->

    <!--Partners-->

    <div class="container space-2 space-top-xl-3 space-bottom-lg-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2>Nos partenaires</h2>
      </div>
      <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
          <?php
          if (sizeof($resultsP)>0) {
            for ($i=0; $i < sizeof($resultsP); $i++) { 
              $image=$resultsP[$i]['image'];
              echo"
          <div class='swiper-slide'><img src='admin/fichiers/$image' alt=''></div>";
            }
          }
          ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>



    <!--End partners-->
    <!-- End Features Section -->


    <!-- ========== FOOTER ========== -->
    <footer class="bg-dark">
      <div class="container">
        <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
          <div class="row justify-content-lg-between">
            <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
              <!-- Logo -->
              <div class="mb-4">
                <a href="index.php" aria-label="Front">
                  <img class="brand" src="assets/svg/logo2.png" alt="Logo">
                </a>
              </div>
              <!-- End Logo -->

              <!-- Nav Link -->
              <ul class="nav nav-sm nav-x-0 nav-white flex-column">
                <li class="nav-item">
                  <a class="nav-link media" href="#">
                    <span class="media">
                      <span class="fas fa-location-arrow mt-1 mr-2"></span>
                      <span class="media-body">
                        Bureau N 1 .Av Prince Abdelkader N 78 Cite Almassira Agadir
                      </span>
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link media" href="tel:+212 528 217 355">
                    <span class="media">
                      <span class="fas fa-phone-alt mt-1 mr-2"></span>
                      <span class="media-body">
                        +212 528 217 355
                      </span>
                    </span>
                  </a>
                </li>
              </ul>
              <!-- End Nav Link -->
            </div>

            <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
              <h5 class="text-white">Accueil</h5>

              <!-- Nav Link -->
        
              <!-- End Nav Link -->
            </div>

            <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
              <h5 class="text-white">Produits</h5>

              <!-- Nav Link -->
              <ul class="nav nav-sm nav-x-0 nav-white flex-column">
                <li class="nav-item"><a class="nav-link" href="#">Robotique</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Automatisme</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Instrumentation & Régulation</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Matériel Electrique Modulaire</a></li>
              </ul>
              <!-- End Nav Link -->
            </div>

            <div class="col-6 col-md-3 col-lg">
              <h5 class="text-white">Autres Produits</h5>

              <!-- Nav Link -->
              <ul class="nav nav-sm nav-x-0 nav-white flex-column">
                <li class="nav-item"><a class="nav-link" href="#">Telecomunication</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Electronique</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Hydraulique</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Pneumatique</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Groupe Machine</a></li>
              </ul>
              <!-- End Nav Link -->
            </div>

            <div class="col-6 col-md-3 col-lg">
              <h5 class="text-white">   <a class=""
                    href="page-login.php"
                    target="_blank"
                    style="color:white;">Connexion</a></h5>
            </div>
          </div>
        </div>

        <hr class="opacity-xs my-0">

        <div class="space-1">
          <!-- Copyright -->
          <div class="w-md-75 text-lg-center mx-lg-auto">
            <p class="text-white opacity-sm small">&copy; SB-TECH 2021-2022.</p>
            <p class="text-white opacity-sm small">SB-TECH , la spécialiste dans l'importation et la forniture de tous matériels industriels conformément aux normes, propose une large gamme de choix de fornitures industrielles. </p>
          </div>
          <!-- End Copyright -->
        </div>
      </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

   

    <!-- Go to Top -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- End Go to Top -->


    <!-- JS Implementing Plugins -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- JS Front -->
    <script src="assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // INITIALIZATION OF HEADER
        // =======================================================
        var header = new HSHeader($('#header')).init();


        // INITIALIZATION OF MEGA MENU
        // =======================================================
        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
          desktop: {
            position: 'left'
          }
        }).init();


        // INITIALIZATION OF UNFOLD
        // =======================================================
        var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


        // INITIALIZATION OF TEXT ANIMATION (TYPING)
        // =======================================================
        var typed = $.HSCore.components.HSTyped.init(".js-text-animation");


        // INITIALIZATION OF AOS
        // =======================================================
        AOS.init({
          duration: 650,
          once: true
        });


        // INITIALIZATION OF FORM VALIDATION
        // =======================================================
        $('.js-validate').each(function () {
          $.HSCore.components.HSValidation.init($(this), {
            rules: {
              confirmPassword: {
                equalTo: '#signupPassword'
              }
            }
          });
        });


        // INITIALIZATION OF SHOW ANIMATIONS
        // =======================================================
        $('.js-animation-link').each(function () {
          var showAnimation = new HSShowAnimation($(this)).init();
        });


        // INITIALIZATION OF COUNTER
        // =======================================================
        $('.js-counter').each(function () {
          var counter = new HSCounter($(this)).init();
        });


        // INITIALIZATION OF STICKY BLOCK
        // =======================================================
        var cbpStickyFilter = new HSStickyBlock($('#cbpStickyFilter'));


        // INITIALIZATION OF CUBEPORTFOLIO
        // =======================================================
        $('.cbp').each(function () {
          var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
            layoutMode: 'grid',
            filters: '#filterControls',
            displayTypeSpeed: 0
          });
        });

        $('.cbp').on('initComplete.cbp', function () {
          // update sticky block
          cbpStickyFilter.update();
        });

        $('.cbp').on('filterComplete.cbp', function () {
          // update sticky block
          cbpStickyFilter.update();
        });

        $('.cbp').on('pluginResize.cbp', function () {
          // update sticky block
          cbpStickyFilter.update();
        });

        // animated scroll to cbp container
        $('#cbpStickyFilter').on('click', '.cbp-filter-item', function (e) {
          $('html, body').stop().animate({
            scrollTop: $('#demoExamplesSection').offset().top
          }, 200);
        });


        // INITIALIZATION OF GO TO
        // =======================================================
        $('.js-go-to').each(function () {
          var goTo = new HSGoTo($(this)).init();
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
    </script>
</body>

<!-- Mirrored from htmlstream.com/front/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Aug 2021 17:31:24 GMT -->

</html>