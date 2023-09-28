<?php
session_start();
require "../php/includes/database_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Welcome||PG Life</title>
</head>
<body>
   <?php
   include "includes\header.php";
   ?>

<div class="background">
    <h2>Happiness per Square Foot</h2>
    <br>
    <form id="search-form" action="property_list.php" method="GET">
        <div class="input-group city-search">
            <input type="text" class="input-city" id="city" name="city" placeholder="Enter the city name here">
            <div class="input-group-append">
                <button type="search" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            </div>
    </form>
</div>
<div class="page-container">
    <h1 class="city-heading">Major Cities</h1>
    <div class="row">
        <div class="city-card-container col-md">
            <a href="property_list.php?city=Delhi">
                <div class="city-card">
                    <img src="img/delhi.png" class="city-img" alt="delhi">
                </div>
            </a>
        </div>
        <div class="city-card-container col-md">
            <a href="property_list.php?city=Mumbai">
                <div class="city-card">
                    <img src="img/mumbai.png" class="city-img" alt="mumbai">
                </div>
            </a>
        </div>
        <div class="city-card-container col-md">
            <a href="property_list.php?city=Bangalore">
                <div class="city-card">
                    <img src="img/bangalore.png" class="city-img" alt="bangalore">
                </div>
            </a>
        </div>
        <div class="city-card-container col-md">
            <a href="property_list.php?city=Chennai">
                <div class="city-card">
                    <img src="img/chennai.png" class="city-img" alt="chennai">
                </div>
            </a>
        </div>
    </div>
</div>


<?php
   include "includes/signup_modal.php";
   include "includes/login_modal.php";
   include "includes/footer.php";
   ?>
<script src="js/common.js" type="text/js">  
</body>
</html>
