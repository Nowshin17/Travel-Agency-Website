<!DOCTYPE html>
<html>
<head>
  <title>Recommendation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="nav_css.css">
<style>
.error {
  color: red;
}
th,table{
    border : 1px solid black;
    border-collapse: collapse;
    padding-right: 4px;
    padding-left: 4px;
    font-weight: normal;
}
td{
    border-left: 1px solid black;
    align-items: center;
    padding: 5px;
}
form{
  background-color: lightgrey;
  width: 40%;
  align-self: center;
  border: 2px solid grey;
  padding-top: 50px;
  padding-bottom: 50px;

}
p{
  padding-bottom: 6px;
}

label{
  padding-right: 10px;  
}

}
</style>
</head>

<body>



<?php
include("recommend.php");
 

session_start();


$customer_id = $_SESSION['id'];


$movies=mysqli_query($conn,"select * from user_rating");

$matrix=array();

while($movie=mysqli_fetch_array($movies))
{

	$users=mysqli_query($conn,"select cust_name from customer where cust_id=$movie[cust_id]");
	$username=mysqli_fetch_array($users);

	$matrix[$username['cust_name']][$movie['place_name']]=$movie['place_rating'];
}

$users=mysqli_query($conn,"select cust_name from customer where cust_id=$customer_id");
	$username=mysqli_fetch_array($users);

// echo "<pre>";
// print_r($matrix);
// echo "<pre>";


// echo "rec of test5 with other two: <br>";
// $username['name']

// var_dump(getRcommendation($matrix,$username['name']));


 // similarity of alice with other
// getRcommendation($matrix,'alice');
  ?>


<!-- img galary -->
<center><h1 style="color:#496078;">Recommended Places for you!</h1></center>


<div class="row">
<?php

$sql="SELECT cust_id FROM user_rating where cust_id = $customer_id;" ;
          if($result = $conn->query($sql)){
            if($result->num_rows > 0){


        

            $rec = array();


            
           
            $rec = getRcommendation($matrix,$username['cust_name']);
            foreach ($rec as $movie => $rating) {
            ?>


                    <div class="column_3">
                    <a target="_blank" href="visit_place1.php">
                    <img  src="images/tour-8.jpg" alt="Mountains" width="100%" height="95%">
                    </a>
                    <div ><b>place name:<?php echo $movie; ?></b> </div>
                    <div ><b>Your rating:<?php echo $rating; ?></b> </div>
                    
                    </div>
      
                        <!-- echo "<tr>";
                            echo "<td>" . $movie . "</td>";
                            echo "<td>" . $rating . "</td>";
  						 echo "</tr>"; -->

                           <?php
                    }
                echo "</table>";

                  } 
                
                
                  else{

                  
                        echo "<center><h2>You did not rated yet.Please Rate your favorite place first!<h2></center>";
                        echo "<br><br><center>";
                       

                        echo "<table>";

                        echo "<tr>";
                              echo "<th>recommended places </th>";
                              echo "<th>rated </th>";
                        echo "</tr>";
                        echo "<tr>";
                              echo "<th>bandarban </th>";
                              echo "<th>-</th>";
                        echo "</tr>";
                  }
                }
                 
                  
               
                 
    
            echo "</center>";


            ?>

            
</div>




 </body> 
 </html>       
