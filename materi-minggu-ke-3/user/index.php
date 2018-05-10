<<<<<<< HEAD
<?php  
    session_start();
    if(isset($_SESSION['username'])) {
       echo "ente login sebagai : " . $_SESSION['username'];
     } else {
        echo "login dulu bro!";
    }

?>

<a href="logout.php"> Logout </a>


=======
<?php  
    session_start();
    if(isset($_SESSION['username'])) {
       echo "Anda login sebagai : " . $_SESSION['username'];
     } else {
        echo "Silahkan login terlebih dahulu!";
    }

?>

<a href="logout.php"> Logout </a>


>>>>>>> 29b73664c2e5bd7326ab6ffa45d8b34eed940846
