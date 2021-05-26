
<!DOCTYPE html>
<html>
<head>
  <title>Database MYsql OOP</title>
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


include('connection.php');

session_start();


$customer_id = $_SESSION['id'];
   
  echo $customer_id;

   

    

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                
                $cust_id = $_SESSION['id'];
                $place_name = test_input($_POST["place_name"]);
                $place_rating = test_input($_POST["place_rating"]);
                
              
                    //     $sql = "INSERT INTO user_rating(cust_id,place_name,place_rating)
                    //     VALUES ('$cust_id','$place_name','$place_rating')";

                    //     if ($conn->query($sql) === TRUE) {
                    // echo "Inserted successfully";
                    // }
                    //     else {
                    //     echo "Error: " . $sql . "<br>" . $conn->error;
                    // }
                }

   

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;

          }



?>


<center>
    
<h2 style="color: lightblue;">Rating Form</h2></BR>
            <form action="rating.php" method="post">



              <p>

                 <label>places Name : </label>

                 <!-- <select name="trans_name">
            <option selected>Transport Name</option>
                <?php
                    $sql_2 = "SELECT trans_name,avl_seat,trans_fare,trans_type FROM transport";
                    $result_2 = $conn->query($sql_2);
                    if($result_2->num_rows>0)
                    {
                        while($row = $result_2->fetch_assoc())
                        {
                ?>
                            <td><?php echo $row['trans_name'];  ?></td>
                            <option value="<?php echo $row['trans_name'];   ?>"><?php echo $row['trans_name'];   ?></option>
                            <?php
                        }
                    }
                        else
                        {
                            echo "there is an error occur<br>";
                        }
                        ?>
        </select> -->
                 <input type="text" name="place_name" ></span>

                  <label>rating: </label>
                 <input type="number" name="place_rating"></span>

                
        </BR>  

                 </BR>
             
                     <input type="submit" name="Submit" value="register"></BR>
                      </p>
               
            

            </form>
            </center>


         
                 
 <?php

echo "<br><br><center>";
echo "<h2>Your ratings</h2>";
        

$sql="SELECT *  FROM user_rating where cust_id = $customer_id;" ;
if($result = $conn->query($sql)){
   if($result->num_rows > 0){
    echo "<table>";

        echo "<tr>";
                echo "<th>customer_id </th>";
                echo "<th>place name </th>";
                echo "<th>rating </th>";
                
               
                


            echo "</tr>";


        while($row = $result->fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $row['cust_id'] . "</td>";
                echo "<td>" . $row['place_name'] . "</td>";
                echo "<td>" . $row['place_rating'] . "</td>";

                
                
                
               
            echo "</tr>";
        }
    echo "</table>";
    
    }
    else{
     echo "Not rated yet";   
    }

    }

    
  
echo "</center>";
      
            ?>

<br><br>
<center>
<div class="button_div"><a href="visit_place.php" class="button">Go to User Profile</a></div>
</center>




          
            </body>





            </html>