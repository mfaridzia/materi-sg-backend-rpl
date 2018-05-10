<?php  
    session_start();
    if(isset($_SESSION['username'])) {
       echo "ente login sebagai : " . $_SESSION['username'];
     } else {
        echo "login dulu bro!";
    }

?>

<a href="logout.php"> Logout </a>


