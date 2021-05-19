<!DOCTYPE html>
<html>
<head>
  <title>REcommendatiin</title>
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
 



$movies=mysqli_query($conn,"select * from user_movies");

$matrix=array();

while($movie=mysqli_fetch_array($movies))
{

	$users=mysqli_query($conn,"select name from user1 where id=$movie[user_id]");
	$username=mysqli_fetch_array($users);

	$matrix[$username['name']][$movie['movie_name']]=$movie['movie_rating'];
}

$users=mysqli_query($conn,"select name from user1 where id=$_GET[id]");
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
            echo "<h2>Show movies recommebdation</h2>";

            echo "<table>";

                    echo "<tr>";
                           echo "<th>movie name </th>";
                           echo "<th>rating </th>";
                    echo "</tr>";



            $rec = array();
            $rec = getRcommendation($matrix,$username['name']);
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