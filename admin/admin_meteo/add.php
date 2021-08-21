<?php
session_start();
include '../../db.php';
if (!empty($_SESSION['name'])) {
    $nom=$_SESSION['name'];
    if (isset($_POST['add'])) {
        $username=$_POST['username'];
        $pass=$_POST['pass'];
        $station=$_POST['station'];
        $stationID=$_POST['stationID'];
        $query=$conn->prepare("INSERT INTO user_meteo(username, password, station, stationID) VALUES ('$username','$pass','$station','$stationID');");
        $query->execute();
        echo"<script> alert('bien ajouter!!');</script>";
    }
}else {
    header('location:connect.php'); 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/5da19ef311.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="../js/translate.js"></script>
    <link rel="stylesheet" href="css/user.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
            <h2><a href="../../index.php"><img src="images/logo2.png" alt=""></a></h2>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="../../index.php">Accueil</a></li>
                    <li class="active"><a href="home.php">Utilisateurs</a></li>
                </ul>
            </div>
            <div class="table">
                <div class="icons">
                    <ul>
                        <li><a href="add.php"><i class="fas fa-plus-circle"></i></a></li>
                        <li><a href="update.php"><i class="fas fa-pen"></i></a></li>
                        <li><a href="delete.php"><i class="fas fa-trash"></i></a></li>
                        <li><a href="disconnected.php"><i class="fas fa-sign-out-alt"></i></a></li>
                    </ul>
                </div>
                <div class="form">
                    <div class="title">Ajouter un utilisateur</div>
                    <form action="" method="POST">
                            <div class="info1">
                                <div> 
                                    <label for="">Username</label>
                                    <input type="text" name="username" id="">
                                </div>
                                <div>
                                    <label for="">Password</label>
                                    <input type="password" name="pass" id="">
                                </div>
                            </div>
                            <div class="info2">
                                <div>
                                    <label for="">Station</label>
                                    <input type="text" name="station" id="">
                                </div>
                                <div>
                                    <label for="">StationID</label>
                                    <input type="text" name="stationID" id="">
                                </div>
                            </div>
                            <div class="btn">
                                <input name="add" type="submit" value="Ajouter">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>