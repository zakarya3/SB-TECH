<?php
if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    header('location:login.php'); 
}else header('location:overview.php'); 