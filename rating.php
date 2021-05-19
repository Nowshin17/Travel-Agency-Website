
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

    //    if(isset($_GET['id']))
    //        {
    //           $_SESSION['id'] = $_GET['id'];

    //           }
             
    //           $flag=0;





        //    $user_id=$place_name= $place_rating = "";

    

        //     if ($_SERVER["REQUEST_METHOD"] == "POST") {

                
        //         $user_id = $_SESSION["id"];
        //         $place_name = test_input($_POST["movie_name"]);
        //         $place_rating = test_input($_POST["place_rating"]);
                
              

                
        //   }

        // $sql = "INSERT INTO rating(user_id,place_name,place_rating)
        // VALUES ('$user_id','$place_name','$place_rating')";

        // if ($conn->query($sql) === TRUE) {
        //   echo "Inserted successfully";
        // }
        //  else {
        //   echo "Error: " . $sql . "<br>" . $conn->error;
        // }



?>


<center>
    
<h2 style="color: lightblue;">Rating Form</h2></BR>
            <form action="rating.php" method="post">



              <p>

                 <label>places Name : </label>
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

// echo "<br><br><center>";
// echo "<h2>QS 2: User informations:</h2>";
        
// $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// $sql="SELECT *  FROM user_movies ORDER BY user_id DESC;" ;
// if($result = $conn->query($sql)){
//    if($result->num_rows > 0){
//     echo "<table>";

//         echo "<tr>";
//                 echo "<th>user_id </th>";
//                 echo "<th>movie name </th>";
//                 echo "<th>rating </th>";
                
               
                


//             echo "</tr>";


//         while($row = $result->fetch_assoc()){
//             echo "<tr>";
//                 echo "<td>" . $row['user_id'] . "</td>";
//                 echo "<td>" . $row['movie_name'] . "</td>";
//                 echo "<td>" . $row['movie_rating'] . "</td>";

                
                
                
               
//             echo "</tr>";
//         }
//     echo "</table>";
    
//     }
//     else{
//      echo "No records matching your query were found.";   
//     }

//     }
  
// echo "</center>";
      
            ?>






          
            </body>





            </html>