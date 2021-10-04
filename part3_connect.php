<?php 
    $conn = mysqli_connect("localhost","root","","abc12");
    if(!$conn){
        die("Connect error<br>".mysqli_error($conn));
    }
?>