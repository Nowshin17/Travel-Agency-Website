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
        table,th,td {
            border: 1px solid black;
            padding:20px;
        }
        </style>
        
</head>


<body>

<?php
// take session id 
session_start();
$customer_id = $_SESSION['id'];
?>


<!-- header -->
<div class="topnav">
    <a class="logo" href="#"><div style="color:#274A5E;"><b>TravelBD</b></div></a>
    <a class="nav-link" href="#">User Profile</a>
    <a class="nav-link" href="check_book_bill.php">Check bookings and Bills</a>
    <a class="nav-link" href="rating.php">Rate the place</a>
    <a class="nav-link" href="recommendation.php">Your Recommended places</a>
    <a class="nav-link get_started" href="log_out.php">Logout</a>
    
</div>
<!-- header -->

<!-- background img -->
<div class="container">
    <img src="Images/img_bg_3.jpg" height="730" alt="Snow" style="width:100%;">
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
                
                        <?php } } ?>
                        <h2 style="color:#6eef83;"><b>You are welcome to Bangladesh</b></h2>
                        <p>TravelBD is multipurpose place, with cheap and great Travel packages.<br>TravelBD is perfect place for you to tavel!</p>
     </div>
</div>
<!-- background img -->
  
    <br><br>
<!-- booking table -->
    <center>
    <h2>Choose Your Favorite place and Book now! </h2> <br>
    
    <table class="table table-border">
        <tr>
            <th>place_name</th>
            <th>place_img</th>
        </tr>
        <?php
        $sql = "SELECT * FROM place";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {    
        ?>
        <tr>
            <?php $place = $row['place_name']; ?>
            <td><?php echo $place ?></td>
                <td>
                    <img src="image/<?php echo $row['place_img']; ?>" height="400" width="500">
                </td>
                <!-- this place is sent to booking.php -->
            <td> <a href="booking.php?place=<?php echo $place; ?>">Book Now</a> </td>
        </tr>

        <?php
            
          }
        }
        ?>
    </table>
    </div>
<!-- booking table -->

  <br><br>
    
        <form action="rating.php">

            <input type="submit" name="rating" value="Please rate your favorite place">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        </form>
    </center>
    <br><br>

<!-- img galary -->
<center><h1 style="color:#496078;">Your Rated Places</h1></center>
<div class="row">
             <?php
                $sql="SELECT *  FROM user_rating where cust_id = $customer_id;" ;
                if($result = $conn->query($sql)){
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    
                ?>    <div class="column_3">
                <a target="_blank" href="visit_place1.php">
                <img  src="images/tour-8.jpg" alt="Mountains" width="100%" height="95%">
                </a>
                <div ><b>place name:<?php echo $row['place_name']; ?></b> </div>
                <div ><b>Your rating:<?php echo $row['place_rating']; ?></b> </div>
                
                </div>

               <?php
            
                     }
                  }
                
                else{
                    echo"<center><div ><b>not rated yet! Nothing to show</b> </div></center>";
                }
            }
                ?>
</div>
<!-- img galary -->


<center><a href="recommendation.php" style="text-decoration: none;"><h1 style="color:#496078;">Click here to See Your Recommended Places
</h1></a></center><br><br>





<!-- footet -->

<?php
    include('footer.php');
     ?>

<!-- footer section -->
</body>

</html>
