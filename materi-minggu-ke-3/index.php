<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <div class="login">
        <h2> Login </h2>
        <form action="" method="POST">
        <div>
            <input type="text" name="username" required>
            <input type="password" name="password" required>
            <button type="submit" name="login"> Login </button>
        </div>
    </form>
    </div>

    <?php
        session_start();
        require_once('config/koneksi.php');
        if(isset($_POST['login'])) {
            
            $user = $_POST['username'];
            $pass = $_POST['password'];

            $query = $db->query("SELECT * FROM users WHERE username='$user'");
            $data  = $query->fetch_array();

            if(password_verify($pass, $data['password'])) {
                // set session nya
                $_SESSION['typeuser'] = $data['typeuser'];
                $_SESSION['username'] = $data['username'];
                if($_SESSION['typeuser'] == 'admin') {
                    header("location:admin/index.php");
                } else {
                    header("location:user/index.php");
                }
            } else {
                echo "login gagal!";
            }
    
        }

    ?>

</body>
</html>
