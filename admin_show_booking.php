<!DOCTYPE html>
<html>
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

            tr:(n+1){
                margin: 0;
            }
            table{
                border: 0px;
                padding: 0px;
                text-align: center;
                border-collapse: collapse
            }
            tr, td{
                border: 1px;
            }
            tr:nth-of-type(2n){
                background-color: #bcbcbc;      
            }
           
    </style>
</head>
<body>
    <?php

        include('connection.php');


    ?>
    
    <h1>User Booking Details</h1>
   
    <table class="table table-border">
        <tr>
            <th>Customer ID</th>
            <th>place name</th>
            <th>hotel name</th>
            <th>transport name</th>
            <th>need transport seat</th>
            <th>need hotel room</th>
        </tr>
        <?php
                $sql = "SELECT cust_id,place_name,hotel_name,trans_name,need_trans_seat,need_room FROM booking";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
        <tr>
        <td><?php echo $row['cust_id']; ?></td>
            <td><?php echo $row['place_name']; ?></td>
            <td><?php echo $row['hotel_name']; ?></td>
            <td><?php echo $row['trans_name']; ?></td>
            <td><?php echo $row['need_trans_seat']; ?></td>
            <td><?php echo $row['need_room']; ?></td>
        </tr>
        <?php } }
        else
        {
            echo "there is not any booking or bill<br>";
        }?>
    </table>

<br><br>

    
   

</body>

</html>
