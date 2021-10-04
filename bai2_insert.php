<html>
<body>
<script type="text/javascript">
        if (window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "abc12";
    $username = "";
    $password_hash = "";
    $phone = "";

    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['phone'])){
        $username = $_POST['username'];
        $password_hash = $_POST['password'];
        $phone = $_POST ['phone'];
    }

    $conn = new mysqli($serverName, $userName, $password, $dbName);
    if($conn->connect_error){
        echo "Connect error<br>";
    }else{
        $sqlInsert = "Insert into abc12users(USERNAME, PASSWORD_HASH, PHONE) values ('$username', '$password_hash', '$phone')";
        $result = $conn->query($sqlInsert);
        echo "<br>" .$result;
    }
?>
<form action="" method="POST">
    <p> Registion form </p>
    UserName :<input type ="text" name="username"><br>
    Password :<input type ="password" name="password"><br>
    Phone :<input type="text" name="phone"><br>
    <input type="submit" name="submit" value="Registation">
</form>
<?php
    include "./bai2.php";
    ?>
</body>

</html>