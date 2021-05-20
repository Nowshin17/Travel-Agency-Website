<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>



<head>
    <title></title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Media CSS-->
    <link rel="stylesheet" href="assets/css/media.css">

    <style>
        .button {
            background-color: #555555;
            border: black;
            color: white;
            padding: 15px 32px;
            /*text-align: right;*/
            text-decoration: underline;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button_div {
            text-align: center;
        }


        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 5px solid black;
        }

    </style>
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
                            <a class="nav-link" href="#">User Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="check_book_bill.php">Check bookings and Bills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rating.php">Rate the place</a>
                          
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recommendation.php">Your Recommended places</a>
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
   <section class="banner d-flex align-items-center" style="background-image: url('Images/img_bg_3.jpg');  background-position-y: -100px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="banner_content">
                        <h1>User profile<br</h1> <h2><b>You are welcome to out Bangladesh</B></h2>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner Area End-->


<div class="container">
       
   
    <div class="col-sm-12">
        <div class="title">

        <!-- <div class="button_div"><a href="log_out.php" class="button">Log Out</a></div>
        <div class="button_div"><a href="check_book_bill.php" class="button">Check Book and Bill</a></div> -->
        
    
            
        </div>
    </div>
    <br>
     <center>
     <h2>Choose Your Favorite place and Book now! </h2> 
     </center>

    <table class="table table-border">
        <tr>
            <th>place_name</th>
            <th>place_img</th>
        </tr>
       
        <?php
        $sql = "SELECT * FROM place";
        $result = $conn->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>

        <tr>
            <?php $place = $row['place_name']; ?>
            <td><?php echo $place ?></td>
            <td>
                <img src="image/<?php echo $row['place_img']; ?>" height="400" width="500">
            </td>
            <td> <a href="booking.php?place=<?php echo $place; ?>">Booking</a> </td>
        </tr>

        <?php
            
        }
        }
        ?>
    </table>
    </div>

  <br><br>

  <center>
  <form action="rating.php">

  <input type="submit" name="rating" value="Please rate your favorite place">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

</form>
    </center>


</body>

</html>
