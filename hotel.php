


<!DOCTYPE html>
<html lang="en">

<?php
    include('connection.php');
     ?>

<head>

    <meta charset="UTF-8">
    <title>Hotel</title>

    <meta charset="utf-8">
    <title>See hotels!</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">

    <style>

        body {
        background: #eee;
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        color: #222;
        font-size: 14px;
        line-height: 26px;
        
        }
    </style>
   

</head>

<body>
    
<?php
    
     ?>

    <h1 style="text-align:center;">Our Available Hotels</h1>
    <hr>

    <div class="container">

        <div class="row mb-2">
            
            <?php
            $sql = "SELECT * FROM hotel";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                
            ?>


            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body ">
                        <h3 class="mb-0">
                        <?php echo $row['hotel_name']; ?>
                        </h3>

                         Hotel cost : <?php echo $row['room_cost']; ?> <br>
                        Available seats : <?php echo $row['avl_room']; ?>
                        

                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="width: 200px;" src="Image/view-of-tourist-resort-338504.jpg" data-holder-rendered="true">
                </div>
            </div>

            <?php
            
        }
        }
        ?>
            
           





        </div>

        <a href="customer_log.php">
            <button class="btn custom_btn" style="margin-left:500px;">Book Now</button>

        </a>

    </div>

    


    <?php
    include('footer.php');
     ?>


</body>

</html>
