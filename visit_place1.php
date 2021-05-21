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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Media CSS-->
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" href="stylec.css" />


    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 5px solid black;
        }

    </style>
</head>

<body>


<?php
$sql = "SELECT * FROM place";
        $result = $conn->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>
    <div class="grid">
    
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="image/<?php echo $row['place_img']; ?>" alt="Rome" />
          <div class="card-content">
            <h1 class="card-header"><?php echo $row['place_name']; ?></h1>
            <p class="card-text">
              Rome is known for its stunning <strong> architecture</strong>,
              with the Colleseum, Pantheon, and Trevi Fountain as the main
              attractions.
            </p>
            <button class="card-btn">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>

      <?php
            
        }
     }
        ?>

    <center>
        <a href="index.php"><h4>Go to HOME</h4></a>
    </center>
</body>

</html>
