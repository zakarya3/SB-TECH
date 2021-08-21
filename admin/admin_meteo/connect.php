<?php
session_start();
if(isset($_POST['connect'])){
$email=$_POST['email'];
$pass=$_POST['pass'];
include '../../db.php';
$query=$conn->prepare("SELECT *FROM admin_meteo WHERE email='$email';");
$query->execute();
$results=$query->fetchAll();
if(sizeof($results)!=0){
    $password=$results[0]['password'];
    if($password==$pass){
        $nom=$results[0]['name'];
        $_SESSION['name']=$nom;
        header('location:home.php');  
    }
    else{
        $message="password incorretc !";
    }
}else{
    $message="Email did not exist !!!!";
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
    <link rel="stylesheet" href="css/connect.css">
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="../../js/translate.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="head"><a href="../../index.php"><img src="images/logo2.png" alt=""></a></div>
            <div class="title"><h1><?php echo $message;?></h1></div>
            <div class="form">
                <form action="" method="post">
                    <input type="email" name="email" placeholder="Entrer votre Email...">
                    <input type="password" name="pass" placeholder="Entrer votre Mot de...">
                    <input type="submit" name="connect" value="connect">
                </form>
            </div>
        </div>
        <div class="right">
            <div class="image"><img src="images/1.jpg" alt=""></div>
        </div>
    </div>
</body>
</html>