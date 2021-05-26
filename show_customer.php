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
            table {
            border-collapse: collapse;
            }
            table, th, td {
            border: 1px solid black;
            }
    </style>
</head>

    <body>
    <center> <h1> Resgistered Users</h1> </center>
       
        <table class = "table table-border">
            <tr>
                <th>customer_name</th>
                <th>customer_id</th> 
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
                <td><?php echo $row['cust_address']; ?></td>
                <td><?php echo $row['cust_mail']; ?></td>
                <td><?php echo $row['cust_phone']; ?></td>
            </tr>
            <?php } } ?>
        </table>

        <center>
        <a href="admin_show.php"><h3>Go to Admin panel</h3></a>
        </center>
    </body>
</html>