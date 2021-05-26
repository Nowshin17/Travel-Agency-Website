<!doctype html>
<html lang="en">
<?php
    include('connection.php');
     ?>

<head>
        <meta charset="utf-8">
        <title>travelBD</title>
        <link rel="icon" href="Image/logo.png">
        <link rel="stylesheet" href="nav_css.css">
        <style>
           body
           {
                background: #eee;
                font-family: 'Lato', sans-serif;
            }
        </style>
 
</head>


<body>

<!-- header -->
<div class="topnav">
    <a class="logo" href="#"><div style="color:#274A5E;"><b>TravelBD<b></div></a>
    <a class="active" href="#">Home</a>
    <a href="show_customer.php">Show customer Info</a>
    <a href="add_place.php">Add Place</a>
    <a href="add_hotel.php">Add Hotel</a>
    <a href="add_transport.php">Add transportp</a>
    <a href="delete_customer.php">Delete User</a>
    <a href="admin_show_booking.php">booking details</a>
    <a href="log_out.php">Logout</a>
</div>
<!-- header -->


<!-- background img -->
<div class="container">
    <img src="Images/blog-2.jpg" height="780" alt="Snow" style="width:100%;">

<!-- text on background img -->
    <div class="centered" style="color: white;">
        <h1>Hello<br><b><div style="color:#E97F71;"><div  style="font-size:140%;">Admin</div></div></b></h1>
        <p>TravelBD is multipurpose place, with cheap and great Travel packages.<br>TravelBD is perfect place for you to tavel!</p>
    </div>
<!-- text on background img -->
</div>

<!-- background img -->

<br><br>


<!-- titel after img -->
<div class="title" style="text-align: center;">
    <h1>ADMIN PANNEL</h1>
    <p><div style="color:#4f4f4f;">Please visit here</div></p>
</div>
<!-- titel after img -->



<!-- section 1 -->
<div class="row">
    <div class="column_2">
        <div style="text-align: center;">
         <img  style="height: 100%; width: 100%;border-radius: 100%;" src="image/man-wearing-white-shirt-brown-shorts-and-green-backpack-672358.jpg" alt="image error">
        </div>
    </div>
    <div class="column_2">
        <div style="text-align: center;">
             <h1>Instructions</h1> <br>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
            <div class="check_text">
            
                <p><p>Lorem Ipsum is simply dummy text of the printinghe 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p></p>
                <img src="assets/images/check.png" alt="">
                <p>Donec id elit non mi porta gravida at eget metus.</p>
            </div>
        </div>
    </div>
</div>
<!-- section 1 -->




 <br>


 
</body>

</html>
