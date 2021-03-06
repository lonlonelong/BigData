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
<div class="header head-fixed">
  <div class="wrap clearfix">
  	<div class="head_logo fl">
  	    <a href="<?= site_url('bigdata/index')?>" class="logo"><img src="<?= site_url('images/logo.png')?>"></a>
  	</div>
    <div class="fr">
        <div class="head_side fl">
            <ul class="main_nav clearfix">
                <li class="fl"><a href="<?= site_url('bigdata/index')?>">MDA大赛</a>
                </li>
                <li class="fl">
                    <a href="#">大赛规则</a>
                </li>
                <li class="fl"><a href="#">比赛数据</a></li>
                <li class="fl"><a href="<?= site_url('bigdata/enter')?>">报名通道</a>
                </li>
            </ul>
        </div>
        <div class="head_login fr">
            <span class="ueser_box fl">
                <i class="photo"></i>
	            <img class="header_img" src="<?= site_url('images/head-photo.png')?>" width="32" height="32"/>	
            </span>		
            <p class="fl ueser_cnt">
            <?php if(!isset($name)): ?>
            	<a href="<?= site_url('account/login')?>">登录</a><span>|</span><a href="<?= site_url('account/register')?>">注册</a>
            <?php endif; ?>
            </p>
        </div>
    </div>
  </div>
</div>
<!-- 首页宣传图 -->
<div class="content-top">
	<div class="wrap">
		<div class="host-unit">
			<span>主办单位：</span>
			<span class="mr30">
			    <img src="#">
			    <b>上海市教育委员会</b>
            </span>
            <em>|</em>
            <span>承办单位：</span>
            <span>
            	<img src="#">
            	<b>上海市气象局</b>
            </span>
            <span>
            	<img src="#">
            	<b>华东师范大学</b>
            </span>
		</div>
	</div>
</div>
<!-- 首页内容 -->
<div class="content-main">
	<div class="wrap clearfix">
		<div class="content-box">
			<div class="content-box-title clearfix">
				<h2>大赛背景</h2>
			</div>
			<div class="content-box-content">
				<p>随着各行各业对气象信息的需求越来越大，社会各方对气象数据服务的个性化和精细化要求也在不断提升，如何开发气象数据在不同领域的应用，更好的支持大众创业、万众创新，服务民计民生，是气象大数据面临的迫切需求。</p>
				<br>
                <p>为了更深入地挖掘气象资源的价值，华东师范大学联合上海市教委、上海市气象局共同举办本次大赛，为广大参赛者开放出上海市乃至全国的地面历史气象数据，希望通过众多数据爱好者，气象行业研究人员的智慧与力量，推动气象数据与其他各行各业数据的有效结合，寻求气象要素之间、以及气象与其它事物之间的相互关系，让气象数据发挥更多元化的价值，催生出更多贴近民生、贴近生产、贴近实际应用的气象大数据方案。</p>
			</div>
		</div>
		<div class="content-box">
			<div class="content-box-title clearfix">
				<h2>大赛日程</h2>
			</div>
			<div class="content-box-content clearfix">
				<div class="schedule-box fl">
                    <div class="number-1"></div>
                    <div class="block-content">
                    	<div class="block-top">
                    		<div class="block-icon1"></div>
                    		<div class="block-head">
                    			<h2>报名组队及创意提交</h2>
                    			<p>2016年10月10日-2016年10月30日</p>
                    		</div>
                    	</div>
                    	<p class="block-text">基于比赛网站和相关平台链接提供的数据样本进行初步创意，并按照要求提交初赛创意方案。</p>
                    </div>
				</div>
				<div class="schedule-box fr">
                    <div class="number-1"></div>
                    <div class="block-content">
                    	<div class="block-top">
                    		<div class="block-icon1"></div>
                    		<div class="block-head">
                    			<h3>报名组队及创意提交</h3>
                    			<p class="desc trans done">2016年10月10日-2016年10月30日</p>
                    		</div>
                    	</div>
                    	<p class="block-text trans done">基于比赛网站和相关平台链接提供的数据样本进行初步创意，并按照要求提交初赛创意方案。</p>
                    </div>
				</div>
				<div class="schedule-box fl">
                    <div class="number-1"></div>
                    <div class="block-content">
                    	<div class="block-top">
                    		<div class="block-icon1"></div>
                    		<div class="block-head">
                    			<h2>报名组队及创意提交</h2>
                    			<p>2016年10月10日-2016年10月30日</p>
                    		</div>
                    	</div>
                    	<p class="block-text">基于比赛网站和相关平台链接提供的数据样本进行初步创意，并按照要求提交初赛创意方案。</p>
                    </div>
				</div>
				<div class="schedule-box fr">
                    <div class="number-1"></div>
                    <div class="block-content">
                    	<div class="block-top">
                    		<div class="block-icon1"></div>
                    		<div class="block-head">
                    			<h3>报名组队及创意提交</h3>
                    			<p class="desc trans done">2016年10月10日-2016年10月30日</p>
                    		</div>
                    	</div>
                    	<p class="block-text trans done">基于比赛网站和相关平台链接提供的数据样本进行初步创意，并按照要求提交初赛创意方案。</p>
                    </div>
				</div>
				<div class="schedule-box fl">
                    <div class="number-1"></div>
                    <div class="block-content">
                    	<div class="block-top">
                    		<div class="block-icon1"></div>
                    		<div class="block-head">
                    			<h2>报名组队及创意提交</h2>
                    			<p>2016年10月10日-2016年10月30日</p>
                    		</div>
                    	</div>
                    	<p class="block-text">基于比赛网站和相关平台链接提供的数据样本进行初步创意，并按照要求提交初赛创意方案。</p>
                    </div>
				</div>
				<div class="schedule-box fr">
                    <div class="number-1"></div>
                    <div class="block-content">
                    	<div class="block-top">
                    		<div class="block-icon1"></div>
                    		<div class="block-head">
                    			<h3>报名组队及创意提交</h3>
                    			<p class="desc trans done">2016年10月10日-2016年10月30日</p>
                    		</div>
                    	</div>
                    	<p class="block-text trans done">基于比赛网站和相关平台链接提供的数据样本进行初步创意，并按照要求提交初赛创意方案。</p>
                    </div>
				</div>
			</div>
		</div>
		<div class="content-box">
			<div class="content-box-title clearfix">
				<h2>奖项设置</h2>
			</div>
			<div class="content-box-content">
			    <div class="medal-box clearfix">
			    	<div class="img-box">
			    		<img src="<?= site_url('images/jp.png')?>">
			    		<span>1名</span>
			    	</div>
			    	<div class="img-box">
			    		<img src="<?= site_url('images/yp.png')?>">
			    		<span>3名</span>
			    	</div>
			    	<div class="img-box">
			    		<img src="<?= site_url('images/tp.png')?>">
			    		<span>8名</span>
			    	</div>
			    	<div class="img-box">
			    		<img src="<?= site_url('images/zz.png')?>">
			    		<span>15名</span>
			    	</div>
			    </div>
			</div>
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
<!-- 侧边弹框 -->
<div class="side-tool-bar" style="display: block;">
	<ul>
		<li>
			<div class="tool-bar-show" style="cursor: pointer;">
				<a href="#">马上<br>报名<br>参赛</a>
			</div>
		</li>
		<li class="tool-top-link">
			<div class="tool-bar-show back-top" style="cursor: pointer;">
				<a href="#">
					<span>返回顶部</span>
				</a>
			</div>
		</li>
	</ul>
</div>
<script type="text/javascript">
		$(function() {
			$(window).scroll(function() {
				if ($(this).scrollTop() > 510) {
					$(".side-tool-bar").show();
				} else {
					$(".side-tool-bar").hide();
				}
			});
			$(".tool-bar-show").click(function() {
				if (!$(this).hasClass("back-top")) {
					location.href = $(this).next().attr("href");
				}
			});
		});
	</script>
</body>
</html>
