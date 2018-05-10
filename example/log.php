<?php
    session_start();
    if(isset($_POST['login'])) {

        $user = $_POST['username'];
        $pass = md5($_POST['password']);

        $query = $db->query("SELECT * FROM users WHERE username='$user' AND password='$pass'");
        $data  = $query->fetch_array();
        //cek dulu lagi cuy
        if(password_verify($pass, $data['password'])) {
            // set session nya
            $_SESSION['typeuser'] = $data['typeuser'];
            $_SESSION['username'] = $data['username'];
            if($_SESSION['typeuser'] == 'admin') {
                echo "Ente login sebagai admin cuy!";
            } else {
                echo "Ente login sebagai user bro!";
            }
        }

    }
?>