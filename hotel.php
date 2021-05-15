
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
        $sql = "SELECT * FROM hotel";
        $result = $conn->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>

        <tr>
            <td><?php echo $row['hotel_name']; ?></td>
            <td>
                
            </td>
        </tr>

        <?php
            
        }
        }
        ?>
    </table>
    </div>

    <br>
    <center>
        <a href="index.php"><h4>Go to HOME</h4></a>
    </center>
</body>

</html>


























<!-- <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Hotel</title>

    <meta charset="utf-8">
    <title>Hello, world!</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/new.css">
  
    <link rel="stylesheet" href="assets/css/media.css">

</head>

<body>
    <h1 style="text-align:center;">Our Available Hotels</h1>

    <div class="container">





        <div class="row mb-2">
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            Hotel Sajek 1
                        </h3>

                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="width: 200px;" src="Image/bed-bedroom-furniture-headboard-279746.jpg" data-holder-rendered="true">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            Hotel Sajek 1
                        </h3>

                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="width: 200px;" src="Image/apartment-bed-bedroom-chair-271624.jpg" data-holder-rendered="true">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            Hotel Bandarban 1
                        </h3>

                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="width: 200px;" src="Image/apartment-bed-bedroom-chair-271618.jpg" data-holder-rendered="true">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            Hotel Bandarban 2
                        </h3>

                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="width: 200px;" src="Image/view-of-tourist-resort-338504.jpg" data-holder-rendered="true">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            Hotel Cox's Bazar 1
                        </h3>

                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="width: 200px;" src="Image/bed-bedroom-furniture-headboard-279746.jpg" data-holder-rendered="true">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            Hotel Cox's Bazar 2
                        </h3>

                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" style="width: 200px;" src="Image/bed-bedroom-furniture-headboard-279746.jpg" data-holder-rendered="true">
                </div>
            </div>





        </div>

        <a href="customer_log.php">
            <button class="btn custom_btn" style="margin-left:500px;">Book Now</button>

        </a>

    </div>





</body>

</html> -->
