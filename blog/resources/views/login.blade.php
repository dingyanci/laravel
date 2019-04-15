<?php
/**
 * Created by PhpStorm.
 * User: 丁延赐
 * Date: 2019/4/15
 * Time: 20:50
 */
?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>用户注册页面</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<form class="form-horizontal" role="form" action="mail" method="post">
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">名字</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="firstname"
                   placeholder="请输入名字">
        </div>
    </div>

    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="pwd" id="lastname"
                   placeholder="请输入密码">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">邮箱</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="mail" id="lastname"
                   placeholder="请输入邮箱">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">注册</button>
        </div>
    </div>
</form>
</body>
</html>