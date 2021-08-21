<?php
session_start();
if(isset($_POST['login'])){
  $username=$_POST['nom_admin'];
  $pass=$_POST['password'];
  include('db.php');
  $query=$conn->prepare("SELECT * FROM `admin` WHERE nom_admin='$username';");
  $query->execute();
  $results=$query->fetchAll();
  if(sizeof($results)!=0){
    $password=$results[0]['password'];
    if($password==$pass){
        $nom=$results[0]['nom_admin'];
        $_SESSION['nom']=$nom;
        header('location:admin/accueil.php?admin='.$nom);
    }
    else{
        $message="Mot de passe incorrect!";
    }
}else{
    $message="L'Email n'existait pas !!!!";
}
}
else{
    $message="Connectez-vous pour gérer votre site Web.";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>SB-TECH | Page de connexion</title>

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

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-bg-transparent header-abs-top">
    <div class="header-section">
      <div id="logoAndNav" class="container-fluid">
        <!-- Nav -->
        <nav class="navbar navbar-expand header-navbar">
          <!-- White Logo -->
          <a class="d-none d-lg-flex navbar-brand header-navbar-brand" href="index.php" aria-label="Front">
            <img src="assets/svg/logo2.png" alt="Logo">
          </a>
          <!-- End White Logo -->

          <!-- Default Logo -->
          <a class="d-flex d-lg-none navbar-brand header-navbar-brand header-navbar-brand-collapsed" href="index.php" aria-label="Front">
            <img src="assets/svg/logo2.png" alt="Logo">
          </a>
          <!-- End Default Logo -->

          <!-- Button -->
          <div class="ml-auto">
            <a class="btn btn-sm btn-link text-body" href="admin/admin_meteo/connect.php">
              <i class="fas fa-angle-left fa-sm mr-1"></i> Météo
            </a>
          </div>
          <!-- End Button -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Form -->
    <div class="d-flex align-items-center position-relative vh-lg-100">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
            <!-- Form -->
              <!-- Title -->
              <div class="mb-5 mb-md-7">
                <h1 class="h2">Content de te revoir</h1>
                <p>               
                  <?php
                  echo $message;
                  ?>
                </p>
              </div>
              <!-- End Title -->

              <!-- Form Group -->
             <form action="" method="post">
             <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Nom de l'admin</label>
                <input type="text" class="form-control" name="nom_admin" id="signinSrEmail" tabindex="1" placeholder="Votre nome" aria-label="Email address" required
                       data-msg="Please enter a valid email address.">
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signinSrPassword" tabindex="0">
                  <span class="d-flex justify-content-between align-items-center">
                    Mot de passe
                    <a class="link-underline text-capitalize font-weight-normal" href="page-recover-account.php">Forgot Password?</a>
                  </span>
                </label>
                <input type="password" class="form-control" name="password" id="signinSrPassword" tabindex="2" placeholder="********" aria-label="********" required
                       data-msg="Your password is invalid. Please try again.">
              </div>
              <!-- End Form Group -->

              <!-- Button -->
              <div class="row align-items-center mb-5">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <span class="font-size-1 text-muted"></span>
                </div>

                <div class="col-sm-6 text-sm-right">
                  <Button type="submit" name="login" class="btn btn-primary transition-3d-hover">Connexion</Button>
                </div>
              </div>
             </form>
              <!-- End Button -->
            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN ========== -->


  <!-- JS Implementing Plugins -->

</body>

<!-- Mirrored from phpstream.com/front/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Aug 2021 17:34:08 GMT -->
</html>