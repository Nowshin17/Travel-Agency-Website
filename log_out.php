<!DOCTYPE html>
<html>
<?php
    session_start();
    include('connection.php');
    /*nothing happen*/
    
    
    session_destroy();
    header("Location:index.php") ;
?>

</html>