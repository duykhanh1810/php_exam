<?php 
    session_start();
    if(isset($_GET['logout'])){
        session_destroy();
        header("location:part3.php");
    }
?>