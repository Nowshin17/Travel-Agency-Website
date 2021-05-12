<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>

<head>
    <title>Hello, world!</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Google Font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Media CSS-->
    <link rel="stylesheet" href="assets/css/media.css">


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
   
   
   <div class="container">
       
   
    <div class="col-sm-12">
        <div class="title">
            <h1>Place Information</h1>
            
        </div>
    </div>

   
   
   
   
   
   
   
   
    <table class="table table-border">
        <tr>
            <th>place_name</th>
            <th>place_img</th>
        </tr>
        <?php
        $sql = "SELECT * FROM place";
        $result = $conn->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>

        <tr>
            <td><?php echo $row['place_name']; ?></td>
            <td>
                <img src="image/<?php echo $row['place_img']; ?>" height="200" width="350">
            </td>
        </tr>

        <?php
            
        }
        }
        ?>
    </table>
    </div>
</body>

</html>
