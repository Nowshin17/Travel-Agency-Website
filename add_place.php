<!DOCTYPE html>
<?php
include('connection.php');
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add hotel</title>
    
    <style> 
            body {
            background: #eee;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #222;
            font-size: 14px;
            line-height: 26px;
            padding: 50px;
            margin: 50px;
            }
            .container {
   
            border-radius: 5px;
            padding: 70px;
            border: 2px solid black;
            width: 18%;
            height: auto;
            }
                
    </style>
</head>
    <body>
        <div class="container">
    
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
            place_name:
            <input type = "text" placeholder = "place name" name = "place_name" />
            Upload place image:
            <input type = "file" name = "uploadfile"><br><br>
            <input type = "submit" name ="uploadfilesub" value = "upload" />
        </form>
         <br>
        
        
    </div> 
    <center>
    <a href="admin_show.php"><h2>Go to Admin panel</h2></a>
    </center>
    </body>
</html>