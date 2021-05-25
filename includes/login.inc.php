<?php
    include_once 'dbh.php';

    $email =  mysqli_real_escape_string($conn,$_POST['email']);
    $password =  mysqli_real_escape_string($conn,$_POST['password']);
    
    $password = password_hash($password,PASSWORD_DEFAULT);
    $sql = "SELECT * FROM `teacher` WHERE `email` = '".$email."';";

    $result = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($result);
    if(!$result){
        header("Location: ../login.php?login=no_data");
    }
    else if($result['password'] == $password){
        header("Location: ../login.php?login=successful");
    }else{
        header("Location: ../login.php?login=false");
    }

?>