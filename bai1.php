<?php 
    $conn = new mysqli('localhost','root','','');

    if($conn->connect_error){
        die("Connect error<br>" .$conn->connect_error);
    }

    $sql = "CREATE DATABASE abc12";
    
    if($conn->query($sql)===TRUE){
        echo "Create database success<br>";
    }else{
        echo "Create database failed<br>";
    }

    $conn->close();
?>


<?php 
    $conn = new mysqli('localhost','root','','abc12');
    if($conn->connect_error){
        die('Connect error<br>'.$conn->connect_error);
    }

    $sql = "CREATE TABLE abc12users(
        USERNAME VARCHAR(40) UNIQUE,
        PASSWORD_HASH CHAR(40),
        PHONE VARCHAR(10)
    )";
     
     if($conn->query($sql)===TRUE){
        echo "Create table success<br>";
    }else{
        echo "Create table failed<br>";
    }

    $conn->close();
?>