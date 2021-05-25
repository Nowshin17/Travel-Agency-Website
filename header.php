<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>

<head>
    <title>Header</title>
    <link rel="stylesheet" href="nav_css.css">


<style>

        *{
        margin: 0%;
        }
        .topnav {
            background-color:#333;
            overflow: hidden;
            }

        .topnav a {
            float: left;
            color:  #f2f2f2 ;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        body {
            
            font-family: 'Lato', sans-serif;
        }
        .topnav a:hover {
            background-color: gray;
            color: black;
        }
        
        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
        logo{
            padding-left:20px;
        }

      

    </style>
</head>

<body>

<!-- header -->
<div class="topnav">
    <a class="logo" href="#"><div style="color:#04AA6D;">TravelBD</div></a>
    <a class="active" href="#">Home</a>
    <a href="visit_place1.php">Place</a>
    <a href="hotel.php">Hotel</a>
    <a href="customer_log.php">Booking</a>
    <a href="customer_log.php">Log In</a>
    <a href="customer_reg.php">Sign Up</a>
    <a href="admin.php">Admin</a>
</div>
<!-- header -->

</body>