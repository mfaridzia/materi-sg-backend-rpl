<<<<<<< HEAD
<?php 
    session_start();
    if(isset($_SESSION['username'])) {
        if($_SESSION['typeuser'] == 'admin') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
</head>
<body>

    <?php
        //require_once('../config/koneksi.php');
        echo "ente login sebagai : " . $_SESSION['username'];
    ?>
    
    <a href="logout.php"> Logout </a>

</body>
</html>

<?php
        } else {
            header("location:../index.php");
        }
    } else {
        echo "woy login dulu lah!";
    }
?>
=======
<?php 
    session_start();
    if(isset($_SESSION['username'])) {
        if($_SESSION['typeuser'] == 'admin') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
</head>
<body>

    <?php
        //require_once('../config/koneksi.php');
        echo "Anda login sebagai: " . $_SESSION['username'];
    ?>
    
    <a href="logout.php"> Logout </a>

</body>
</html>

<?php
        } else {
            header("location:../index.php");
        }
    } else {
        echo "Silahkan login terlebih dahulu!";
    }
?>
>>>>>>> 29b73664c2e5bd7326ab6ffa45d8b34eed940846
