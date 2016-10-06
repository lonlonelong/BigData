<!DOCTYPE html>
<html>
<head>
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
<div class="header">
  <div class="wrap clearfix">
  	<div class="head_logo fl">
  	    <a href="<?= site_url('home/index')?>" class="logo"><img src="<?= site_url('images/logo.png')?>"></a>
  	</div>
    <div class="fr">
        <div class="head_side fl">
            <ul class="main_nav clearfix">
                <li class="fl"><a href="<?= site_url('home/index')?>">MDA大赛</a>
                </li>
                <li class="fl">
                    <a href="<?= site_url('home/rule')?>">大赛规则</a>
                </li>
                <li class="fl"><a href="#">比赛数据</a></li>
                <li class="fl"><a href="<?= site_url('project/index')?>">报名通道</a>
                </li>
            </ul>
        </div>
        <div class="head_login fr">
            <span class="ueser_box fl">
                <i class="photo"></i>
	            <img class="header_img" src="<?= site_url('images/head-photo.png')?>" width="32" height="32"/>	
            </span>		
            <p class="fl ueser_cnt">
            	 <?php if(!isset($user)): ?>
            	<a href="<?= site_url('account/login')?>">登录</a>
            	<span>|</span>
            	<a href="<?= site_url('account/register')?>">注册</a>
            <?php endif; ?>
            <!-- 如果用户已经登陆，这边需要显示email，点击能够跳转到个人后台 -->
            <?php if(isset($user)): ?>
            	<a href="<?= site_url('account/personal')?>"><?=$user['email']?></a>
            	<span>|</span>
            	<a href="<?= site_url('account/log_out')?>">注销</a>
           	<?php endif; ?>
            </p>
        </div>
    </div>
  </div>
</div>
<!-- 规则内容 -->
<div class="content">
	<div class="wrap">
		<div class="rule-con-top">
			<h1>大赛规则</h1>
			<p>详尽规则确保大赛公平·同时发挥你最佳水准</p>
		</div>
		<div class="rule-content-main">
			<div class="rule-content clearfix">
			    <div class="rule-title clearfix">
			    	<div class="rule-con-title">
					    <h2>关于参赛团队</h2>
				    </div>
				    <div class="rule-con-tit-line">
				        <hr>
				    </div>
			    </div>
			    <div class="rule-con-list">
			    	<div class="rule-con-content">
			    		<p>1. 参赛团队应至少由一人组成，参赛人员的年龄、国籍不限，一名参赛人员仅允许参与一支参赛队伍。</p>
			    	</div>
			    	<div class="rule-con-content">
			    		<p>2. 所有参赛团队应在2016年8月21日23:59前在大赛竞赛平台上完成报名。</p>
			    	</div>
			    	<div class="rule-con-content">
			    		<p>3. 直接参与大赛策划、组织、技术服务提供、评审的雇员、专家及其直系亲属不得参加大赛。</p>
			    	</div>
			    	<div class="rule-con-content">
			    		<p>4. 进入复赛的比赛团队应按要求提供每一个参赛人员的个人身份信息和相应身份证件（未满18周岁的参赛者需额外提供监护人身份信息和身份证件），参赛者应当保证身份信息的真实性。大赛组织方承诺个人信息仅用于赛事数据授权与奖金发放，对其中所有涉及个人隐私的内容予以保密，并将在比赛后销毁。</p>
			    	</div>
			    </div>
			    <div class="rule-con-img">
			    	<img src="#">
			    </div>
			</div>
			<div class="rule-content clearfix">
			    <div class="rule-title clearfix">
			        <div class="rule-con-tit-line">
					    <hr>
				    </div>
			    	<div class="rule-con-title">
					    <h2>关于初赛创意</h2>
				    </div>
			    </div>
			    <div class="rule-con-img">
			    	<img src="#">
			    </div>
			    <div class="rule-con-list">
			    	<div class="rule-con-content">
			    		<p>1. 2016年SODA大赛初赛阶段要求参赛团队提交“城市安全”主题下的创意解决方案。初赛创意方案以简报（PPT）形式呈现，以PDF格式提交，所有素材包括但不限于文字、图片、视频、网站等均需为中文。</p>
			    	</div>
			    	<div class="rule-con-content">
			    		<p>2. 大赛作品提交采取匿名形式，请勿在提交的材料中包含任何可以使评委直接识别参赛团队、团队个人或其所代表企业的信息。若经2名以上评委判定，参赛团队作品中确实有包含上述违规身份信息的，该团队作品将不再纳入评审计分，该参赛团队直接取消参赛资格。</p>
			    	</div>
			    	<div class="rule-con-content">
			    		<p>3. 为了便于评委了解创意方案，提交创意方案时请参考以下格式：作品摘要：对作品做整体介绍；问题需求：描述作品适用的应用场景，清楚说明所解决的问题和受众；数据使用：清楚列举拟使用到的比赛专用数据、Datashanghai 已开放数据、自带数据，并初步说明数据的整合应用方案；解决方案：针对问题需求，初步说明技术解决方案；应用成果：说明作品的预期应用成果；价值导向：说明作品的潜在商业价值和社会价值。</p>
			    	</div>
			    </div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
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