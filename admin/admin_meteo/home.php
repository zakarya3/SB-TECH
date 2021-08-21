<?php
session_start();
include '../../db.php';
if (!empty($_SESSION['name'])) {
    $nom=$_SESSION['name'];
    $query=$conn->prepare("SELECT * FROM user_meteo;");
    $query->execute();
    $results=$query->fetchAll();
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
    <link rel="stylesheet" href="css/home.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <h2><a href="../../index.php"><img src="images/logo2.png" alt=""></a></h2>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="../../index.php">Accueil</a></li>
                    <li class="active"><a href="">Utilisateurs</a></li>
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
                <table>
                    <tr>
                      <th>ID</th>
                      <th>UserName</th>
                      <th>Password</th>
                      <th>Station</th>
                      <th>StationID</th>
                      <th></th>
                    </tr>
                    <?php
                    if (sizeof($results)>0) {
                        for ($i=0; $i < sizeof($results); $i++) { 
                            $id=$results[$i]['id_user'];
                            $username=$results[$i]['username'];
                            $pass=$results[$i]['password'];
                            $station=$results[$i]['station'];
                            $stationID=$results[$i]['stationID'];
                            $action=$results[$i]['action'];
                            echo"
                    <tr>
                      <td>$id</td>
                      <td>$username</td>
                      <td>$pass</td>
                      <td>$station</td>
                      <td>$stationID</td>
                      <td><input class='t' data-id=$id  name='auto'  type='submit' value='";if ($action=="true") {
                          echo "Bloquer";
                      }else echo "Debloquer"; echo  "'></td>
                    </tr>";
                        }
                    }?>
                  </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
           var tab = document.querySelectorAll(".t");
       tab.forEach(element => {
           element.onclick =()=>{
             
            var id = element.getAttribute("data-id");
               if (element.getAttribute("value")=="Bloquer") {
                window.location.assign(`message.php?id_user=${id}`)
               }else{
                fetch(`message.php?userID=${id}&Debloquer==true`,{method: "get"})
                .then(()=>{
                    alert("bien debloquer");
                    window.location.assign(`home.php`)
                })
               .catch(err => console.log(err))
               }
           }
       });
    </script>
</body>

</html>