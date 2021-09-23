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
      <meta name="viewport" content="width=device-width, initial-scale=1,
        shrink-to-fit=no">

      <!-- Favicon -->
      <link rel="shortcut icon" href="favicon.ico">

      <!-- Font -->
      <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap"
        rel="stylesheet">
      <script src="https://kit.fontawesome.com/5da19ef311.js"
        crossorigin="anonymous"></script>

      <!-- CSS Implementing Plugins -->
      <link rel="stylesheet" href="assets/css/vendor.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/welcome.css">
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
      <!-- CSS Front Template -->
      <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>

    <body>
      <!-- ========== HEADER ========== -->
      <header id="header" class="header header-box-shadow-on-scroll
        header-abs-top header-bg-transparent header-show-hide"
        data-hs-header-options='{"fixMoment" : 1000,"fixEffect" :"slide"
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
              <button type="button" class="navbar-toggler btn btn-icon btn-sm
                rounded-circle" aria-label="Toggle navigation"
                aria-expanded="false" aria-controls="navBar"
                data-toggle="collapse" data-target="#navBar">
                <span class="navbar-toggler-default">
                  <svg width="14" height="14" viewBox="0 0 18 18"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor"
                      d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z
                      M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"
                      />
                    </svg>
                  </span>
                  <span class="navbar-toggler-toggled">
                    <svg width="14" height="14" viewBox="0 0 18 18"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill="currentColor"
                        d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1
                        C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1
                        c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
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
                          <a id="homeMegaMenu" class="hs-mega-menu-invoker
                            nav-link" href="index.php" aria-haspopup="true"
                            aria-expanded="false">Accueil</a>

                          <!-- Home - Mega Menu -->
                          <div class="hs-mega-menu"aria-labelledby="homeMegaMenu">
                          </div>

                          <!-- End Home - Mega Menu -->
                        </li>
                        <!-- End Home -->

                        <!-- Pages -->
                        <li class="hs-has-sub-menu navbar-nav-item">
                          <a id="pagesMegaMenu" class="hs-mega-menu-invoker
                            nav-link nav-link-toggle"href="categories.php"
                            aria-haspopup="true" aria-expanded="false"
                            aria-labelledby="pagesSubMenu">Produits</a>

                          <!-- Pages - Submenu -->
                          <div id="pagesSubMenu" class="hs-sub-menu
                            dropdown-menu" aria-labelledby="pagesMegaMenu"
                            style="min-width: 230px;">
                            <!-- Contacts -->
                            <?php
                              if (sizeof($results)>0) {
                              for ($i=0; $i <sizeof($results); $i++) {
                                $cat=$results[$i]['nom_cat'];
                                echo"
                              <div class='hs-has-sub-menu'>
                                <a id='navLinkContactsServices'
                                  class='hs-mega-menu-invoker dropdown-item '
                                  href='shop-products-grid.php?categorie=$cat &&
                                  start=0'
                                  aria-haspopup='true' aria-expanded='false'
                                  aria-controls='navSubmenuContactsServices'>
                                  $cat</a>

                                <div id='navSubmenuContactsServices'
                                  class='hs-sub-menu'
                                  aria-labelledby='navLinkContactsServices'
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
                            <a id="blogMegaMenu" class="hs-mega-menu-invoker
                              nav-link"href="brochure.html" aria-haspopup="true"
                              aria-expanded="false"
                              aria-labelledby="blogSubMenu">Brochure</a>

                            <!-- Blog - Submenu -->
                            <div id="blogSubMenu" class="hs-sub-menu"
                              aria-labelledby="blogMegaMenu" style="min-width:
                              230px;">

                              <!-- End Submenu -->
                            </li>
                            <!-- End Blog -->
                            <!-- Blog -->
                            <li class="hs-has-sub-menu navbar-nav-item">
                              <a id="blogMegaMenu" class="hs-mega-menu-invoker
                                nav-link"href="#meteo" aria-haspopup="true"
                                aria-expanded="false"
                                aria-labelledby="blogSubMenu">Météo</a>

                              <!-- Blog - Submenu -->
                              <div id="blogSubMenu" class="hs-sub-menu"
                                aria-labelledby="blogMegaMenu" style="min-width:
                                230px;">

                                <!-- End Submenu -->
                              </li>
                              <!-- End Blog -->


                              <!-- Demos -->
                              <li class="hs-has-mega-menu navbar-nav-item"
                                data-hs-mega-menu-item-options='{"desktop" : {"position"
                                :"right" ,"maxWidth" :"900px"
                                }
                                }'>
                                <a id="demosMegaMenu"
                                  class="hs-mega-menu-invoker nav-link"href="page-contacts-start-up.php"
                                  aria-haspopup="true" aria-expanded="false">Contact</a>
                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu"
                                  aria-labelledby="demosMegaMenu">
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
                <div class="swiper mySwiper swiperSnd">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide swip"><img
                        src="assets/img/robot-with-laptop-computer-mouse.jpg"
                        alt=""></div>
                    <div class="swiper-slide swip"><img
                        src="assets/img/robot-with-laptop-computer-mouse.jpg"
                        alt=""></div>
                    <div class="swiper-slide swip"><img
                        src="assets/img/robot-with-laptop-computer-mouse.jpg"
                        alt=""></div>
                    <div class="swiper-slide swip"><img
                        src="assets/img/robot-with-laptop-computer-mouse.jpg"
                        alt=""></div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
                <!-- Articles Section -->

                <section id="particles-js">
            <div class="our-company" data-aos="fade-up">
                <p class="ourcompany">
                    <span>SB-TECH</span> , la spécialiste dans l'importation et la fourniture de tous matériels industriels conformément aux normes, propose une large gamme de choix de fournitures industrielles. Notre expertise vient de nos connaissances et de notre expérience dans le domaine industriel avec toute sorte de matériel. Nos technico-commerciaux . professionnels et qualifiés, s'engagent à vous fournir des devis et des délais de livraison qui défient tous les concurrents et en utilisant toutes leurs expertises pour répondre à vos besoins.

                </p>

            </div>
            <section id="our-services" class="part">
                <div class="dt-sec-grp con78" data-aos="fade-up">
                    <div class="con-secgRP" style="width: fit-content;">
                        <div class="bg-title">
                            <div class="text">
                                <div class="line-top1 line"></div>
                                NOS  ENGAGMENTS
                                <div class="line-btm2 line"></div>

                            </div>
                        </div>
                    </div>
                    <ul>
                       <ul>
                       <li>
                         <i class="fas fa-fax"></i>
                         <h3>Disponibilié</h3>
                       </li>
                       <li>
                        <i class="fas fa-wrench"></i>
                         <h3>Flexibilité</h3>
                       </li>
                       </ul>
                       <ul>
                       <li>
                        <i class="far fa-comments"></i>
                         <h3>Expertise</h3>
                       </li>
                       <li>
                        <i class="far fa-check-square"></i>
                         <h3>Qualité</h3>
                       </li>
                       </ul>
                    </ul>
                </div>
            </div>
            <div class="pic-side-poster con78" data-aos="fade-right">
                <img src="assets/img//ourengagement.jpg" alt="">
            </div>
        </section>
        <section id="our-engagment" class="part part2">
            <div class="dt-sec-grp con78" data-aos="fade-right">
                <div class="con-secgRP">
                    <div class="bg-title">
                        <div class="text">
                            <div class="line-top1 line" style="margin-top: 2em;"></div>

                            NOS PRODUITS
                            <div class="line-btm2 line"></div>

                        </div>
                    </div>
                </div>
                <ul>
                    <ul>
                        <li>Groupe machine & Robotique</li>
                        <li>Instrumentation & Régulation</li>
                    </ul>
                    <ul>
                        <li>Pièces hydraulique et pneumatique</li>
                        <li>Matériel électrique industriel modulaire</li>
                    </ul>
                </ul>
            </div>

            <div class="pic-side-poster con78" data-aos="fade-right">
                <img src="assets/img//ourservicesE.jpg" alt="">
            </div>
        </section>


        <section id="activite" style="margin-top: 2em;">
            <div class="text" style="font-size: 1.4em !important;">
                Nos services

            </div>
            <div class="row-r" data-aos="fade-down">
                <div class="col-c c1">
                    <div class="front">
                        <img src="assets/img/2.jpeg" alt="">
                        <div class="content">
                            <div class="border-fr"></div>
                            <div class="name">Service de vente</div>
                        </div>
                    </div>
                    <div class="back">
                        <div class="border b1"></div>
                        <div class="name">Service de vente</div>
                        <div class="textP">Nos experts s'assureront du bon choix et que toutes les exigences ont été correctement satisfaites. <br>
                          -- Conseil : notre équipe de conseil vous accompagne dans vos achats.<br>
                          -- Solutions: nous proposons des solutions sur mesure pour rationaliser et automatiser vos processus de commande.<br>
                          -- Offre sur mesure : adaptation au besoin des clients et de leur activité avec des tarifs préférentiels.<br>
                        </div>
                    </div>
                </div>
                <div class="col-c c2">
                    <div class="front">
                        <img src="assets/img/2.jpeg" alt="">
                        <div class="content">
                            <div class="border-fr"></div>
                            <div class="name">Service de maintenance</div>
                        </div>
                    </div>
                    <div class="back">
                        <div class="border b2"></div>
                        <div class="name">Service de maintenance</div>
                        <div class="textP">Avec ce service, nous pouvons inspecter soigneusement vos installations, effectuer toutes les mises à jour nécessaires et nettoyer les composants essiels de vos équipements. Nos techniciens de maintenance consultent aussi la mémoire des erreurs et veillent à ce que tout fonctionne de manière optimale.Nous accomplirons à intervalles réguliers toutes les tâches mentionnées dans votre programme de maintenance et pour cela nous appuyions sur : <br>
                        -- Efficacité: performance de pointe et de rendement maximum. <br>
                        -- Fiabilité: service productif avec une détection intelligente des défauts.
                        </div>
                    </div>
                </div>
                <div class="col-c c3">
                    <div class="front">
                        <img src="assets/img/2.jpeg" alt="">
                        <div class="content">
                            <div class="border-fr"></div>
                            <div class="name">Pourquoi nous sommes le fournisseur idéal:</div>
                        </div>
                    </div>
                    <div class="back">
                        <div class="border b3"></div>
                        <div class="name">Pourquoi nous sommes le fournisseur idéal:</div>
                        <div class="textP">
                          -- Disponibilité de matériels avec des prix concurrentiels. <br>
                          -- Accompagnement du projet de la phase d'étude jusqu'à son terme. <br>
                          -- étude, planification, estimation du budget de telles opérations. <br>
                          -- Assistance professionnelle soutenue par le savoir-faire : autrement dit Des techniciens qualifiés qui ont acquis une vaste expérience sur le terrain. <br>
                          -- Disponibilité à long terme des pièces d'origine et prévisibilité des coûts avec une gestion fiable des pièces détachées. <br>
                          -- Service proactif avec une détection intelligente des défauts et des mises à jour à distance.
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <!--Partners-->
                <section id="partenaire" style="margin-top: 2em;" data-aos="zoom-in-up">
            <div class="text" style="font-size: 1.4em !important;">
                Nos partenaires

            </div>
            <div class="slider">
                <div class="swiper-container">
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
                    <div class="swiper-pagination"></div>

                </div>

            </div>
        </section>
              </section>
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
                  <div class="container">
                    <footer class="d-flex flex-wrap justify-content-between
                      align-items-center py-3 my-4 border-top">
                      <div class="col-md-4 d-flex align-items-center">
                        <a href="index.php" class="mb-3 me-2 mb-md-0 text-muted
                          text-decoration-none lh-1">
                          <img class="pic" src="assets/svg/logo2.png" alt="">
                        </a>
                        <span class="text-muted">&copy; SB-TECH 2021-2022.</span>
                      </div>
                      <ul class="nav col-md-4 justify-content-end list-unstyled
                        d-flex">
                        <li class="ms-3">
                          <a href="" class="text-muted"><i class="fab
                              fa-facebook"></i></a>
                        </li>
                        <li class="ms-3">
                          <a href="" class="text-muted"><i class="fab
                              fa-instagram"></i></a>
                        </li>
                        <li class="ms-3">
                          <a href="" class="text-muted"><i class="fab
                              fa-twitter"></i></a>
                        </li>
                        <li class="ms-3">
                          <a href="page-login.php" class="text-muted">connexion</i></a>
                      </li>
                    </ul>
                  </footer>
                </div>
                <!-- ========== END FOOTER ========== -->



                <!-- Go to Top -->
                <a class="js-go-to go-to position-fixed" href="javascript:;"
                  style="visibility: hidden;" data-hs-go-to-options='{"offsetTop"
                  : 700,"position" : {"init" : {"right" : 15
                  },"show" : {"bottom" : 15
                  },"hide" : {"bottom" : -15
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

                <script src="assets/js/particles.js"></script>
                <script src="assets/js/app.js"></script>
                <script src="assets/js/swiper.js"></script>
                <script src="assets/js/particles.min.js"></script>



                <script>
      $('.hs-mega-menu-invoker').click(function () {
        var sectionTo = $(this).attr('href');
        $('html, body').animate({
          scrollTop: $(sectionTo).offset().top
        }, 1500);
      });
    </script>
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