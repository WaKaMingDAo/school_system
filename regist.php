<?php
    include_once 'includes/dbh.php'
?>



<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <title>教師註冊系統</title>
</head>
<body>

    <h1 class="col-md-12">教師註冊</h1>
    <!--form-->
    <div class="card">
        <div class="card-body">
            <form action='includes/sign_up.php' method="post" autocomplete="on" class="jumbotron">
                <input name="name" placeholder="姓名"><br>
                <input type="date" name="birth" ><br>
                <input type="text" name="secure_id" placeholder="身分證"><br>
                <input type="text" name="phone_number" placeholder="電話"><br>
                <input type="text" name="address" placeholder="地址"><br>
                <input type="email" name="email" placeholder="email"><br>
                <input type="password" name="password" placeholder="密碼"><br>
                <button type="submit" class="btn btn-primary" >註冊</button><br>
            </form>
        </div>
    </div>
    
</body>
</html>