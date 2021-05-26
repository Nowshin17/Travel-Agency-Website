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
 
</head>

<body>
<?php
session_reset(); 
?>

<!-- header -->
<div class="topnav">
    <a class="logo" href="#"><div style="color:#274A5E;"><b>TravelBD<b></div></a>
    <a class="active" href="#">Home</a>
    <a href="visit_place1.php">Place</a>
    <a href="hotel.php">Hotel</a>
    <a href="customer_log.php">Booking</a>
    <a href="customer_log.php">Log In</a>
    <a href="customer_reg.php">Sign Up</a>
    <a href="admin.php">Admin</a>
</div>
<!-- header -->


<!-- background img -->
<div class="container1">
    <img src="Images/slide_2.jpg" height="630" alt="Snow" style="width:100%;">
<!-- text on background img -->
    <div class="centered" style="color: white;">
        <h1>Welcome to <br><b><div style="color:#6eef83;"><div  style="font-size:140%;">Bangladesh </div></div></b></h1>
        <p>TravelBD is multipurpose place, with cheap and great Travel packages.<br>TravelBD is perfect place for you to tavel!
    go to Travel.BD</p>
    </div>
    <!-- text on background img -->
</div>

<!-- background img -->

<marquee><b><div style="color:#6eef83;"><div  style="font-size:140%;">TravelBD You can search places. Enjoy Your Holiday!</div></div> 
</b></marquee>


<!-- titel after img -->
<div style="text-align: center;">
    <h1> <div style="color:#496078;">Our features</div></h1>
    <p><div style="color:#4f4f4f;">We are here for you to discover the beautiful places of </div><b>Bangladesh</b></p>
</div>
<!-- titel after img -->

<!-- info section -->
<div class="row">
    <div class="column_3">
        <div style="text-align: center;">
            <img src="Image/icons8-place-marker-80.png" alt="">
            <h3>Place</h3>
            <p style="color:#4f4f4f;">You can search places. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
        </div>
    </div>
    <div class="column_3">
        <div style="text-align: center;">
            <img src="Image/icons8-hotel-80.png" alt="">
            <h3>Hotel</h3>
            <p style="color:#4f4f4f;">You can book hotels. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.</p>
        </div>
    </div>
    <div class="column_3">
        <div style="text-align: center;">
            <img src="Image/icons8-car-64.png" alt="">
            <h3>Transportation</h3>
            <p style="color:#4f4f4f;">You can book seats. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown.a.</p>
        </div>
    </div>
</div>
<br><br>
<!-- info section -->


<!-- text after info -->
<div class="title" style="text-align: center;">
    <h1 style="color:#496078;">Do You Want to know about Bangladesh?</h1>
    <p><div style="color:#4f4f4f;">Please visit here</div></p>
</div>
<!-- text after info -->


<!-- about bd -->
<div class="row">
    <div class="column_2">
        <div style="text-align: center;">
            <img style="height: 100%; width: 100%;" src="image/must-visit-places-bangladesh.png" alt="image error">
        </div>
    </div>
    <div class="column_2">
        <div style="text-align: center;">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Bangladesh" style="text-decoration: none;"> <h1>Bangladesh</h1> </a><br>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
            <div class="check_text">
            
                <p><p>Lorem Ipsum is simply dummy text of the printinghe 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p></p>
                <img src="assets/images/check.png" alt="">
                <p>Donec id elit non mi porta gravida at eget metus.</p>
            </div>
        </div>
    </div>
</div>
<!-- about bd -->


<!-- middle img -->
<img src="Image/666843.jpg" height="500" alt="Snow" style="width:100%;"> <br><br>         




<!-- img galary -->


<div class="row">
<div class="column_3">
            <a target="_blank" href="visit_place1.php">
             <img  src="images/tour-8.jpg" alt="Mountains" width="100%" height="95%">
            </a>
            <div style="text-align: center;color:#4f4f4f;" ><b>You can search Places</b><br>Lorem Ipsum is simply dummy
             text of the printinghe 1500s, when an unknown printer took a galley of type and scrambled it to </div>>
    </div>

    
    <div class="column_3">
            <a target="_blank" href="hotel.php">
                <img src="images/hotel-3.jpg" alt="Northern Lights" width="100%" height="100%">
            </a>
            <div style="text-align: center;color:#4f4f4f;" ><b>You can view hotels</b><br>Lorem Ipsum is simply dummy
             text of the printinghe 1500s, when an unknown printer took a galley of type and scrambled it to </div>
    </div>

    <div class="column_3">
            <a target="_blank" href="customer_log.php">
                <img src="image/images.jpg" alt="Cinque Terre" width="100%" height="100%">
            </a>
            <div style="text-align: center; color:#4f4f4f;" ><b>You can book a Trip!!</b><br>Lorem Ipsum is simply dummy
             text of the printinghe 1500s, when an unknown printer took a galley of type and scrambled it to </div>
    </div>

</div>
<!-- img galary -->
   

<br><br>

<!-- footet -->

<?php
    include('footer.php');
     ?>

<!-- footer section -->
</body>

</html>
