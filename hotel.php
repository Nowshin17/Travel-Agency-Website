<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>

<head>
    <title>hotel</title>
    <meta charset="utf-8">
    <title>Find you trip!</title>
    <link rel="icon" href="Image/logo.png">


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
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            button{
                padding: 10px;
                background-color: #04AA6D;
                
            }
            
}
</style>
</head>

<?php
    include('header.php');
     ?>

<body>
    
    
<div class="a"> 
<center>
    <div style="margin-right:10%;"><h1 style="color: #274A5E;"><b>--- Our Available Hotels ---<b></h1></div>
    </center>
      
      
        <div class="row">
        <br><br>
  
  <?php

            $sql = "SELECT * FROM hotel";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                
            ?>
            

            <div class="column">
                    <div class="card">
                        <img src="Image/view-of-tourist-resort-338504.jpg" height="200" width="230">
        
                            <div class="container">
                                <h2><b><?php echo $row['hotel_name']; ?></b></h2><br>
                                <b>Hotel cost :</b> <?php echo $row['room_cost']; ?> <br>
                                <b>Available seats :</b> <?php echo $row['avl_room']; ?>
                                <br><br>
                            
                            </div>
                         </div>
                     </div>
                 <?php
            
                     }
                  }
                ?>

                 </div>
             </div>

        </div>

        
        <a href="customer_log.php">
            <button style="margin-left:700px;">Book Now</button>
        </a>
        <br><br>
         

   

    


    <?php
    include('footer.php');
     ?>


</body>

