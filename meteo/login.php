<?php
session_start();
if(isset($_POST['connect'])){
$username=$_POST['username'];
$pass=$_POST['pass'];
include '../db.php';
$query=$conn->prepare("SELECT *FROM user_meteo WHERE username='$username';");
$query->execute();
$results=$query->fetchAll();
if(sizeof($results)!=0){
    $action=$results[0]['action'];
    if ($action=="true") {
    $password=$results[0]['password'];
    if($password==$pass){
        $nom=$results[0]['username'];
        $_SESSION['username']=$nom;
        $_SESSION['stationID']=$results[0]['stationID'];
        $_SESSION['password']=$password;
        header('location:overview.php');  
    }
    else{
        $message="password incorrect !";
    }
}else {
    $nom=$results[0]['username'];
    $_SESSION['username']=$nom;
    header('location:error.php');  
}
}else{
    $message="Username did not exist !!!!";
}
}
else{
    $message="Bienvenue sur votre compte";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="../js/translate.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="head"><a href="../index.php"><img src="images/logo2.png" alt=""></a></div>
            <div class="title"><h1><?php echo $message;?></h1></div>
            <div class="form">
                <form action="" method="post">
                    <input type="text" name="username" placeholder="Entrer votre Nom d'utilisateur...">
                    <input type="password" name="pass" placeholder="Entrer votre Mot de passe...">
                    <input type="submit" name="connect" value="connect">
                </form>
            </div>
        </div>
    </div>
</body>
</html>