<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>

<head>
    <title>Place</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Find you trip!</title>
    <link rel="icon" href="Image/logo.png">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!--Google Font CSS-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet"> -->
    <!--Custom CSS-->
 


    <style>
            *{
             margin: 0%;
             }

            body{
            background: #eee;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #222;
            font-size: 14px;

        }
            .a {
    
            line-height: 26px;
            padding: 10px;
            margin: 120px;
            } 

            img:hover {
            opacity: 0.5;
            }


            div.card {
                /* Add shadows to create the "card" effect */
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 230px;
                height: auto;
            }

            div.card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            div.container {
                padding: 2px 10px;
                text-align: center;
            }

            .column {
                float: left;
                width: 30%;
                padding: 20px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            
}
</style>
</head>
<?php
    include('header.php');
     ?>
 
<body>
   

<div class="a"> 
       
<div class="row">

    <center>
    <h1 style="color: #274A5E;"><b> Find your place<b></h1>
    </center>
    <br>
      
<?php



$sql = "SELECT * FROM place";
        $result = $conn->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>
                 <div class="column">
                    <div class="card">
                        <img src="image/<?php echo $row['place_img']; ?>" height="200" width="230">
        
                        <div class="container">
                            <p><b><?php echo $row['place_name']; ?></b></p><br>
                        </div>
                    </div>
                </div>



      <?php
            
        }
        
     }
    
        ?>
        </div>

</div>

    



<!-- footet -->

<?php
    include('footer.php');
     ?>

<!-- footer section -->

  
</body>

</html>
