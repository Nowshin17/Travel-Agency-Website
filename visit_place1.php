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

            body {
            background: #eee;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #222;
            font-size: 14px;
            line-height: 26px;
            padding: 30px;
            }

            .grid {
            display: grid;
            grid-template-columns: auto auto auto;
            
            }

            img:hover {
            opacity: 0.5;
            }

            div.polaroid {
            width: 250px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
            padding:10px;
            }


            div.container1 {
            padding: 10px;
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

<body>
<div class="row">
            
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
                            <p><?php echo $row['place_name']; ?></p>
                        </div>
                    </div>
                </div>



      <?php
            
        }
        
     }
    
        ?>

</div>


    <center>
        <a href="index.php"><h4>Go to HOME</h4></a>
    </center>





  
</body>

</html>
