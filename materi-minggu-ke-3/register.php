<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <div class="login">
        <h2> Register </h2>
        <form action="" method="POST">
        <div>
            <input type="text" name="username" required>
            <input type="password" name="password" required>
            <button type="submit" name="register"> Register </button>
        </div>
    </form>
    </div>

    <?php

        require_once('config/koneksi.php');
        if(isset($_POST['register'])) {
            $user = $_POST['username'];
            $pass = $_POST['password'];

            $options = array("cost"=>4);
            $hashPassword = password_hash($pass,PASSWORD_BCRYPT,$options);

            $insert = $db->query("INSERT INTO users(username, password, typeuser)VALUES('$user', '$hashPassword', 'user')");
            if($insert) {
                echo "sukses REGISTER";
            } else {
                echo "gagal REGISTER";
            }
        }

    ?>

</body>
</html>