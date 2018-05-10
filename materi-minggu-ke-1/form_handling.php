
<?php

if(isset($_POST['login'])) {
    $u = 'fulana';
    $p = '1234';

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == $u && $pass == $p) {
        echo "Login sukses cuy!";
    } else {
        echo "Login Gagal!";
    }
}

?>

<form action="form_handling.php" method="POST">
    Username : <input type="text" name="username">
    Passwrod: <input type="password" name="password">
    <button type="submit" name="login"> Login </button>
</form>

