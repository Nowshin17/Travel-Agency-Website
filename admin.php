<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>


<head>
    <meta charset="UTF-8">
    <title>Admin Pannel</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/new.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<style>

body {
  background-image: url('Images/blog-1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<body>
  
    <form action="admin.php" method="post">
    <?php $err=" "; ?>


            
                <div class="wrapper fadeInDown pad">
                    <div id="formContent">


                        <div class="fadeIn first">
                            <h5>Admin Access</h5>
                        </div>

                        <input type="text" id="login" class="fadeIn second" name="admin_name" placeholder="Name">
                        <input type="password" id="password" class="fadeIn third" name="admin_password" placeholder="Password">
                        <input type="submit" class="fadeIn fourth" name="add" value="Log In">
                          


                    </div>
                </div>
           


    </form>

            <?php

                    
            if(isset($_POST['add']))
            {
                if($_POST['admin_name']=="ankita"&&$_POST['admin_password']=="1234")
                {
                header("Location: admin_show.php");
                }
                else{
                    echo "Yout username or password is wrong!";
                }
            }

            ?>  






</body>

</html>
