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


<body style="margin:50px;">


 <h1>Admin pannel</h1>

        Hello, <?php
            echo $admin_name= "ankita" ;
            
            ?>


 <br>


 
    <div class="a ">

        <div class="row">

        <div class="col-sm-3">
                 <a href="show_customer.php">
                    <button class="btn custom_btn ">Show customer info
                    </button>
                </a>
            </div>

            </div>
            <div class="col-sm-3">
                 <a href="add_place.php">
                    <button class="btn custom_btn ">Add Place
                    </button>
                </a>
            </div>
            
            <div class="col-md-3">
                 <a href="add_hotel.php">
                    <button class="btn custom_btn ">Add Hotel
                    </button>
                </a>
          
            </div>
           
            
           
            <div class="col-md-3" style="padding-top:100px; margin-left:738px;" >
    
               <a href="delete_customer.php">
                   <button class="btn custom_btn ">Delete User
                   </button>
               </a>
           </div>


           </div>
                <div class="col-md-3" style="padding-top:100px; margin-left:737px;">
                 <a href="add_transport.php">
                    <button class="btn custom_btn ">Add Transport
                    </button>

                    
                </a>


            
        </div>

        

    </div>

</body>

</html>
