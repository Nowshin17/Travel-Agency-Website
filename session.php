<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select cust_name from customer where id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['cust_name'];
   
   // if(!isset($_SESSION['login_user'])){
   //    header("location: login.php");
   //    die();
   // }
?>