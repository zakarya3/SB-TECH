<?php
session_start();
$admin=$_SESSION['nom'];
include('../db.php');
if (!empty($admin)) {
$query=$conn->prepare("SELECT * FROM `product`;");
$query->execute();
$results=$query->fetchAll();


$query=$conn->prepare("SELECT * FROM `categorie`;");
$query->execute();
$resultsC=$query->fetchAll();


$query1=$conn->prepare("SELECT COUNT(id_prd) FROM product;");
$query1->execute();
$res=$query1->fetchAll();



if (isset($_POST['ajouter'])) {
    $nom=$_POST['proName'];
    $cat=$_POST['proCat'];
    $desc=$_POST['proDesc'];
    $file1=$_FILES['proPic1']['name'];
    $file2=$_FILES['proPic2']['name'];
    if(isset($_FILES['proPic1']) && isset($_FILES['proPic2'])){
        $buffer = basename($_FILES["proPic1"]["name"]);
            $tr = "fichiers/" . $buffer;
            move_uploaded_file($_FILES["proPic1"]["tmp_name"], $tr);
           
            $buffer1 = basename($_FILES["proPic2"]["name"]);
            $tr1 = "fichiers/" . $buffer1;
            move_uploaded_file($_FILES["proPic2"]["tmp_name"], $tr1);

            $query=$conn->prepare("INSERT INTO `product`(`nom_prd`, `categorie`, `details`, `image1`, `image2`) VALUES  ('$nom','$cat','$desc','$file1','$file2');");
            $query->execute();  
}
}


if (isset($_POST['supprimer'])) {
    $nom_prd=$_POST['nom_prd'];
    $query=$conn->prepare("DELETE FROM `product` WHERE nom_prd='$nom_prd';");
    $query->execute();
}
}else {
    header('location:../page-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/categorie.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>produits</title>
</head>

<body>

    <nav>
        <header>
            <div class="logo">
                <img src="../assets/svg/logo2.png" alt="">
            </div>
            <div class="ico">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                    <g>
                        <path
                            d="M884.8,809.7c-4.6,13.9-9.2,27.7-16.2,39.3c0,2.3,37,46.2,16.2,69.3l-11.6,11.6c-16.2,16.2-60.1-9.2-69.3-16.2c-13.9,6.9-27.7,13.9-41.6,16.2h2.3c0,0-6.9,60.1-39.3,60.1h-11.6c-25.4,0-39.3-50.8-41.6-62.4c-13.9-4.6-27.7-9.2-41.6-18.5l2.3,2.3c0,0-48.5,37-71.7,13.9L552,916c-18.5-18.5,11.6-62.4,16.2-71.7c-6.9-11.6-11.6-25.4-16.2-37c-9.2-2.3-62.4-16.2-62.4-41.6v-11.6c0-27.7,48.5-37,60.1-39.3c4.6-13.9,9.2-25.4,16.2-39.3c-4.6-6.9-34.7-53.2-16.2-71.7l11.6-9.2c20.8-20.8,60.1,9.2,71.7,16.2c11.6-6.9,25.4-11.6,39.3-16.2c2.3-11.6,16.2-60.1,41.6-60.1h11.6c27.7,0,37,46.2,39.3,60.1c13.9,4.6,27.7,9.2,39.3,16.2c11.6-6.9,53.2-32.4,69.3-16.2l9.2,11.6c20.8,20.8-6.9,60.1-16.2,69.3c6.9,11.6,11.6,25.4,16.2,39.3c4.6,0,60.1,9.2,60.1,39.3v11.6C944.9,793.5,898.7,807.4,884.8,809.7z M718.4,638.7c-69.3,0-127.1,57.8-127.1,127.1c0,69.3,57.8,127.1,127.1,127.1s127.1-57.8,127.1-127.1C845.5,696.5,790,638.7,718.4,638.7z M718.4,851.3c-46.2,0-85.5-37-85.5-85.5c0-46.2,37-85.5,85.5-85.5c46.2,0,85.5,37,85.5,85.5C803.9,812,764.6,851.3,718.4,851.3z M718.4,721.9c-23.1,0-41.6,18.5-41.6,41.6c0,23.1,18.5,41.6,41.6,41.6c23.1,0,41.6-18.5,41.6-41.6C762.3,742.7,741.5,721.9,718.4,721.9z M669.8,553.2c-18.5,4.6-34.7,11.6-50.9,20.8c-11.6-9.2-46.2-25.4-71.7,0l-13.9,11.6c-23.1,23.1-4.6,62.4,2.3,74c-9.2,13.9-13.9,30-18.5,46.2l-6.9,4.6c-16.2,2.3-43.9,13.9-50.8,37l-46.2,32.4V428.3L723,229.6v265.8C690.6,500,674.5,539.3,669.8,553.2z M78.1,185.7L387.9,10l309.7,175.7L387.9,384.4L78.1,185.7z M364.7,782L57.3,562.4V229.6l307.4,198.8V782z" />
                    </g>
                </svg>
            </div>
        </header>
        <div class="navs">

            <div class="nav-link">
                <a href="accueil.php">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <polygon
                                    points="256,152.96 79.894,288.469 79.894,470.018 221.401,470.018 221.401,336.973 296.576,336.973 296.576,470.018 432.107,470.018 432.107,288.469 		">
                                </polygon>
                            </g>
                        </g>
                        <g>
                            <g>
                                <polygon
                                    points="439.482,183.132 439.482,90.307 365.316,90.307 365.316,126.077 256,41.982 0,238.919 35.339,284.855 256,115.062 476.662,284.856 512,238.92 		">
                                </polygon>
                            </g>
                        </g>
                    </svg>
                    <span>
                        Acceuil
                    </span>
                </a>
            </div>
            <div class="nav-link <%= Categories %>">
                <a href="categories.php">
                    <svg class="s19" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512"
                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <style type="text/css">
                            .st0 {
                                display: none;
                                fill: #FEFEFE;
                            }
                        </style>
                        <g id="Layer_1" />
                        <g id="Layer_2">
                            <g>
                                <path class="st0"
                                    d="M512.4,512.4c-170.7,0-341.3,0-512,0c0-170.7,0-341.3,0-512c170.7,0,341.3,0,512,0    C512.4,171.1,512.4,341.8,512.4,512.4z" />
                                <path
                                    d="M256.1,251c-4.1-0.2-8.6-1-12.9-3c-44.3-20.3-88.6-40.4-132.9-60.7c-5.4-2.4-10.8-4.8-16-7.5c-1.3-0.7-2.5-1.4-3.7-2.2    c-5.1-3.5-6.4-8.6-5.6-14.4c0.3-2.6,2-4.5,3.9-6.2c1.6-1.4,3.5-2.5,5.5-3.3c4.9-1.7,9.5-4.1,14.2-6.2    c45.8-21,91.6-42.1,137.4-63.2c7.1-3.3,14.4-3.3,21.5,0c48.8,22.4,97.7,44.9,146.5,67.4c1.2,0.6,2.5,1.1,3.7,1.5    c2.9,1,5.6,2.5,7.8,4.7c2.3,2.3,3.4,5.2,3.2,8.5c-0.3,5.4-2.6,9.5-7.3,12.2c-2.9,1.7-5.9,3.1-8.9,4.5    c-47.3,21.6-94.7,43.2-142,64.9C265.7,250,260.8,250.9,256.1,251z" />
                                <path
                                    d="M135.6,227.3c3.3-0.1,6.4,0.7,9.4,2c16.2,7.3,32.4,14.5,48.6,21.8c19,8.6,38.1,17.2,57.1,25.8c1.2,0.6,2.4,1.1,3.6,1.8    c1.6,0.9,3.2,0.8,4.9,0c36-16.5,72.2-32.7,108.3-48.9c4.1-1.8,8.3-2.8,12.8-2.4c1.6,0.2,3.1,0.5,4.5,1.2    c11.5,5.4,22.9,11,34.6,16.1c8.1,3.5,9.4,10.5,7.1,17.4c-1.4,4.1-4.2,7-8.1,8.8c-49.1,22.3-98.3,44.6-147.4,66.9    c-1.9,0.9-3.7,1.8-5.6,2.5c-5.6,2.3-11.4,2.5-17,0c-51.1-23.1-102.2-46.3-153.2-69.6c-5.7-2.6-8.5-7.3-8.9-13.5    c-0.1-1.5-0.1-3,0.2-4.5c0.9-3.6,3.2-6.1,6.5-7.7c7.6-3.5,15.2-7.1,22.8-10.7c4-1.9,8-3.6,11.9-5.6    C130.2,227.7,132.9,227.2,135.6,227.3z" />
                                <path
                                    d="M135.6,316.9c3.3-0.1,6.4,0.7,9.5,2.1c17,7.6,34.1,15.2,51.1,22.9c18.3,8.2,36.6,16.5,54.9,24.8c1,0.5,2,1,3,1.5    c1.7,0.9,3.3,0.9,5.1,0.1c30.1-13.9,60.4-27.4,90.6-41c6.3-2.8,12.6-5.6,18.9-8.4c3.2-1.4,6.5-2.1,9.9-2c2.4,0.1,4.7,0.6,7,1.7    c11.3,5.4,22.6,10.6,33.9,15.9c0.7,0.3,1.4,0.6,2.1,1c3.6,2,5.5,5.1,5.7,9.2c0.4,8-3.8,13.5-9.6,16.1    c-50.8,23-101.6,46.1-152.5,69.2c-5.7,2.6-11.6,2.6-17.4,0c-50.8-23-101.6-46.2-152.5-69.2c-5.8-2.6-10.5-8.6-9.3-17.4    c0.5-4,3-6.7,6.6-8.4c6.8-3.2,13.5-6.3,20.3-9.5c4.9-2.3,9.8-4.5,14.6-6.9C130.2,317.4,132.8,316.9,135.6,316.9z" />
                            </g>
                        </g>
                    </svg>
                    <span>
                        Categories
                    </span>
                </a>
            </div>
            <div class="nav-link <%= produits %>">
                <a href="produit.php">
                    <svg enable-background="new 0 0 48 48" id="Layer_4" version="1.1" viewBox="0 0 48 48"
                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <polygon points="26.068,24.846 26.068,47.987 45.285,38.04 45.285,14.898  " />
                            <polygon points="2.715,36.078 21.872,47.987 21.872,24.71 2.715,13.069  " />
                            <path
                                d="M23.497,0.013L4.89,9.571c0.04-0.054,19.08,12.026,19.08,12.026L43.188,11.38L23.497,0.013z" />
                        </g>
                    </svg>
                    <span>
                        Produits
                    </span>
                </a>
            </div>
            <div class="nav-link <%= Partenaires %>">
                <a href="partenaire.php">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000"
                        xml:space="preserve">
                        <g>
                            <path
                                d="M974.2,29.9c-5.5-15.4-22.9-23.6-38.8-18.2c-15.9,5.3-24.3,22.2-18.8,37.7c46.9,130.8-46.3,228.5-117.3,280.9l-28.8-39.9c-9.6-13.3-31.2-24.5-48-24.7l-161.1,0.7c-16.7-0.2-41.7,7.2-55.4,16.6L31.7,605.7c-23,15.6-28.6,46.4-12.5,68.7l215.7,299.3c16.1,22.3,41.9,19.6,64.9,4l474.5-322.8c13.7-9.4,29.4-29.6,35-45l50.4-154.2c5.5-15.4,2.2-38.9-7.5-52.3l-17.5-24.3C930.2,308.4,1029.2,183.1,974.2,29.9z M753.5,488.3c-36.8,25-87.5,16.3-113.2-19.4c-25.8-35.7-16.9-85,20-110c29.2-19.8,67.1-18.4,94.4,0.9c-13.7,8-23.2,12.6-24.9,13.5c-15.2,7-21.8,24.6-14.6,39.4c5.2,10.7,16.2,17,27.6,17c4.4,0,8.8-0.9,13-2.8c9.8-4.5,20.3-9.9,31.3-16.2C791.9,439.7,780,470.3,753.5,488.3z" />
                        </g>
                    </svg>
                    <span>Partenaires</span>
                </a>
            </div>
            <div class="nav-link ">
                <a id="com" href="commande.php">

                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M496.327,127.091l-15.673,9.613L281.83,258.623c-7.983,4.859-16.917,7.293-25.84,7.293s-17.826-2.424-25.778-7.262
                                l-0.136-0.084L31.347,134.771l-15.673-9.759L0,115.242v302.717h512V117.488L496.327,127.091z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M25.245,94.041l25.161,15.673l25.161,15.673l171.008,106.527c5.841,3.521,13.082,3.511,18.913-0.042l173.652-106.486
                                l25.558-15.673l25.558-15.673H25.245z" />
                            </g>
                        </g>

                    </svg>
                    <span>commandes</span>
                </a>
            </div>




        </div>
    </nav>
    <main>

        <header>
            <div class="iconMain"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                        <g>
                            <polygon
                                points="256,152.96 79.894,288.469 79.894,470.018 221.401,470.018 221.401,336.973 296.576,336.973 296.576,470.018 432.107,470.018 432.107,288.469 		">
                            </polygon>
                        </g>
                    </g>
                    <g>
                        <g>
                            <polygon
                                points="439.482,183.132 439.482,90.307 365.316,90.307 365.316,126.077 256,41.982 0,238.919 35.339,284.855 256,115.062 476.662,284.856 512,238.92 		">
                            </polygon>
                        </g>
                    </g>
                </svg> </div>
            <div class="navs-ng">
                <ul>
                    <li>
                        <div class="icon"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 258.75 258.75"
                                style="enable-background:new 0 0 258.75 258.75;" xml:space="preserve">
                                <g>
                                    <circle cx="129.375" cy="60" r="60"></circle>
                                    <path
                                        d="M129.375,150c-60.061,0-108.75,48.689-108.75,108.75h217.5C238.125,198.689,189.436,150,129.375,150z">
                                    </path>
                                </g>
                            </svg> </div> SB-TECH
                    </li>
                    <li class="backend"> <a href="../index.php">Acceuil SiteWeb</a> </li>
                    <li> <a href="disconn.php">Se deconnecter</a> </li>

                </ul>
            </div>
        </header>

            <section id="anal">
                <div class="container-dashboard">
                    <div class="con-7">
                        <div class="card-ov">
                            <div class="icon">
                                <svg class="s10" enable-background="new 0 0 48 48" id="Layer_4" version="1.1"
                                    viewBox="0 0 48 48" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g>
                                        <polygon points="26.068,24.846 26.068,47.987 45.285,38.04 45.285,14.898  ">
                                        </polygon>
                                        <polygon points="2.715,36.078 21.872,47.987 21.872,24.71 2.715,13.069  ">
                                        </polygon>
                                        <path
                                            d="M23.497,0.013L4.89,9.571c0.04-0.054,19.08,12.026,19.08,12.026L43.188,11.38L23.497,0.013z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="number" id="number"><?php echo $res[0]['COUNT(id_prd)'];?></div>
                            <div class="total">Totale produits</div>
                        </div>
                    </div>
                    <div class="con-7">
                        <div class="card-desc-ui">
                            <div class="top-sec">
                                <div class="text">produits</div>
                                <div class="icon">
                                    <svg class="s10" enable-background="new 0 0 48 48" id="Layer_4" version="1.1"
                                        viewBox="0 0 48 48" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g>
                                            <polygon points="26.068,24.846 26.068,47.987 45.285,38.04 45.285,14.898  ">
                                            </polygon>
                                            <polygon points="2.715,36.078 21.872,47.987 21.872,24.71 2.715,13.069  ">
                                            </polygon>
                                            <path
                                                d="M23.497,0.013L4.89,9.571c0.04-0.054,19.08,12.026,19.08,12.026L43.188,11.38L23.497,0.013z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <ul id="productsIN">
                            <?php
                          if (sizeof($results)>0) {
                            for ($i=0; $i <sizeof($results) ; $i++) { 
                              $prd=$results[$i]['nom_prd'];
                              echo"<li>$prd</li>";
                            }
                          }?>
                            </ul>
                        </div>
                    </div>


                </div>
            </section>
            <section id="Add-cat">
                <div class="title">Ajouter un Produit</div>
                <form action method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="proName">Nom de produit</label>
                        <input required type="text" placeholder=" Entrer le nom du produit ici " id="proName"
                            name="proName" value="">
                    </div>
                    <div>
                        <label for="proCat">Categorie de produit</label>
                        <select required name="proCat" id="proCat">
                            <option value="-1" hidden>sélectionner la catégorie du produit ici</option>
                            <?php foreach($resultsC as $output){?>
                            <option><?php echo $output['nom_cat'];?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div>
                        <label for="proDesc">Description de produit</label>
                        <textarea required type="text" placeholder=" Entrer la description du  produit ici "
                            id="proDesc" name="proDesc"></textarea>
                    </div>
                    <div>
                        <label for="prodPic">Photos de produit</label>
                        <input required style="margin-top: 1em;" type="file" name="proPic1">
                        <input required style="margin-top: 1em;" type="file" name="proPic2">
                    </div>

                    <button type="submit" name="ajouter">Ajouter</button>
                </form>
            </section>
            <section id="Add-cat">
                <div class="title">Supprimer un produit</div>
                <form action method="POST">
                    <div>
                        <label for="proId">Nom de produit</label>
                        <input required type="text" placeholder=" Entrer nom de produit  ici " id="proId" name="nom_prd"
                            value="">
                    </div>

                    <button type="submit" name="supprimer">Supprimer</button>
                </form>
            </section>
    </main>

    <script src="js/prd.js"></script>


</body>

</html>