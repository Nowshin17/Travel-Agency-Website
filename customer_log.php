<!DOCTYPE html>
<?php
include('connection.php');
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/new.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="user">
    <form action="customer_log.php" method="post">

        <div class="wrapper fadeInDown pad">
            <div id="formContent">



                <div class="fadeIn first">
                    <h5>User Log In</h5>
                </div>



               
                    <input type="email" id="login" class="fadeIn second" name="cust_mail" placeholder="Email">
                    <input type="password" id="password" class="fadeIn third" name="cust_password" placeholder="Password">
                    <input type="submit" class="fadeIn fourth" name="add" value="Log In">
                


            </div>
        </div>

    </form>
    <?php
        if(isset($_POST['add']))
        {   
            $customer_password = $_POST['cust_password'];
            $customer_mail = $_POST['cust_mail'];
            
            $sql = "SELECT * FROM customer WHERE cust_mail = '$customer_mail' AND cust_password ='$customer_password'";
            $result = $conn->query($sql);
            if($result->num_rows!=0)
            {
                $sql_1 = "SELECT cust_id from customer WHERE cust_mail = '$customer_mail' AND cust_password = '$customer_password'";
                
                $result_1 = $conn->query($sql_1);
                
                $row = $result_1->fetch_assoc();
                $_SESSION["id"] = $row['cust_id'];
                header("Location: visit_place.php") ;
            }
            else
            {
                echo "Please register<br>";
            }
        }
        ?>
</body>

</html>
