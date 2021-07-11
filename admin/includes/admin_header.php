<?php ob_start();?>
<?php include "../includes/database.php"?>
<?php session_start();?>
<?php 
if(isset($_SESSION["role_utilisateur"])){
    if($_SESSION["role_utilisateur"] !== "admin"){
        header("Location: ../accueil.php");
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/7c862473bf.js" crossorigin="anonymous"></script>
</head>

<body>