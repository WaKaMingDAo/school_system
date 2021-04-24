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
</head>
<body>
    <h1 class="col-md-12">教師登入</h1>
    <!--form-->
    <div class="card">
        <div class="card-body">
            <form target="_self" method="post" autocomplete="on" class="jumbotron">
                <label for="email">帳號</label><br>
                <input type="email" name="email"><br>
                <label for="password">密碼</label><br>
                <input type="password" name="password"><br>
                <button type="button" class="btn btn-link">註冊</button>
                <button type="button" class="btn btn-primary" value="Submit">登入</button><br>
                </form>
        </div>
    </div>
    
</body>
</html>