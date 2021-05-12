<!DOCTYPE html>
<html>
    <?php
    include('connection.php');
     ?>
 <head>
    <title>Hello, world!</title>
    <style>
        table {
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
}
    </style>
</head>
    <body>
    <table class="table table-border">
        <tr>
            <th>place_name</th>
            <th>place_img</th>
        </tr>
        <h1>Place details</h1>
        <?php
        $sql = "SELECT * FROM place";
        $result = $conn->query($sql);
        //print_r($result);
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            //print_r($row);
            ?>
            
            <tr>
                <td><?php echo $row['place_name']; ?></td>
                <td>
                    <img src="image/<?php echo $row['place_img']; ?>" height="200" width="350">
                </td>
                
            </tr>
            
            <?php
            
        }
        }
        ?>
        </table>
    </body>
</html>