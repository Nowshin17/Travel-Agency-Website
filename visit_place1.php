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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/new.css">
  
    <link rel="stylesheet" href="assets/css/media.css">

    <link rel="stylesheet" href="stylec.css" />


>
</head>

<body>

<div class="container">

        <div class="row mb-2">
            

<?php


$sql = "SELECT * FROM place";
        $result = $conn->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>
 


      <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h1 class="mb-0">
                        <?php echo $row['place_name']; ?>
                        </h1>

                        

                        <p class="card-text mb-auto">Visit here</p>

                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="width: 200px;" src="image/<?php echo $row['place_img']; ?>" data-holder-rendered="true">
                </div>
            </div>
     

     



      <?php
            
        }
        
     }
    
        ?>

        </div>
    </div>

    <center>
        <a href="index.php"><h4>Go to HOME</h4></a>
    </center>



  
</body>

</html>
