<!DOCTYPE html>
<html>
<head>
  <title>Recommendatiin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
 



$movies=mysqli_query($conn,"select * from user_rating");

$matrix=array();

while($movie=mysqli_fetch_array($movies))
{

	$users=mysqli_query($conn,"select name from customer where cust_id=$movie[cust_id]");
	$username=mysqli_fetch_array($users);

	$matrix[$username['cust_name']][$movie['place_name']]=$movie['place_rating'];
}

$users=mysqli_query($conn,"select name from customer where cust_id=$_GET[id]");
	$username=mysqli_fetch_array($users);

// echo "<pre>";
// print_r($matrix);
// echo "<pre>";


// echo "rec of test5 with other two: <br>";
// $username['name']

// var_dump(getRcommendation($matrix,$username['name']));


 // similarity of alice with other
// getRcommendation($matrix,'alice');




 echo "<br><br><center>";
            echo "<h2>Show place recommebdation</h2>";

            echo "<table>";

                    echo "<tr>";
                           echo "<th>recommended places </th>";
                           echo "<th>rating </th>";
                    echo "</tr>";



            $rec = array();
            $rec = getRcommendation($matrix,$username['cust_name']);
            foreach ($rec as $movie => $rating) {
      
                        echo "<tr>";
                            echo "<td>" . $movie . "</td>";
                            echo "<td>" . $rating . "</td>";
  						 echo "</tr>";
                    }
                echo "</table>";
                
                
                
 
                
              
            echo "</center>";

           
            ?>

            <br><br>









</body>
</html>