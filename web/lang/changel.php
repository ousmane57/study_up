<?php

if(!isset($_SESSION)) session_start();

if(isset($_GET["lg"]) and !empty($_GET['lg'])){
    $link = $_SESSION["LINK_W"];
    $_SESSION['lg']=$_GET['lg'];
    header("location: $link");
}
?>