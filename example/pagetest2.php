<?php
    session_start();
    if(isset($_SESSION['username'])) {
        echo "mantap!!"; // ini kalo udah login
    } else {
        echo "login dulu lah cuy!"; // ini kalo belum login 
    }
?>