<?php
    include_once 'includes/dbh.php'
?>

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <title>教師登入系統</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class='login_body'>
    <div class='login_flex'> 
        <div class="login_form shadow">
            <h1>教師登入</h1>
            <form action='includes/login.inc.php'  method="post"    autocomplete="on">
                <input type="email" class="input"   name="email"placeholder="帳號"><br>

                <input type="password" class="input" name="password"    placeholder="密碼"><br>

                <button type="button" class="button_signup" value="註冊 "   onclick="location.href='regist.php'">註冊</button>

                <button type="submit" class="button_login"  value="Submit">登入</button><br>
            </form>  
        </div>
    </div>
</body>
</html>