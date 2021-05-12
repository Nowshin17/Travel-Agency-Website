<!DOCTYPE html>
<?php
    include('connection.php');
?>
<html>
    <body>
        <h1>User Details</h1>
         <style>
        table {
         border-collapse: collapse;
          }

         table, th, td {
         border: 1px solid black;
          }
        </style>
        <table class = "table table-border">
            <tr>
                <th>customer_name</th>
                <th>customer_id</th>
                <th>customer_password</th>
                <th>customer_address</th>
                <th>customer_mail</th>
                <th>customer_phone</th>
            </tr>
            <?php
                $sql = "SELECT * FROM customer";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
            <tr>
                <td><?php echo $row['cust_name']; ?></td>
                <td><?php echo $row['cust_id']; ?></td>
                <td><?php echo $row['cust_password']; ?></td>
                <td><?php echo $row['cust_address']; ?></td>
                <td><?php echo $row['cust_mail']; ?></td>
                <td><?php echo $row['cust_phone']; ?></td>
            </tr>
            <?php } } ?>
        </table>
    </body>
</html>