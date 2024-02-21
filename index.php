<!-- 灯笼代码 -->
<meta charset="utf-8">
<div class="deng-box2">
    <div class="deng">
        <div class="xian">
        </div>
        <div class="deng-a">
            <div class="deng-b">
                <div class="deng-t">年</div>
            </div>
        </div>
        <div class="shui shui-a">
            <div class="shui-c">
            </div>
            <div class="shui-b"></div>
        </div>
    </div>
</div>
<div class="deng-box3">
    <div class="deng">
        <div class="xian">
        </div>
        <div class="deng-a">
            <div class="deng-b">
                <div class="deng-t">新</div>
            </div>
        </div>
        <div class="shui shui-a">
            <div class="shui-c"></div>
            <div class="shui-b">
            </div>
        </div>
    </div>
</div>
<div class="deng-box1">
    <div class="deng">
        <div class="xian">
        </div>
        <div class="deng-a">
            <div class="deng-b">
                <div class="deng-t">乐</div>
            </div>
        </div>
        <div class="shui shui-a">
            <div class="shui-c"></div>
            <div class="shui-b"></div>
        </div>
    </div>
</div>
<div class="deng-box">
    <div class="deng">
        <div class="xian">
        </div>
        <div class="deng-a">
            <div class="deng-b">
                <div class="deng-t">快</div>
            </div>
        </div>
        <div class="shui shui-a">
            <div class="shui-c">
            </div>
            <div class="shui-b"></div>
        </div>
    </div>
</div>
<style type="text/css">
    .deng-box {
        position: fixed;
        top: -40px;
        right: 150px;
        z-index: 9999;
        pointer-events: none;
    }
    .deng-box1 {
        position: fixed;
        top: -30px;
        right: 10px;
        z-index: 9999;
        pointer-events: none
    }
    .deng-box2 {
        position: fixed;
        top: -40px;
        left: 150px;
        z-index: 9999;
        pointer-events: none
    }
    .deng-box3 {
        position: fixed;
        top: -30px;
        left: 10px;
        z-index: 9999;
        pointer-events: none
    }
    .deng-box1 .deng,
    .deng-box3 .deng {
        position: relative;
        width: 120px;
        height: 90px;
        margin: 50px;
        background: #d8000f;
        background: rgba(216, 0, 15, .8);
        border-radius: 50% 50%;
        -webkit-transform-origin: 50% -100px;
        -webkit-animation: swing 5s infinite ease-in-out;
        box-shadow: -5px 5px 30px 4px #fc903d
    }
    .deng {
        position: relative;
        width: 120px;
        height: 90px;
        margin: 50px;
        background: #d8000f;
        background: rgba(216, 0, 15, .8);
        border-radius: 50% 50%;
        -webkit-transform-origin: 50% -100px;
        -webkit-animation: swing 3s infinite ease-in-out;
        box-shadow: -5px 5px 50px 4px #fa6c00
    }
    .deng-a {
        width: 100px;
        height: 90px;
        background: #d8000f;
        background: rgba(216, 0, 15, .1);
        margin: 12px 8px 8px 8px;
        border-radius: 50% 50%;
        border: 2px solid #dc8f03
    }
    .deng-b {
        width: 45px;
        height: 90px;
        background: #d8000f;
        background: rgba(216, 0, 15, .1);
        margin: -4px 8px 8px 26px;
        border-radius: 50% 50%;
        border: 2px solid #dc8f03
    }
    .xian {
        position: absolute;
        top: -20px;
        left: 60px;
        width: 2px;
        height: 20px;
        background: #dc8f03
    }
    .shui-a {
        position: relative;
        width: 5px;
        height: 20px;
        margin: -5px 0 0 59px;
        -webkit-animation: swing 4s infinite ease-in-out;
        -webkit-transform-origin: 50% -45px;
        background: orange;
        border-radius: 0 0 5px 5px
    }
    .shui-b {
        position: absolute;
        top: 14px;
        left: -2px;
        width: 10px;
        height: 10px;
        background: #dc8f03;
        border-radius: 50%
    }
    .shui-c {
        position: absolute;
        top: 18px;
        left: -2px;
        width: 10px;
        height: 35px;
        background: orange;
        border-radius: 0 0 0 5px
    }
    .deng:before {
        position: absolute;
        top: -7px;
        left: 29px;
        height: 12px;
        width: 60px;
        content: " ";
        display: block;
        z-index: 999;
        border-radius: 5px 5px 0 0;
        border: solid 1px #dc8f03;
        background: orange;
        background: linear-gradient(to right, #dc8f03, orange, #dc8f03, orange, #dc8f03)
    }
    .deng:after {
        position: absolute;
        bottom: -7px;
        left: 10px;
        height: 12px;
        width: 60px;
        content: " ";
        display: block;
        margin-left: 20px;
        border-radius: 0 0 5px 5px;
        border: solid 1px #dc8f03;
        background: orange;
        background: linear-gradient(to right, #dc8f03, orange, #dc8f03, orange, #dc8f03)
    }
    .deng-t {
        font-family: 黑体, Arial, Lucida Grande, Tahoma, sans-serif;
        font-size: 3.2rem;
        color: #dc8f03;
        font-weight: 700;
        line-height: 85px;
        text-align: center
    }
    .night .deng-box,
    .night .deng-box1,
    .night .deng-t {
        background: 0 0 !important
    }
    @-moz-keyframes swing {
        0% {
            -moz-transform: rotate(-10deg)
        }
        50% {
            -moz-transform: rotate(10deg)
        }
        100% {
            -moz-transform: rotate(-10deg)
        }
    }
    @-webkit-keyframes swing {
        0% {
            -webkit-transform: rotate(-10deg)
        }
        50% {
            -webkit-transform: rotate(10deg)
        }
        100% {
            -webkit-transform: rotate(-10deg)
        }
    }
</style>

<!-- 樱花飘落-->
<script src="http://api.xmcyh.cn/web/yinghua.js"></script>


<?php
	$QQ		= 3673598896;
	$宣传语	= '好用不好用，不在于网站有多好看';
	$链接直达 	= [
	    [
			'名称'		=>	'登录',
			'描述'		=>	'在网站留下您的脚印',
			'链接'		=>  '/login'
		]
		, [
			'名称'		=>	'注册',
			'描述'		=>	'在网站注册个像样的账号',
			'链接'	=>	'/register'
		]
		, [
			'名称'		=>	'找回密码',
			'描述'		=>	'咦？密码忘记了？',
			'链接'	=>	'/pwreset'
		]
		, [
			'名称'		=>	'购物车',
			'描述'		=>	'在本站买一些东西吧！',
			'链接'	=>	'/cart'
		]
		, [
			'名称'		=>	'QQ群',
			'描述'		=>	'在里面找一找吧！',
			'链接'	=>	'http://qm.qq.com/cgi-bin/qm/qr?authKey=BgOqfub8hkYECV1ownRxtOWNhlzV6LGUcUdRAz35CMj0DgAeF7MB8BkfPMoZFh9b&k=ljKQoJDqLqRT8Risoab1HczdoF38pst-&noverify=0'
		]
	];
	$我的其它网站 	= [
	    [
			'名称'		=>	'二级域名（关闭）',
			'描述'		=>	'免费的二级域名',
			'链接'		=>  '/'
		]
		, [
			'名称'		=>	'教程（维护）',
			'描述'		=>	'免费的教程',
			'链接'	=>	'/'
		]
		, [
			'名称'		=>	'智简魔方 - 资源',
			'描述'		=>	'免费的资源，不定期提供',
			'链接'	=>	'/zjmf.html'
		]
	];
	$友情链接   = [
		[
	        '名称'		=>	'梦云',
			'描述'		=>	'一款稳定的云，同时也是一款便宜的云',
			'链接'	=>	'https://idc.xmcyh.cn/'
	    ]
	    , [
	        '名称'		=>	'关于',
			'描述'		=>	'加的找我联系',
			'链接'	=>	'https://wpa.qq.com/msgrd?v=3&uin=3673598896&site=qq&menu=yes&jumpflag=1'
	    ]
	];

?>
<html lang="zh-cn">
<head>
	<meta charset="UTF-8">
	<title>神侠云 - 网站主页</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Quicksand:400,500,700&subset=latin-ext);html{position:relative;overflow-x:hidden!important}
		*{box-sizing:border-box}
		body{font-family:Quicksand,sans-serif;color:#324e63;padding:0;margin:0}
		a,a:hover{text-decoration:none}
		.icon{display:inline-block;width:1em;height:1em;stroke-width:0;stroke:currentColor;fill:currentColor}
		.wrapper{width:100%;width:100%;height:auto;min-height:100vh;padding:50px 20px;padding-top:100px;display:flex;display:flex;background-image: linear-gradient(125deg,#fdcbf1,#e6dee9,#a1c4fd,#a8edea,#d299c2);}
		@media screen and (max-width:768px){.wrapper{height:auto;min-height:100vh;padding-top:100px}
		}
		.profile-card{width:100%;min-height:460px;margin:auto;box-shadow:0 8px 60px -10px rgba(13,28,39,.6);background:rgb(255 255 255 / 0.60);border-radius:12px;max-width:700px;position:relative}
		.profile-card.active .profile-card__cnt{filter:blur(6px)}
		.profile-card.active .profile-card-message,.profile-card.active .profile-card__overlay{opacity:1;pointer-events:auto;transition-delay:.1s}
		.profile-card.active .profile-card-form{transform:none;transition-delay:.1s}
		.profile-card__img{width:80px;height:80px;margin-left:auto;margin-right:auto;transform:translateY(-50%);border-radius:50%;overflow:hidden;position:relative;z-index:4;box-shadow:0 1px 10px 0 #2196F3, 0 0 0 1px rgba(107,74,255,.5);margin-bottom: 10px;}
		@media screen and (max-width:576px){.profile-card__img{width:120px;height:120px}
		}
		.profile-card__img img{display:block;width:100%;height:100%;object-fit:cover;border-radius:50%}
		.profile-card__cnt{margin-top:-35px;text-align:center;padding:0 20px;padding-bottom:40px;transition:all .3s}
		.profile-card__name{font-weight:700;font-size:24px;color:#6944ff;margin-bottom:15px;margin-top:50px}
		.profile-card__h2{font-weight:700;font:15px;color:#5944ff}
		.profile-card__txt{font-size:18px;font-weight:500;color:#324e63;margin-bottom:15px}
		.profile-card__txt strong{font-weight:700}
		.profile-card-loc{display:flex;justify-content:center;align-items:center;font-size:18px;font-weight:600}
		.profile-card-loc__icon{display:inline-flex;font-size:27px;margin-right:10px}
		.profile-card-inf{display:flex;justify-content:center;flex-wrap:wrap;align-items:flex-start;margin-top:35px}
		.profile-card-inf__item{padding:10px 35px;min-width:150px}
		@media screen and (max-width:768px){.profile-card-inf__item{padding:10px 20px;min-width:120px}
		}
		.profile-card-inf__title{font-weight:700;font-size:27px;color:#324e63}
		.profile-card-inf__txt{font-weight:500;margin-top:7px}
		.profile-card-social{margin-top:25px;display:flex;justify-content:center;align-items:center;flex-wrap:wrap}
		.profile-card-social__item{display:inline-flex;width:55px;height:55px;margin:15px;border-radius:50%;align-items:center;justify-content:center;color:#fff;background:#405de6;box-shadow:0 7px 30px rgba(43,98,169,.5);position:relative;font-size:21px;flex-shrink:0;transition:all .3s}
		@media screen and (max-width:768px){.profile-card-social__item{width:50px;height:50px;margin:10px}
		}
		@media screen and (min-width:768px){.profile-card-social__item:hover{transform:scale(1.2)}
		}
		.profile-card-social__item.facebook{background:linear-gradient(45deg,#3b5998,#0078d7);box-shadow:0 4px 30px rgba(43,98,169,.5)}
		.profile-card-social__item.twitter{background:linear-gradient(45deg,#1da1f2,#0e71c8);box-shadow:0 4px 30px rgba(19,127,212,.7)}
		.profile-card-social__item.instagram{background:linear-gradient(45deg,#405de6,#5851db,#833ab4,#c13584,#e1306c,#fd1d1d);box-shadow:0 4px 30px rgba(120,64,190,.6)}
		.profile-card-social__item.behance{background:linear-gradient(45deg,#1769ff,#213fca);box-shadow:0 4px 30px rgba(27,86,231,.7)}
		.profile-card-social__item.github{background:linear-gradient(45deg,#333,#626b73);box-shadow:0 4px 30px rgba(63,65,67,.6)}
		.profile-card-social__item.codepen{background:linear-gradient(45deg,#324e63,#414447);box-shadow:0 4px 30px rgba(55,75,90,.6)}
		.profile-card-social__item.link{background:linear-gradient(45deg,#d5135a,#f05924);box-shadow:0 4px 30px rgba(223,45,70,.6)}
		.profile-card-social .icon-font{display:inline-flex}
		.profile-card-ctr{display:flex;justify-content:center;align-items:center;margin-top:40px}
		@media screen and (max-width:576px){.profile-card-ctr{flex-wrap:wrap}
		}
		.profile-card__button{background:0 0;border:none;font-family:Quicksand,sans-serif;font-weight:700;font-size:19px;margin:15px 35px;padding:15px 40px;min-width:201px;border-radius:50px;min-height:55px;color:#fff;cursor:pointer;backface-visibility:hidden;transition:all .3s}
		@media screen and (max-width:768px){.profile-card__button{min-width:170px;margin:15px 25px}
		}
		@media screen and (max-width:576px){.profile-card__button{min-width:inherit;margin:0;margin-bottom:16px;width:100%;max-width:300px}
		  .profile-card__button:last-child{margin-bottom:0}
		}
		.profile-card__button:focus{outline:0!important}
		@media screen and (min-width:768px){.profile-card__button:hover{transform:translateY(-5px)}
		}
		.profile-card__button:first-child{margin-left:0}
		.profile-card__button:last-child{margin-right:0}
		.profile-card__button.button--blue{background:linear-gradient(45deg,#1da1f2,#0e71c8);box-shadow:0 4px 30px rgba(19,127,212,.4)}
		.profile-card__button.button--blue:hover{box-shadow:0 7px 30px rgba(19,127,212,.75)}
		.profile-card__button.button--orange{color: #fff;background:linear-gradient(45deg,#a1c4fd,#673AB7);box-shadow:0 1px 10px rgb(156 39 176 / 0.35)}
		.profile-card__button.button--orange:hover{box-shadow:0 7px 30px rgba(223,45,70,.75)}
		.profile-card__button.button--gray{box-shadow:none;background:#dcdcdc;color:#142029}
		.profile-card-message{width:100%;height:100%;position:absolute;top:0;left:0;padding-top:130px;padding-bottom:100px;opacity:0;pointer-events:none;transition:all .3s}
		.profile-card-form{box-shadow:0 4px 30px rgba(15,22,56,.35);max-width:80%;margin-left:auto;margin-right:auto;height:100%;background:#fff;border-radius:10px;padding:35px;transform:scale(.8);position:relative;z-index:3;transition:all .3s}
		@media screen and (max-width:768px){.profile-card-form{max-width:90%;height:auto}
		}
		@media screen and (max-width:576px){.profile-card-form{padding:20px}
		}
		.profile-card-form__bottom{justify-content:space-between;display:flex}
		@media screen and (max-width:576px){.profile-card-form__bottom{flex-wrap:wrap}
		}
		.profile-card textarea{width:100%;resize:none;height:210px;margin-bottom:20px;border:2px solid #dcdcdc;border-radius:10px;padding:15px 20px;color:#324e63;font-weight:500;font-family:Quicksand,sans-serif;outline:0;transition:all .3s}
		.profile-card textarea:focus{outline:0;border-color:#8a979e}
		.profile-card__overlay{width:100%;height:100%;position:absolute;top:0;left:0;pointer-events:none;opacity:0;background:rgba(22,33,72,.35);border-radius:12px;transition:all .3s}
		.text-center{text-align: center!important;}
		table{background-color: rgb(255 255 255 / 0)!important;}
		thead>tr{background-color: rgb(224 224 224 / 0)!important;background-image: linear-gradient(45deg,#f4433621,#ffc10729);}
	</style>
	<!-- 引入 layui.css -->
	<link rel="stylesheet" href="https://lib.baomitu.com/layui/2.6.12/css/layui.css">
</head>
<body>
	<div class="wrapper">
		<div class="profile-card js-profile-card">
			<div class="profile-card__cnt js-profile-cnt">
				<div class="profile-card__name"><a href="https://www.shenxiayun.asia/" target="_blank">神侠云</a></div>
				<div class="profile-card__txt"><?=$宣传语;?>
				</div>
				<div class="profile-card-inf">
			        <div class="profile-card__h2">链接直达</div>
					<table class="layui-table text-center" lay-size="sm">
						<thead>
							<tr>
								<th class="text-center">名称</th>
								<th class="text-center">描述</th>
								<th class="text-center">操作</th>
							</tr> 
						</thead>
						<tbody>
							<?PHP 
								foreach ($链接直达 as $索引 => $数值) 
								{
									echo '<tr>';
									echo '<td><b>' . $数值['名称'] . '</b></td>';
									echo '<td>' . $数值['描述'] . '</td>';
									echo '<td><a href="' . $数值['链接'] . '" class="layui-btn layui-btn-primary layui-border-blue layui-btn-sm" rel="nofollow" target="_blank">跳转</a></td>';
									echo '</tr>';
								}
							?>
						</tbody>
					</table>
				</div>
				
				<div class="profile-card-inf">
				    <div class="profile-card__h2">我的产品</div>
                    <table class="layui-table text-center" lay-size="sm">
                        <thead>
							<tr>
								<th class="text-center">分类</th>
								<th class="text-center">产品</th>
								<th class="text-center">产品</th>
							</tr> 
						</thead>
						<tbody>
                            {php}
                                $pg = Db::name('product_first_groups')->where('hidden',0)->limit(4)->select();
                                foreach ($pg as $v) {
                            {/php}
                                  <tr>
                                   <td><b>{$v.name}</b></td>
                                   
                            {php}
                                $pge = Db::name('product_groups')->where('hidden',0)->where('gid',$v['id'])->limit(6)->select();
                                foreach ($pge as $t) {
                            {/php}
                                         
                                <td><a href="/cart?fid={$t.gid}&gid={$t.id}" class="layui-btn layui-btn-primary layui-border-blue layui-btn-sm" rel="nofollow" target="_blank">{$t.name}</a></td>
                                    
                            {php}}{/php}
                                   </tr>
                            {php}}{/php}
                        </tbody>
                    </table>    
                </div>
                
                <div class="profile-card-inf">
			        <div class="profile-card__h2">我的其它网站</div>
					<table class="layui-table text-center" lay-size="sm">
						<thead>
							<tr>
								<th class="text-center">名称</th>
								<th class="text-center">描述</th>
								<th class="text-center">操作</th>
							</tr> 
						</thead>
						<tbody>
							<?PHP 
								foreach ($我的其它网站 as $索引 => $数值) 
								{
									echo '<tr>';
									echo '<td><b>' . $数值['名称'] . '</b></td>';
									echo '<td>' . $数值['描述'] . '</td>';
									echo '<td><a href="' . $数值['链接'] . '" class="layui-btn layui-btn-primary layui-border-blue layui-btn-sm" rel="nofollow" target="_blank">跳转</a></td>';
									echo '</tr>';
								}
							?>
						</tbody>
					</table>
				</div>
				
				<div class="profile-card-inf">
			        <div class="profile-card__h2">友情链接</div>
					<table class="layui-table text-center" lay-size="sm">
						<thead>
							<tr>
								<th class="text-center">名称</th>
								<th class="text-center">描述</th>
								<th class="text-center">操作</th>
							</tr> 
						</thead>
						<tbody>
							<?PHP 
								foreach ($友情链接 as $索引 => $数值) 
								{
									echo '<tr>';
									echo '<td><b>' . $数值['名称'] . '</b></td>';
									echo '<td>' . $数值['描述'] . '</td>';
									echo '<td><a href="' . $数值['链接'] . '" class="layui-btn layui-btn-primary layui-border-blue layui-btn-sm" rel="nofollow" target="_blank">跳转</a></td>';
									echo '</tr>';
								}
							?>
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>
