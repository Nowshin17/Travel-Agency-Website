<!DOCTYPE html>



<head>
    <meta charset="UTF-8">
    <title>Booking</title>
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


<?php

include('connection.php');

session_start();

if(isset($_GET['place'])){
    $place_name = $_GET['place'];
}

$customer_id = $_SESSION['id'];

?>


<html>
    <h1>Booking Form</h1>

<head>

    <meta charset="UTF-8">
    <title>Document</title>
  

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</head>

<body>


    <form action="" method="post" >
       
      
       
        <p>required hotel room</p>
        <input type="number"placeholder="required_room" name="need_room"><br><br>
        <p>required trasport seat</p>
        <input type="number" placeholder="required_seat" name="need_trans_seat"><br><br>



        <p>Enter the hotel name</p>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="hotel_name">
            <option selected>Hotel Name</option>
            <?php
            $sql_1="SELECT hotel_name,avl_room,room_cost FROM hotel WHERE place_name='$place_name'";

            $result_1 = $conn->query($sql_1);
            if($result_1->num_rows>0)
            {
                while($row = $result_1->fetch_assoc())
                {
                ?>
                        <option value="<?php echo $row['hotel_name'];   ?>"><?php echo $row['hotel_name'];   ?></option>

                        <?php
                }
            }
            else
            {
                echo "an error occured<br>";
            }

?>

        </select>
        <p>Enter the transport name</p>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="trans_name">
            <option selected>Transport Name</option>
            <?php
        $sql_2 = "SELECT trans_name,avl_seat,trans_fare,trans_type FROM transport";
        $result_2 = $conn->query($sql_2);
        if($result_2->num_rows>0)
        {
            while($row = $result_2->fetch_assoc())
            {
        ?>
                <td><?php echo $row['trans_name'];  ?></td>
                <option value="<?php echo $row['trans_name'];   ?>"><?php echo $row['trans_name'];   ?></option>
                <?php
            }
        }
            else
            {
                echo "there is an error occur<br>";
            }
            ?>
        </select>
        <br>
        <br><button type="submit" name="submit">submit</button>



    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $hotel_name=$_POST['hotel_name'];
            $transport_name=$_POST['trans_name'];
            $need_room=$_POST['need_room'];
            $need_trans_seat=$_POST['need_trans_seat'];
            
            
            $sql_3 = "SELECT avl_room FROM hotel WHERE hotel_name ='$hotel_name'";
            $result_3 = $conn->query($sql_3);
            $row_3 = $result_3->fetch_assoc();
            $available_room = $row_3['avl_room'];
            
            
            $sql_4="SELECT avl_seat FROM transport WHERE trans_name ='$transport_name'";
            $result_4 = $conn->query($sql_4);
            $row_4=$result_4->fetch_assoc();
            $available_seat = $row_4['avl_seat'];
            if($result_3->num_rows==0||$result_4->num_rows==0)
            {
                echo "entered hotel name or transport name is not exist<br>";
            }
            else if($need_room>$available_room)
            {
                echo "sorry there is not enough room<br>";
            }
            else if($need_trans_seat>$available_seat)
            {
                echo "sorry there is not enough seat<br>";
            }
            else
            {
                $sql_5 = "INSERT INTO booking (cust_id,place_name,hotel_name,need_trans_seat,need_room,trans_name) VALUES ('$customer_id','$place_name','$hotel_name','$need_trans_seat',$need_room,'$transport_name')";
               /* echo "customer id ".$customer_id."<br>";
                echo "place name ".$place_name."<br>";
                echo "hotel name ".$hotel_name."<br>";
                echo "need transport seat ".$need_trans_seat."<br>";
                echo "need room ".$need_room."<br>";
                echo "transport name ".$transport_name."<br>";
                */
                
                if($conn->query($sql_5))
                {
                    echo "new record create successfully<br>";
                }
                else
                {
                    echo "there is an error<br>".$conn->error;
                }
                
                 $temp_room = $available_room - $need_room;
            $temp_seat = $available_seat - $need_trans_seat;
           // echo "room baki ace ".$temp_room."<br>";
            //echo "seat khali ace ".$temp_seat."<br>";
            $sql_6 = "UPDATE hotel SET avl_room='$temp_room' WHERE hotel_name='$hotel_name'";
            if($conn->query($sql_6)==true)
            {
                echo "room update<br>";
            }
            $sql_7 = "UPDATE transport SET avl_seat='$temp_seat' WHERE trans_name='$transport_name'";
            
            if($conn->query($sql_7)==true)
            {
                echo "seat update<br>";
            }
            
    
            $sql_8 = "SELECT room_cost FROM hotel WHERE hotel_name = '$hotel_name' ";
            $result_8 = $conn->query($sql_8);
            $row_8 = $result_8->fetch_assoc();
            $room_cost = $row_8['room_cost'];
            //echo "room cost".$room_cost."<br>";
            
            $sql_9 = "SELECT trans_fare FROM transport WHERE trans_name = '$transport_name'";
            $result_9 = $conn->query($sql_9);
            $row_9 = $result_9->fetch_assoc();
            $trans_fare = $row_9['trans_fare'];
            //echo "transport cost ".$trans_fare."<br>";
            
            $tot_room_cost = $need_room * $room_cost;
            $tot_trans_fare = $need_trans_seat * $trans_fare;
            $total_bill = $tot_room_cost + $tot_trans_fare;
            
           // echo "total room cost ".$tot_room_cost."<br>";
           // echo "total transport fare ".$tot_trans_fare."<br>";
            
            $sql_10 = "INSERT INTO customer_bill (cust_id,tot_room_cost,need_room,need_trans_seat,tot_trans_fare,tot_bill) VALUES ('$customer_id','$tot_room_cost','$need_room','$need_trans_seat','$tot_trans_fare','$total_bill')";
            
            $conn->query($sql_10);
                
            }
           
            
        }
            
?>

    <style>
        .button {
            background-color: #555555;
            border: black;
            color: white;
            padding: 15px 32px;
            /*text-align: right;*/
            text-decoration: underline;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button_div {
            text-align: center;
        }
    </style>

    <div class="button_div"><a href="log_out.php" class="button">Log Out</a></div>
    
    
        <style>
        .button {
            background-color: #555555;
            border: black;
            color: white;
            padding: 15px 32px;
            /*text-align: right;*/
            text-decoration: underline;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button_div {
            text-align: center;
        }

    </style>

    <div class="button_div"><a href="check_book_bill.php" class="button">Check Book and Bill</a></div>

</body>

</html>
