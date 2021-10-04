<?php 
    session_start();
    if(isset($_SESSION['User'])){
        echo "Welcome " .$_SESSION['User']."<br>";
        echo '<a href="part3_logout.php?logout">Log Out</a>';
    }
    
?>