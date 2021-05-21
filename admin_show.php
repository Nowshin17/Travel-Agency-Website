<!DOCTYPE html>
<html>
<?php
    include('connection.php');
   
     ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Admin pannel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>


<body>
<!--Header Area Start-->
<header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">
                    <h3>TravelBD</h3>
                </a>
               
               

                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="show_customer.php">Show customer Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_place.php">Add Place</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_hotel.php">Add Hotel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_transport.php">Add transportp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="delete_customer.php">Delete User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_place.php">booking details</a>
                        </li>

                       
                        <li class="nav-item">
                            <a class="nav-link get_started" href="log_out.php">Logout</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--Header Area End-->




    <!--Banner Area Start-->
    <section class="banner d-flex align-items-center" style="background-image: url('Images/blog-2.jpg');  background-position-y: -100px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner_content">
                        <h1>Welcome to <br><b><div style="color:#E16860;"><div  style="font-size:140%;">Admin pannel </div></div></b></h1>
                        <p>TravelBD is multipurpose place, with cheap and great Travel packages.<br>TravelBD is perfect place for you to tavel!</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner Area End-->
<br><br>

<center>
 <h1>Admin pannel</h1>

        Hello, <?php
            echo $admin_name= "ankita" ;
            
            ?>



</center>
 <br>


 
    <div class="a ">

          <!--Perfect Template Area Start-->
    <section class="perfect">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title">
                        <h1>Do You Want to know about Bangladesh?</h1>
                        <p>Please visit here</p>
                    </div>
                </div>
                
                <div class="col-sm-6">
                <a class="navbar-brand" href="www.bangladesh.com"> <h1>Bangladesh</h1> </a>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                    <div class="check_text">
                    
                        <p><p>Lorem Ipsum is simply dummy text of the printinghe 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p></p>
                        <img src="assets/images/check.png" alt="">
                        <p>Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
            </div>
        </div>



        
    </section>

    </div>

</body>

</html>
