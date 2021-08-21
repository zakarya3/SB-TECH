<?php
include 'db.php';
$query=$conn->prepare("SELECT * FROM `categorie`;");
$query->execute();
$results=$query->fetchAll();


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
    <!-- Stories Section -->
    <div class="container space-2 space-lg-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <span class="d-block small font-weight-bold text-cap mb-2">Catégories</span>
        <h2>vous pouvez sélectionner une catégorie</h2>
      </div>
      <!-- End Title -->

      <div class="row">
        <?php
         if (sizeof($results)>0) {
          for ($i=0; $i < sizeof($results); $i++) { 
            $cat=$results[$i]['nom_cat'];
            $file=$results[$i]['image'];
            echo "
        <div class='col-sm-6 col-md-4 mb-5'>
          <!-- Card Info -->
          <div class='card h-100'>
            <img class='card-img-top' src='admin/fichiers/$file' alt='Image Description'>
            <div class='card-body'>
              <p class='mb-0'>$cat</p>
            </div>
            <div class='card-footer'>
              <a class='font-weight-bold' href='shop-products-grid.php?categorie=$cat'>Voir les produits <i class='fas fa-angle-right fa-sm ml-1'></i></a>
            </div>
          </div>
          <!-- End Card Info -->
        </div>";
          }
        }
        ?>
      </div>

    </div>
    <!-- End Stories Section -->

  </main>
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