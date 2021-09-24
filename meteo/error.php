<?php
session_start();
$username=$_SESSION['username'];
include '../db.php';
$query=$conn->prepare("SELECT message FROM msg WHERE user='$username' order by id desc limit 1;");
$query->execute();
$res=$query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5da19ef311.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/error.css">
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <script src="../js/translate.js"></script>
    <title>Document</title>
</head>
<body>
    <main>
        <div class="msg">
            <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>
            <div class="title">Un message pour vous!!</div>
            <div class="message">
            <?php echo $res[0]['message'];?>
        </div>
            <div class="link">
                <a href="login.php">back</a>
            </div>
        </div>
    </main>
    <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>