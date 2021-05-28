<?php
    include_once 'dbh.php';

    $email =  mysqli_real_escape_string($conn,$_POST['email']);
    $password =  mysqli_real_escape_string($conn,$_POST['password']);
    
    $password = md5($password);
    $sql = "SELECT * FROM `teacher` WHERE `email` = '".$email."';";

    $result = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($result);
    if(!$result){
        header("Location: ../login.php?error=no_data");
    }
    else if($password == $result['password']){
        header("Location: ../login.php?msg=successful");
    }else{
        header("Location: ../login.php?error=false".$result['password']);
    }

    


?>