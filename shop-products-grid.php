<?php
include 'db.php';
$query=$conn->prepare("SELECT * FROM `categorie`;");
$query->execute();
$results=$query->fetchAll();


$cat_n=$_GET['categorie'];

if (!empty($cat_n)) {
  $numperpage=12;
$page=$_GET['start'];
if (!$page) $page=0;
$start=$page * $numperpage;
$queryP=$conn->prepare("SELECT * FROM `product` WHERE categorie='$cat_n' LIMIT $start,$numperpage;");
$queryP->execute();
$res=$queryP->fetchAll();

$query1P=$conn->prepare("SELECT COUNT(id_prd) FROM product WHERE categorie='$cat_n';");
$query1P->execute();
$resP=$query1P->fetchAll();
$numrecord=$resP[0]['COUNT(id_prd)'];
$numlinks=ceil($numrecord/$numperpage);


}else {
  $queryP=$conn->prepare("SELECT * FROM `product`;");
$queryP->execute();
$res=$queryP->fetchAll();
}


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front/shop-products-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Aug 2021 17:30:24 GMT -->

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
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
                      <a id='navLinkContactsServices' class='hs-mega-menu-invoker dropdown-item ' href='shop-products-grid.php?categorie=$cat && start=0'
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
                  <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link " href="page-contacts-start-up.php"
                    aria-haspopup="true" aria-expanded="false">Contact</a>

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
  <main id="content" role="main" style="margin-top: 40px;">
    <!-- Products & Filters Section -->
    <div class="container space-top-1 space-top-md-2 space-bottom-2 space-bottom-lg-3">
      <div class="row" style="justify-content: center; align-items: center;">
        <div class="col-lg-9">
          <!-- Sorting -->
          <div class="row align-items-center mb-5">
            <div class="col-sm mb-3 mb-sm-0">
              <span class="font-size-1 ml-1">
                <?php echo $resP[0]['COUNT(id_prd)'];?> products
              </span>
            </div>
          </div>
          <!-- End Sorting -->
          <!-- Products -->
          <div class='row mx-n2 mb-5'>
            <?php
          if (sizeof($res)>0) {
            for ($i=0; $i < sizeof($res); $i++) {
              $id=$res[$i]['id_prd'];
              $nom_prd=$res[$i]['nom_prd'];
              $categorie=$res[$i]['categorie'];
              $image1=$res[$i]['image1'];
              echo"
            <div class='col-sm-6 col-lg-4 px-2 px-sm-3 mb-3 mb-sm-5'>
              <!-- Product -->
              <div class='card card-bordered shadow-none text-center h-100'>
                <div class='position-relative'>
          <a href='shop-single-product.php?id=$id && categorie=$cat_n'><img class='card-img-top' src='admin/fichiers/$image1' alt='Image Description'></a>
                </div>
                <div class='card-body pt-4 px-4 pb-0'>
                  <div class='mb-2'>
                    <a class='d-inline-block text-body small font-weight-bold mb-1' href='#'>$categorie</a>
                    <span class='d-block font-size-1'>
                      <a class='text-inherit' href='shop-single-product.php?id=$id && categorie=$cat_n'>$nom_prd</a>
                    </span>
                  </div>
                </div>
                <div class='card-footer border-0 pt-0 pb-4 px-4'>
                 <a href='shop-single-product.php?id=$id && categorie=$cat_n'><button type='button'  class='btn btn-sm btn-outline-primary btn-pill transition-3d-hover'>Plus de détails</button></a>
                </div>
              </div>
              <!-- End Product -->
            </div>
          ";
            }
          }
          
          
          ?>
          </div>

          <!-- Pagination -->
          <nav aria-label="Page navigation example">
            <ul class="pagination">
            
              <?php
              $catGet=$_GET['categorie'];
              $previous=$page-1;
              if ($page!=0) {
                echo"<li class='page-item'><a class='page-link' href='shop-products-grid.php?categorie=$catGet && start=$previous'>Previous</a></li>";
              }
              
              for ($i=0 ; $i < $numlinks ; $i++) { 
                $y=$i+1;
                echo"
              <li class='page-item'><a class='page-link' href='shop-products-grid.php?categorie=$catGet && start=$i'>$y</a></li>";
              }
              $next=$page+1;
              if ($next < $numlinks) {
                echo"<li class='page-item'><a class='page-link' href='shop-products-grid.php?categorie=$catGet && start=$next'>Next</a></li>";
              }
              ?>
            </ul>
          </nav>
          <!-- End Pagination -->

          <!-- Divider -->
          <div class="d-lg-none">
            <hr class="my-7 my-sm-11">
          </div>
          <!-- End Divider -->
        </div>
      </div>
    </div>
    <!-- End Products & Filters Section -->

    <!-- Subscribe Section -->
    <div class="bg-light">
      <div class="container space-2">
        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-6">
            <!-- Title -->
            <div class="text-center mb-4">
              <h2 class="h1">Restez au courant</h2>
              <p>Bienvenue sur notre site et notre entreprise.</p>
            </div>
            <!-- End Title -->

            <!-- Subscribe Form -->
            <form class="js-validate js-form-message w-lg-85 mx-lg-auto">
              <label class="sr-only" for="subscribeSrEmail">Email address</label>
              <div class="input-group input-group-pill">
                <input type="email" class="form-control" name="email" id="subscribeSrEmail" placeholder="Email address"
                  aria-label="Email address" aria-describedby="subscribeButton" required
                  data-msg="Please enter a valid email address.">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary px-6" id="subscribeButton">Join</button>
                </div>
              </div>
            </form>
            <!-- End Subscribe Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Subscribe Section -->

    <!-- Clients Section -->
    <div class="container space-2">
      <div class="row justify-content-between text-center">
        <div class="col-4 col-lg-2 mb-5 mb-lg-0">
          <div class="mx-3">
            <img class="max-w-11rem max-w-md-13rem mx-auto" src="assets/css/images/logo.png" alt="Image Description">
          </div>
        </div>
        <div class="col-4 col-lg-2 mb-5 mb-lg-0">
          <div class="mx-3">
            <img class="max-w-11rem max-w-md-13rem mx-auto" src="assets/css/images/FANUC-250x125.png"
              alt="Image Description">
          </div>
        </div>
        <div class="col-4 col-lg-2 mb-5 mb-lg-0">
          <div class="mx-3">
            <img class="max-w-11rem max-w-md-13rem mx-auto" src="assets/css/images/MaxwellTechnologies.jpg"
              alt="Image Description">
          </div>
        </div>
        <div class="col-4 col-lg-2">
          <div class="mx-3">
            <img class="max-w-11rem max-w-md-13rem mx-auto" src="assets/css/images/Schneider-Electric.png"
              alt="Image Description">
          </div>
        </div>
        <div class="col-4 col-lg-2">
          <div class="mx-3">
            <img class="max-w-11rem max-w-md-13rem mx-auto"
              src="assets/css/images/WhatsApp Image 2020-12-31 at 16.45.19.jpeg" alt="Image Description">
          </div>
        </div>
        <div class="col-4 col-lg-2">
          <div class="mx-3">
            <img class="max-w-11rem max-w-md-13rem mx-auto"
              src="assets/css/images/WhatsApp Image 2020-12-31 at 16.49.34.jpeg" alt="Image Description">
          </div>
        </div>
      </div>
    </div>
    <!-- End Clients Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->


  <!-- ========== FOOTER ========== -->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="index.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <img class="pic" src="assets/svg/logo2.png" alt="">
        </a>
        <span class="text-muted">&copy; SB-TECH 2021-2022.</span>
      </div>
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3">
          <a href="" class="text-muted"><i class="fab fa-facebook"></i></a>
        </li>
        <li class="ms-3">
          <a href="" class="text-muted"><i class="fab fa-instagram"></i></a>
        </li>
        <li class="ms-3">
          <a href="" class="text-muted"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="ms-3">
          <a href="page-login.php" class="text-muted">connexion</i></a>
        </li>
      </ul>
    </footer>
  </div>
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


      // INITIALIZATION OF SELECT2
      // =======================================================
      $('.js-custom-select').each(function () {
        var select2 = $.HSCore.components.HSSelect2.init($(this));
      });


      // INITIALIZATION OF ION RANGE SLIDER
      // =======================================================
      $('.js-ion-range-slider').each(function () {
        var ionRangeSlider = $.HSCore.components.HSIonRangeSlider.init($(this));
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

<!-- Mirrored from phpstream.com/front/shop-products-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Aug 2021 17:31:03 GMT -->

</html>