<?php  
    session_start();
    if(isset($_SESSION['username'])) {
       echo "Anda login sebagai : " . $_SESSION['username'];
     } else {
        echo "Silahkan login terlebih dahulu!";
    }

?>

<a href="logout.php"> Logout </a>


