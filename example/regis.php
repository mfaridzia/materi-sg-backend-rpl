<?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $options = array("cost"=>4);
    $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
    
    $sql = "insert into users (username, password, typeuser) value('$username', '$hasPassword', 'user')";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "Registration successfully";
    }
}
?>