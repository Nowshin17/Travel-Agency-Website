<!DOCTYPE html>
<?php
include('connection.php');
?>
<html>
    <body>
        <h1>Add transport information</h1>
        <form action="add_transport.php" method="post">
            <p>transport type</p>
            <input type="radio" placeholder="trans_type" name="trans_type" value="plane">plane<br>
            <input type="radio" placeholder="trans_type" name="trans_type" value="bus">bus<br>
            <p>total seat</p>
            <input type="number" placeholder="tot_seat" name="tot_seat"><br>
            <p>transport name</p>
            <input type="text" placeholder="trans_name" name="trans_name"><br>
            <p>availabe seat</p>
            <input type="number" placeholder="avl_seat" name="avl_seat"><br>
            <p>per_seat fare</p>
            <input type="number" placeholder="trans_fare" name="trans_fare"><br>
            <button type="submit" name="submit">submit</button>
            <?php
            if(isset($_POST['submit']))
            {
                $trans_type = $_POST['trans_type'];
                $total_seat = $_POST['tot_seat'];
                $trans_fare = $_POST['trans_fare'];
                $trans_name = $_POST['trans_name'];
                $avl_seat = $_POST['avl_seat'];
                
                $sql_1 = "SELECT * FROM transport WHERE trans_name='$trans_name'";
                $result = $conn->query($sql_1);
                if($result->num_rows==0)
                {
                    $sql = "INSERT INTO transport(trans_type,tot_seat,trans_fare,trans_name,avl_seat) VALUES ('$trans_type','$total_seat','$trans_fare','$trans_name','$avl_seat')";
                    if($conn->query($sql) == true)
                    {
                        echo "new record create successfully<br>";
                    }
                           
                }
                else
                {
                    echo "This name transport exist in database<br>";
                }
                
            }
            ?>
        </form>
    </body>
</html>