<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>


<body style="margin:50px;">




    <div class="container ">

        <div class="row">

            <div class="col-sm-3">
                <a href="show_customer.php">
                    <button class="btn custom_btn ">Customer Info
                    </button>
                </a>
            </div>
            <div class="col-sm-3">
                 <a href="add_place.php">
                    <button class="btn custom_btn ">Add Place
                    </button>
                </a>
            </div>
            <div class="col-sm-3">
                 <a href="add_hotel.php">
                    <button class="btn custom_btn ">Add Hotel
                    </button>
                </a>
            </div>
                <div class="col-sm-3">
                 <a href="add_transport.php">
                    <button class="btn custom_btn ">Add Transport
                    </button>
                </a>
            </div>
            
            <div class="col-md-3" style="padding-top:26px; margin-left:450px;" >
               
                <a href="delete_customer.php">
                    <button class="btn custom_btn ">Delete User
                    </button>
                </a>
            </div>

            
        </div>

    </div>

</body>

</html>
