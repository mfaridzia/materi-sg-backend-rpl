<form action="" method="POST">
    <pre>
        <h2> Silahkan Login </h2>

        Username: <input type="text" name="username">
        Password: <input type="password" name="password">
        <button type="submit" name="login"> Login </button>
    </pre>
</form>

<?php
    session_start();
    include 'koneksi.php';
    if(isset($_POST['login'])) {

        $user = $_POST['username'];
        $pass = md5($_POST['password']);

        $query = $db->query("SELECT * FROM users WHERE username='$user' AND password='$pass'");
        $dataUser  = $query->num_rows;
        if($dataUser > 0) {
            $_SESSION['username'] = $user;
            header("location:dashboard.php");
        } else {
            echo "Login gagal!!";
        }

    }
?>