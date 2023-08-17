<?php
    include('config.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($connection, "SELECT * FROM tb_account WHERE username='$username' AND password='$password'");
    if(mysqli_num_rows($query)==1){
        echo $username;
        echo $password;
    }
    else{
        echo 'Login Tidak Bisa';
    }
    echo $username;
    echo $password;
?>