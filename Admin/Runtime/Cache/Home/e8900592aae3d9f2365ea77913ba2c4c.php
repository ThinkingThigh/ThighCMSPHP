<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>文章添加</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="/Public/Admin/lib/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="/Public/Admin/stylesheets/theme.css">
    <link rel="stylesheet" href="/Public/Admin/lib/font-awesome/css/font-awesome.css">

    <script src="/Public/Admin/lib/jquery-1.7.2.min.js" type="text/javascript"></script>

    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
        <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <!--
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>
                    -->
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> Admin
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">我的账户</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">设置</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="<?php echo U('login/logout');?>">注销</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.html"><span class="first">Thigh</span> <span class="second">CMS</span></a>
        </div>
    </div>


        <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-dashboard"></i>控制台</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="index.html">首页</a></li>
            <li ><a href="NewsManage">文章管理</a></li>
            <li ><a href="NewsAdd">文章添加</a></li>
            <!--
            <li ><a href="media.html">Media</a></li>
            <li ><a href="calendar.html">Calendar</a></li>
            -->
            
        </ul>

        <!--
        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>Account<span class="label label-info">+3</span></a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="sign-in.html">Sign In</a></li>
            <li ><a href="sign-up.html">Sign Up</a></li>
            <li ><a href="reset-password.html">Reset Password</a></li>
        </ul>

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Error Pages <i class="icon-chevron-up"></i></a>
        <ul id="error-menu" class="nav nav-list collapse">
            <li ><a href="403.html">403 page</a></li>
            <li ><a href="404.html">404 page</a></li>
            <li ><a href="500.html">500 page</a></li>
            <li ><a href="503.html">503 page</a></li>
        </ul>

        <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>Legal</a>
        <ul id="legal-menu" class="nav nav-list collapse">
            <li ><a href="privacy-policy.html">Privacy Policy</a></li>
            <li ><a href="terms-and-conditions.html">Terms and Conditions</a></li>
        </ul>

        <a href="help.html" class="nav-header" ><i class="icon-question-sign"></i>Help</a>
        <a href="faq.html" class="nav-header" ><i class="icon-comment"></i>Faq</a>
        -->
    </div>

    <form id="tab" method="post" action="/admin.php/Home/NewsAdd/Add">  
    <div class="content">
        
        <div class="header">
            
            <h1 class="page-title">文章添加</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.html">首页</a> <span class="divider">/</span></li>            <li><a href="NewsManage">文章管理</a> <span class="divider">/</span></li>
            <li class="active">文章添加</li>
        </ul>

        <div class="container-fluid">
            <div class="row-fluid">
                  
<div class="btn-toolbar">
  <input type="submit" value="提交" class="btn btn-primary">
    <!--<a href="#myModal" data-toggle="modal" class="btn">Delete</a>-->
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">内容编辑</a></li>
      <li><a href="#profile" data-toggle="tab">文章信息</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
    
      <script id="container" name="NewsContent" type="text/plain"></script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/Public/bdeditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/Public/bdeditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
    window.UEDITOR_CONFIG.initialFrameHeight=480;
    window.UEDITOR_CONFIG.imagePathFormat="/admin.php/Home/NewsAdd/bdupload/{yyyy}{mm}{dd}/{time}{rand:6}";
        var ue = UE.getEditor('container');
    </script> 
      </div>
      <div class="tab-pane fade" id="profile">
        <label>标题</label>
        <input type="text" name="NewsTitle" class="input-xxlarge">
        <label>关键词</label>
        <input type="text" name="Keywords" class="input-xxlarge">
        <label>页面描述</label>
        <textarea rows="3" name="Description" class="input-xxlarge"></textarea>
        <label>来源</label>
        <input type="text" name="Source" class="input-xxlarge">
        <label>分类</label>
        <select name="NewsClass1" id="NewsClass1" class="input-xlarge">
          <option value="0">请选择</option>
          <option value="1">一级分类1</option>
          <option value="2">一级分类2</option>
    </select>
    <select name="NewsClass2" id="NewsClass2" class="input-xlarge">
          <option value="0">请选择</option>
          <option value="1">二级分类1</option>
          <option value="2">二级分类2</option>
    </select>
    <label>排序</label>
        <input type="text" name="Istop" class="input-xxlarge">
    <label>封面图</label>
        <input type="file" name="PicUrl" id="pic">
   
      </div>
  </div>

</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Delete Confirmation</h3>
  </div>
  <div class="modal-body">
    
    <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
    <button class="btn btn-danger" data-dismiss="modal">Delete</button>
  </div>
</div>


                    
                    <footer>
                        <hr>
                        <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">ThighCMS</a> by <a href="#" target="_blank">ThinkingThigh</a></p>

                        <p>&copy; 2016 <a href="#" target="_blank">ThinkingThigh</a></p>
                    </footer>
                    
            </div>
        </div>
    </div>
     </form>


    <script src="/Public/Admin/lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>