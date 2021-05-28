<!DOCTYPE html>
<?php
include('connection.php');
?>
<html>
<head>
<meta charset="UTF-8">
    <title>registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/new.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.error {
	color: red;    
}
li {
  list-style-type: none;
}

body {
  background-image: url('Image/sajrk.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

</head>

<body >

    <?php
    $cust_name=$cust_email=$cust_password=$cust_address=$cust_phonel="";
    $bad=$clear="";
    $namerr=$emailerr=$passworderr=$adderr=$noerr="";
    $hasErrr = 0;

    if(isset($_POST['submit']))
    {



        if (empty($_POST["cust_name"]))
        {
            $namerr = "Name is required";
            $hasErrr = 1;
        }
        else{
          $customer_name = $_POST['cust_name'];
        }
        
        
    
        if (empty($_POST["cust_password"])){
            $passworderr = "password is required";
            $hasErrr = 1;

        }
        else{
            $customer_password = $_POST['cust_password'];
        }



        if (empty($_POST["cust_address"])){
            $adderr = "address is required";
            $hasErrr = 1;
        }
        else{
            $customer_address = $_POST['cust_address'];
        }
        


        if (empty($_POST["cust_phone"]))
        {

            $noerr = "Phone no is required";
            $hasErrr = 1;
        }
        else
        {
    
            $customer_phone = $_POST['cust_phone'];
            $regex = "/^(?:\+?88)?01[13-9]\d{8}$/";
    
            if (!preg_match($regex,  $customer_phone)) {
                
               $noerr = "Valid Bangladeshi mobile no. is required!"; 
               $hasErrr = 1;
            }
            else
            {
                $customer_phone = $_POST['cust_phone'];

            }
    
    
       
        }
        


        if (empty($_POST["cust_mail"]))
        {
            $emailerr = "Email is required";
            $hasErrr = 1;
           
        }
        else{
          
                
                // $customer_mail = $_POST['cust_mail'];

                $regex = "/^[a-z\d\._-]+@([a-z\d-]+\.)+[a-z]{2,6}$/i";

                $customer_mail = $_POST['cust_mail'];
        
                if (!preg_match($regex, $customer_mail)) 
                {
                    
                   $emailerr= "Kindly enter valid email id"; 
                   $hasErrr = 1;
                }
                
                else
                {
                    $sql_1 = "SELECT * FROM customer WHERE cust_mail = '$customer_mail'";
                    // if $sql_1 get value it will return some value means email exist otherwise insert value
                    $result = $conn->query($sql_1); 
                    
                    if($result->num_rows==0)
                    {
                        if($hasErrr == 0)
                        {
                    
                            $sql = "INSERT INTO customer(cust_name,cust_password,cust_address,cust_mail,cust_phone) VALUES ('$customer_name','$customer_password','$customer_address','$customer_mail','$customer_phone')";
                        
                            if ($conn->query($sql) == TRUE) 
                            {
                                echo "New record created successfully<br>";       
                            }
                            
                                header("Location: customer_log.php") ;
                        }

                    }


                    else
                    {
                        $emailerr = "This mail is already taken<br>";
                    }
                }
            }



    }



    ?>

    




<form action="customer_reg.php" method=post>

    <div class="wrapper fadeInDown pad">
            <div id="formContent">


                <div class="fadeIn first">
                    <h5>User Sign Up</h5>
                </div>


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
                        

            </div>
    </div>


    </form>

    

    
</body>

</html>
