<?php 
    $serverName="localhost";
    $dbusername="root";
    $password="";
    $dbname="abc123";

    $conn = new mysqli($serverName,$dbusername,$password,$dbname);
    if(!$conn){
        die("Connect error<br>".$conn->connect_error);
    }

    
    $sql = "SELECT USERNAME,PASSWORD_HASH,PHONE from abc12users";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "User Name: " .$row['USERNAME']. "  Password: " .sha1($row['PASSWORD_HASH']). "  Phone: " .$row['PHONE']. "<br>";
        }
    }else{
        echo "0 Result<br>";
    }
    $conn->close();
?>

