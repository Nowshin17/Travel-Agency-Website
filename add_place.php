<!DOCTYPE html>
<?php
include('connection.php');
?>
<html>
    <body>
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
    </body>
</html>