<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>


<head>
            <meta charset="utf-8">
            <title>travelBD</title>
            <link rel="icon" href="Image/logo.png">
            <link rel="stylesheet" href="nav_css.css">
      <style>
          
  table {
      border-collapse: collapse;
     
      
  }

  table,
  th,
  td {
      border: 1px solid black;
      padding:20px;
  }
        </style>
 
</head>



<body>

<?php

session_start();

$customer_id = $_SESSION['id'];

?>

<!-- header -->
<div class="topnav">
    <a class="logo" href="#"><div style="color:#274A5E;">TravelBD</div></a>
    <a class="nav-link" href="#">User Profile</a>
    <a class="nav-link" href="check_book_bill.php">Check bookings and Bills</a>
    <a href="hotel.php">Hotel</a>
    <a class="nav-link" href="rating.php">Rate the place</a>
    <a class="nav-link" href="recommendation.php">Your Recommended places</a>
    <a class="nav-link get_started" href="log_out.php">Logout</a>
    
</div>
<!-- header -->


<!-- background img -->
<div class="container">
    <img src="Images/img_bg_3.jpg" height="630" alt="Snow" style="width:100%;">
    <div class="centered" style="color: white;">
        <?php
                    $sql = "SELECT cust_name,cust_id FROM customer WHERE cust_id = '$customer_id'";
                            
                            $result = $conn->query($sql);
                            if($result->num_rows>0)
                            {
                                while($row = $result->fetch_assoc())
                                {
                        ?>
                            <h1> Hello, <?php echo $row['cust_name']; ?> </h1>    
                
        
                            <?php } }
                            ?>
                            <h2 style="color:#6eef83;"><b>You are welcome to Bangladesh</B></h2>
                            <p>TravelBD is multipurpose place, with cheap and great Travel packages.<br>TravelBD is perfect place for you to tavel!</p>
    </div>
</div>



  
    <br><br>

    
  
     <center>
     <h2>Choose Your Favorite place and Book now! </h2> 
     
     <br>
    
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
    
        <form action="rating.php">

            <input type="submit" name="rating" value="Please rate your favorite place">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        </form>
    </center>
    <br><br>


</body>

</html>
