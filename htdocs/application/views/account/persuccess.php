<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>上海市高校“气象+大数据”应用创新大赛</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="stylesheet" type="text/css" href="<?= site_url('css/reset.css')?>">
<link rel="stylesheet" type="text/css" href="<?= site_url('css/main.css')?>">
<script src="<?= site_url('js/jquery-1.11.3.min.js')?>" type="text/javascript" charset="utf-8"></script>
<script src="<?= site_url('js/jquery.SuperSlide.2.1.1.js')?>"></script>
</head>
<body>
<!--头部-->
<style>
.header_img{border-radius:100%;}
.ueser_cnt a.u-name-msg {position:relative;padding-right:35px;}
.ueser_cnt a .msg-tag {height:15px;line-height:15px;color:#fff;font-size:12px;padding:0 5px;border-radius:8px;background:#f00;display:inline-block;position:absolute;right:-10px;top:-8px;}
</style>
<!--头部-->
<div class="header">
	<div class="wrap clearfix">
		<div class="logo-box">
			<h1 class="logo"> 
				<a href="<?= site_url('home/index')?>"><img src="<?= site_url('images/logo.png')?>"></a> 
			</h1>
			<h2 class="logo-left">
	            <a href="<?= site_url('account/register')?>"><img src="<?= site_url('images/logo-regist.png')?>"></a>
	        </h2>	
		</div>	
		<div class="head_login fr">
            <span class="ueser_box fl">
                <i class="photo"></i>
	            <img class="header_img" src="<?= site_url('images/head-photo.png')?>" width="32" height="32"/>	
            </span>		
            <p class="fl ueser_cnt">
            	<a href="<?= site_url('account/personal')?>"><?= $user['email']?></a><span>|</span><a href="<?= site_url('account/log_out')?>">退出</a>
            </p>
        </div>
	</div>
</div>
<!--内容-->
<div class="reg-success">
	<div class="wrap clearfix">
		<div class="reg-success-title">
			<h3><?= $user['user_fullname']?>，您已完善个人资料成功!</h3>
		</div>
		<div class="info-complete">
			<div class="go-complete">
				<a href="<?= site_url('project/index')?>" class="complete-pic">
				<div class="complete-head">赶紧去创建自己的项目吧！</div>
				<div class="complete-img"><img src="<?= site_url('images/reg-success1.png')?>" class="pic"></div>
				<div class="complete-foot"><p>创建团队项目</p></div></a>
			</div>
		</div>
		<div class="reg-success-foot">
			暂不创建项目,<a href="<?= site_url('home/index')?>">回到主页</a>
		</div>
	</div>
</div>
<!-- 网页尾部 -->
<div class="footer">
    <div class="wrap clearfix">
        <div class="foot-info">
            <div class="foot-copyright">
                <p>主管部门：华东师范大学</p>
                <p>联系方式：12345678901</p>
            </div>
        </div>
        <div class="foot-right">
            <ul>
                <li>
                    <div class="a">
                        <img src="#">
                    </div>
                    <div class="b">大赛官方微信号</div>
                </li>
                <li>
                    <div class="a">
                        <img src="#">
                    </div>
                    <div class="b">大赛官方微信号</div>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>