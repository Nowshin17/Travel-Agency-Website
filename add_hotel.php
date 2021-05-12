<!DOCTYPE html>
<?php
include('connection.php');
?>
<html>
    <body>
        <h1>Add hotel information</h1>
        <form action="add_hotel.php" method="post">
            <p>hotel name</p>
            <input type = "text" placeholder="hotel_name" name = "hotel_name"><br>
            <p>place name</p>
            <input type = "text" placeholder="place_name" name="place_name"><br>
            <p>total room</p>
            <input type = "number" placeholder="tot_room" name = "tot_room"><br>
            <p>available room</p>
            <input type= "number" placeholder="avl_room" name = "avl_room"><br>
            <p>per room cost</p>
            <input type = "number" placeholder="room_cost" name="room_cost"><br>
            <button type = "submit" name = "submit">submit</button>
        </form>
        
        <?php
        if(isset($_POST['submit']))
        {
            $hotel_name = $_POST['hotel_name'];
            $place_name = $_POST['place_name'];
            $tot_room = $_POST['tot_room'];
            $avl_room = $_POST['avl_room'];
            $room_cost = $_POST['room_cost'];
            
            $sql_1 = "SELECT * FROM hotel WHERE  hotel_name='$hotel_name'";
            $result = $conn->query($sql_1);
            if($result->num_rows==0)
            {
                 $sql = "INSERT INTO hotel(hotel_name,place_name,tot_room,avl_room,room_cost) VALUES('$hotel_name','$place_name','$tot_room','$avl_room','$room_cost')"; 
                if($conn->query($sql)== TRUE)
                {
                    echo "new record create successfully<br>";
                }
            }
            else
            {
                echo "this hotel exist<br>";    
            }
            
        }
        ?>
        
        
    </body>
</html>