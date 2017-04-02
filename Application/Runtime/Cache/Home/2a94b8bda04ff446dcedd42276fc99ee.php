<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
<head>
    <title> 用户登录界面</title>
    <meta content="width=device-with,inital-scale=1,maximum-scale=1,user-scalable=no" name="viewport">
</head>

<body >
    <div class="login-page">
        <div class="login-box-body">
            <p class="login-box-msg">登入系统</p>
            <input action="/UserMangerent/" method="post">
                < class="form-group hash-feedback">
                    <input type="text" placeholder="用户名"><?php echo ($username); ?>
                </div>
                <div>
                    <input type="password" name="password" class="form-control" placeholder="密码"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">提交</button>
                </div>
            </form>
        </div>
    </div>
</body>