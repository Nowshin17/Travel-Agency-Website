<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>

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
    <h2>Delete Customer</h2>

    <form action="delete_customer.php" method="post">
        <input type="text" placeholder="cust_name" name="cust_name">
        <button type="submit" name="delete">delete</button>
    </form>


    <?php
        if(isset($_POST['delete']))
        {
            $cust_name=$_POST['cust_name'];
            
            $sql = "SELECT * from customer WHERE cust_name = '$cust_name'";
            $result = $conn->query($sql);
            if($result->fetch_assoc()==false)
            {
                echo "This username is not exist in database<br>";
            }
            else
            {
                
                $sql_1 = "DELETE FROM customer WHERE cust_name = '$cust_name'";
                if($result_1=$conn->query($sql_1))
                {
                    echo "User delete successfully<br>";
                }
            }
            
        }
        ?>
        
        <br>
        <a href="admin_show.php"><h4>Go to Admin panel</h4></a>
</body>

</html>
