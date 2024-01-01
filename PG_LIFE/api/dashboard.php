<?php 
session_start();
require "../includes/database_connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | PG Life</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,0600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
</head>
<body>
<div class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="../php/index.php">
            <img src="../img/favicon.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">
                <div class='nav-name'>
                    Hi, Tarun
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="../api/dashboard.php">
                        <i class="fas fa-user"></i>Dashboard
                    </a>
                </li>
                <div class="nav-vl"></div>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">
                        <i class="fas fa-sign-out-alt"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div id="loading">
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="../index.php">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
        <a href="../api/dashboard.php">Dashboard</a>
        </li>
    </ol>
</nav>
<div class="my-profile page-container">
    <h1>My Profile</h1>
    <div class="row">
        <div class="col-md-3 profile-img-container">
            <i class="fas fa-user profile-img"></i>
        </div>
        <div class="col-md-9">
            <div class="row no-gutters justify-content-between align-items-end">
                <div class="profile">
                    <div class="name">Hii, Tarunkumar</div>
                    <div class="email">mr.tarun0402@gmail.com</div>
                    <div class="phone">+91 9849267182</div>
                    <div class="college">BITS-VIZAG</div>
                </div>
                <div class="edit">
                    <div class="edit-profile">Edit Profile</div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
<?php
   include "../api/footer01.php";
   ?>
</body>
</html>