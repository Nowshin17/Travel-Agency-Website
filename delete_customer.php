<!DOCTYPE html>
<html>
<?php
    include('connection.php');
     ?>

<body>
    <h1>Delete Customer</h1>
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
</body>

</html>
