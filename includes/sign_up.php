<?php
    include_once 'dbh.php';
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $birth =  mysqli_real_escape_string($conn,$_POST['birth']);
    $secure_id =  mysqli_real_escape_string($conn,$_POST['secure_id']);
    $phone_number =  mysqli_real_escape_string($conn,$_POST['phone_number']);
    $address =  mysqli_real_escape_string($conn,$_POST['address']);
    $email =  mysqli_real_escape_string($conn,$_POST['email']);
    $password =  mysqli_real_escape_string($conn,$_POST['password']);

    $password = md5($password);

    $sql =  "INSERT INTO `teacher`(`name`, `password`, `birth`, `secure_id`, `address`, `phone_number`, `regist_time`, `email`) VALUES ('".$name."','".
    $password."','".$birth."','".$secure_id."','".$address."','".$phone_number."',".date("Y").",'".$email."');";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: ../login.php?signup=successful");
    }else{
        header("Location: ../login.php?signup=false");
    }
?>