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
}

tr, td{
	border: 0px;
}

td:first-child{
	text-align: left;
}
tr:nth-of-type(2n){
	background-color: #bcbcbc;
	
}
    </style>
</head>
<body>
    <?php

include('connection.php');

session_start();


$customer_id = $_SESSION['id'];

?>

<table class="table table-border">
        
        <?php
                $sql = "SELECT cust_name,cust_id FROM customer WHERE cust_id = '$customer_id'";
                
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
        <tr>
            <h4>User ID: <b> <?php echo $row['cust_id']; ?> </b></h4>  
            <h4>User Name: <b> <?php echo $row['cust_name']; ?> </b></h4>     
        </tr>
        <?php } }
        ?>
        
    </table>





    
    <h1>User Booking and Bill Details</h1>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

    </style>
    <table class="table table-border">
        <tr>
            <th>place name</th>
            <th>hotel name</th>
            <th>transport name</th>
            <th>need transport seat</th>
            <th>need hotel room</th>
        </tr>
        <?php
                $sql = "SELECT place_name,hotel_name,trans_name,need_trans_seat,need_room FROM booking WHERE cust_id = '$customer_id'";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
        <tr>
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

    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

    </style>
    <table class="table table-border">
        <tr>
            <th>total room cost</th>
            <th>need room</th>
            <th>need transport seat</th>
            <th>total transport fare</th>
            <th>total bill</th>
        </tr>
        <?php
                $sql = "SELECT tot_room_cost,need_room,need_trans_seat,tot_trans_fare,tot_bill FROM customer_bill WHERE cust_id = '$customer_id'";
                $result = $conn->query($sql);
                if($result->num_rows>0)
                {
                    while($row = $result->fetch_assoc())
                    {
            ?>
        <tr>
            <td><?php echo $row['tot_room_cost']; ?></td>
            <td><?php echo $row['need_room']; ?></td>
            <td><?php echo $row['need_trans_seat']; ?></td>
            <td><?php echo $row['tot_trans_fare']; ?></td>
            <td><?php echo $row['tot_bill']; ?></td>
        </tr>
        <?php } }
        else
        {
            echo "there is not any booking or bill<br>";
        }?>
    </table>

</body>

</html>
