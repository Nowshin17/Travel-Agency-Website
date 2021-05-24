<!DOCTYPE html>
<?php
include('connection.php');
?>
<html>

<head>

    <meta charset="UTF-8">
    <title>Registration</title>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- <link rel="stylesheet" href="css/new.css"> -->
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="css/loginstyle.css"> 

<style>
    .error {
	color: red;
    
}
</style>

</head>

<body>

    <?php
    $cust_name=$cust_email=$cust_password=$cust_address=$cust_phonel="";
    $bad=$clear="";
    $namerr=$emailerr=$passworderr=$adderr=$noerr="";
   

    if(isset($_POST['submit']))
    {



        if (empty($_POST["cust_name"])){
            $namerr = "Name is required";
        }
        else{
          $customer_phone = $_POST['cust_phone'];
        }
        
        
    
        if (empty($_POST["cust_password"])){
            $passworderr = "password is required";
        }
        else{
            $customer_password = $_POST['cust_password'];
        }



        if (empty($_POST["cust_address"])){
            $adderr = "address is required";
        }
        else{
            $customer_address = $_POST['cust_address'];
        }
        


        if (empty($_POST["cust_phone"])){

            $noerr = "Phone no is required";
        }
        else{
    
            $customer_phone = $_POST['cust_phone'];
            $regex = "/^\+?(88)?0?1[56789][0-9]{8}/";
    
            if (!preg_match($regex,  $customer_phone)) {
                
               $noerr = "Valid Bangladeshi mobile no. is required!"; 
            }
    
    
       
        }
        


        if (empty($_POST["customer_mail"])){
            $emailerr = "Email is required";
        }
        else{
          

                $customer_mail = $_POST['cust_mail'];
                
                $sql_1 = "SELECT * FROM customer WHERE cust_mail = '$customer_mail'";
                // if $sql_1 get value it will return some value
                $result = $conn->query($sql_1); 
                
                if($result->num_rows==0)
                {
                
                    $sql = "INSERT INTO customer(cust_name,cust_password,cust_address,cust_mail,cust_phone) VALUES ('$customer_name','$customer_password','$customer_address','$customer_mail','$customer_phone')";
                
                    if ($conn->query($sql) == TRUE) {
                        echo "New record created successfully<br>";       
                    }
                    
                        header("Location: customer_log.php") ;

                }


                else
                {
                    echo "This mail is already taken<br>";
                }
     }



    }



    ?>

    

<h2>We are here for you</h2>
<br>
<br>
<br>

<dir class= "form-container">
	<div class = "user-img"> <img src= ""/> <div>
	    <ul class= "list" id = h>
    <form action="customer_reg.php" method=post>


    

                    <li><input type="text" id="login" class="fadeIn second" name="cust_name" placeholder="Name"></BR>
                    <span class = "error"><?php echo "$namerr"; ?></span></li>
                    <li><input type="text" id="login" class="fadeIn second" name="cust_address" placeholder="Address"></BR>
                    <span class = "error"><?php echo "$adderr"; ?></span></li>
                    <li><input type="text" id="login" class="fadeIn second" name="cust_phone" placeholder="Phone"></BR>
                    <span class = "error"><?php echo "$noerr"; ?></span></li>
                    <li><input type="email" id="login" class="fadeIn second" name="cust_mail" placeholder="Email"></BR>
                    <span class = "error"><?php echo "$emailerr"; ?></span></li>

                    <li><input type="password" id="password" class="fadeIn third" name="cust_password" placeholder="Password">
                    </BR>
                    <span class = "error"><?php echo "$passworderr"; ?></span></li>


                    <li><input type="submit" class="fadeIn fourth" name="submit" value="Sign In">


                    <li><p>Already have an Account?<a href="customer_log.php"> Log In</a></p></li>
                        




    </form>

    </ul>
 </dir>


    
</body>

</html>
