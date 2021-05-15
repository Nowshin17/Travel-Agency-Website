<!DOCTYPE html>
<?php
include('connection.php');
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add hotel</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  
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
                
    </style>
</head>
    <body>
    
        <h1>Add places</h1> 
        <?php
        if(isset($_POST['uploadfilesub']))
        {
            $place = $_POST['place_name'];
            $filename = $_FILES['uploadfile']['name'];
            $filetmpname =  $_FILES['uploadfile']['tmp_name'];
            $folder = 'image/';
            move_uploaded_file($filetmpname,$folder.$filename);
            $sql = "INSERT INTO place(place_name,place_img) VALUES ('$place','$filename')";
            if ($conn->query($sql) == TRUE) {
                echo "New record created successfully";
            }
        }
        ?>

        
        <form action = "add_place.php" method = "post" enctype="multipart/form-data">
            <p>place_name</p>
            <input type = "text" placeholder = "place name" name = "place_name" />
            <br><br>
            <p>place image</p>
            <input type = "file" name = "uploadfile"><br>
            <input type = "submit" name ="uploadfilesub" value = "upload" />
        </form>
<br>
        
        <a href="admin_show.php"><h4>Go to Admin panel</h4></a>
       
    </body>
</html>