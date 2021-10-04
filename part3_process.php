<?php 
    require_once ('part3_connect.php');
    session_start();

    if(isset($_POST['Login'])){
        if(empty($_POST['USERNAME']) || empty($_POST['PASSWORD_HASH'])){
            header("location: part3.php?Empty=Please fill in the blank");
        }else{
            $query = "select * from abc12users where USERNAME='".$_POST['USERNAME']."' and PASSWORD_HASH='".$_POST['PASSWORD_HASH']."'" ;
            $result =mysqli_query($conn,$query);
            if(mysqli_fetch_assoc($result)){
                $_SESSION['User']=$_POST['USERNAME'];
                header("location:part3_welcome.php");
            }else{
                header("location:part3.php?Invalid=Please enter correct Username and Password");
            }
        }
    }else{
        echo "Not Working<br>";
    }
?>

<?php 
    if(!empty($_POST['remember'])){
        setcookie("username",$_POST['USERNAME'],time()+3600);
        setcookie("password",$_POST['PASSWORD_HASH'],time()+3600);
        echo "Cookies set success full<br>";
    }else{
        setcookie("username","");
        setcookie("password","");
        echo "Cookies not set<br>";
    }
?>