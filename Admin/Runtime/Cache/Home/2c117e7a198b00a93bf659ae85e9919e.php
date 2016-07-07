<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Login</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="/Public/assets/i/favicon.png">
  <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>网站后台登录系统</h1>
    <p><br/>Website Manage System</p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>登录</h3>
    <hr>
    <form method="post" class="am-form">
      <label for="text">用户名:</label>
      <input type="text" name="" id="username" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="" id="password" value="">
      <br>

      <br />
      <div class="am-cf">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
      </div>
    </form>
    <hr>
    <p>© 2016 </p>
  </div>
</div>
</body>
</html>