<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../font_awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Admin/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../Admin/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Admin/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../Admin/assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../Admin/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../Admin/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="../Admin/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../Admin/assets/img/favicon.png">
	<script src="../Admin/assets/vendor/jquery/jquery.min.js"></script>
	<style>
        .btnStyleDown{
            background-color: #00AAFF;
            color: white;
        }
    </style>
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- 导航栏 -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><img src="../Admin/assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                        <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                    </div>
                </form>
                <div class="navbar-btn navbar-btn-right">
                    <a class="btn btn-success update-pro" href="#downloads/klorofil-pro-bootstrap-./Admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                </div>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="lnr lnr-alarm"></i>
                                <span class="badge bg-danger">5</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
                                <li><a href="#" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Basic Use</a></li>
                                <li><a href="#">Working With Data</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Troubleshooting</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../Admin/assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                                <li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a class="update-pro" href="#downloads/klorofil-pro-bootstrap-./Admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END 导航栏杆 -->

        <!-- 左侧工具栏杆 -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>首页设置</span></a></li>
                        <li><a href="elements.html" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
                        <li><a href="charts.html" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
                        <li><a href="panels.html" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
                        <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="page-profile.html" class="">Profile</a></li>
                                    <li><a href="page-login.html" class="">Login</a></li>
                                    <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
                        <li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
                        <li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        
        <!-- MAIN -->
        <div class="main">
            <!-- 导航按钮区 -->
            <h2 class="btn btn-default btnStyleDown" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disBannerBtn">顶部展示</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disCompanyBtn">企业展示</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disServeBtn">服务范围1</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disSloganBtn">服务范围2</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disWorkBtn">工作展示</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disBusinesskBtn">业务范围</h2>
            <br>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disYearBtn">发展历程</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disCaitaBtn">彩塔板块</h2>
            <h2 class="btn btn-default" style="font-size: 20px; margin-left: 40px;margin-bottom: 10px;" id="disFooterBtn">页脚部分</h2>
            <br>
            <br>
            <!-- END 导航按钮区 -->

            <!-- banner 展示图部分 -->
            <div class="form-group" style="display: block;" id='editBanner'>
                <form action="Admin/editIndex/bannerUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <?php if(is_array($banner_info)): foreach($banner_info as $k=>$v): ?><tr>
                                <td>原图预览</td>
                                <td>
                                    <img src="../Uploads/Images/Banner/banner<?php echo ($k+1); ?>.png?ran=<?php echo ($ran); ?>" height="100px">
                                    <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片最好为：1920 * 500</p>
                                </td>
                            </tr>
                            <tr>
                                <td>上传更新 - 展示图(<?php echo ($k + 1); ?>)：</td>
                                <td><input type="file" class="form-control" name="bannerImg<?php echo ($k); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">展示图(<?php echo ($k + 1); ?>) - 标题：</td>
                                <td><input name="banner_header[]" class="form-control" value="<?php echo ($v["banner_header"]); ?>"></td>
                            </tr>
                            <tr>
                                <td>展示图(<?php echo ($k + 1); ?>) - 描述：</td>
                                <td><input name="banner_text[]" class="form-control" value="<?php echo ($v["banner_text"]); ?>"></td>
                            </tr>
                            <tr>
                                <td collspan="2">展示图 (<?php echo ($k + 1); ?>) 最近更新时间 </td>
                                <!--<td><?php echo date("Y-m-d H:i:s", $v['banner_time']);?></td>-->
                                <td><?php echo (date("Y - m - d ------ H : i : s", $v["banner_time"])); ?></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新顶部展示图板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- <hr> -->
            <!-- 企业介绍部分 -->
            <div class="form-group" id="editCompany" style="display: none;">
                <form action="Admin/editIndex/companyUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <tr>
                            <td width="200px">原企业展示图预览：</td>
                            <td>
                                <img src="../Uploads/Images/Company/companyIndex.png?ran=<?php echo ($ran); ?>" height="200px">
                                <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片最好为：800 * 550</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px">上传企业展示图：</td>
                            <td><input type="file" class="form-control" name="company_img"></td>
                        </tr>
                        <tr>
                            <td width="200px">企业介绍标题：</td>
                            <td><input type="text" class="form-control" name="company_header" value="<?php echo ($company_info["company_header"]); ?>"></td>
                        </tr>
                        <tr>
                            <td width="200px">企业介绍正文：</td>
                            <td><textarea class="form-control" rows="3" name="company_text"><?php echo ($company_info["company_text"]); ?></textarea></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新企业展示板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- 服务范围简介区 -->
			<div class="form-group" id="editServe" style="display: none;">
				<form action="Admin/editIndex/ServeUpdate" method="post" enctype="multipart/form-data">
					<table class="table table-hover" style="width: 80%;margin-left: 40px;">
					<?php if(is_array($serve_info)): foreach($serve_info as $k=>$v): ?><tr>
							<td width="200px">
								<a href="http://fontawesome.dashgame.com/" target="_blank"><i class="fa fa-<?php echo ($v["serve_icon"]); ?> fa-2x"></i></a> 
                            </td>
                            <td>
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control" name="serve_icon[]" value="<?php echo ($v["serve_icon"]); ?>" style="width: auto;">
                                    <a href="../Res/Help/iconHelp.png" target="_bank"><i class="fa fa-hand-o-right" style="margin-left: 40px;vertical-align: middle;"> 如何修改图标</i></a>
                                </div>
                            </td>
						</tr>
						<tr>
							<td width="200px">服务范围标题：</td>
							<td><input type="text" class="form-control" name="serve_header[]" value="<?php echo ($v["serve_header"]); ?>"></td>
						</tr>
						<tr>
							<td width="200px">服务范围正文：</td>
							<td><textarea class="form-control" rows="3" name="serve_text[]"><?php echo ($v["serve_text"]); ?></textarea></td>
						</tr>
                        <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
						<tr align="center">
							<td colspan="2"><input type="submit" value="更新服务范围板块"> &nbsp; | &nbsp; <input type="reset"></td>
						</tr>
					</table>
				</form>
			</div>
			<!-- END 服务范围简介区 -->

			<!-- END 企业介绍部分 -->
            
            <!-- 服务宗旨 -->
            <div class="form-group" style="display: none;" id='editSlogan'>
                <form action="Admin/editIndex/sloganUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <?php if(is_array($slogan_info)): foreach($slogan_info as $k=>$v): ?><tr>
                                <td>原图预览</td>
                                <td>
                                    <img src="../Uploads/Images/Slogan/sloganImg<?php echo ($k+1); ?>.png?ran=<?php echo ($ran); ?>" height="100px">
                                    <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片高度最好为：220px</p>
                                </td>
                            </tr>
                            <tr>
                                <td>上传更新 - 服务宗旨配图(<?php echo ($k + 1); ?>)：</td>
                                <td><input type="file" class="form-control" name="sloganImg<?php echo ($k); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">服务宗旨按钮列表(<?php echo ($k + 1); ?>) - 标题：</td>
                                <td><input name="slogan_btn[]" class="form-control" value="<?php echo ($v["slogan_btn"]); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">服务宗旨(<?php echo ($k + 1); ?>) - 标题：</td>
                                <td><input name="slogan_header[]" class="form-control" value="<?php echo ($v["slogan_header"]); ?>"></td>
                            </tr>
                            <tr>
                                <td>服务宗旨(<?php echo ($k + 1); ?>) - 描述：</td>
                                <td><input name="slogan_text[]" class="form-control" value="<?php echo ($v["slogan_text"]); ?>"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新服务宗旨板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- END 服务宗旨 -->

            <!-- 公司展示 -->
            <div class="form-group" style="display: none;" id='editWork'>
                <form action="Admin/editIndex/workUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <?php if(is_array($company_show_info)): foreach($company_show_info as $k=>$v): ?><tr>
                                <td>原图预览</td>
                                <td>
                                    <img src="../Uploads/Images/Company_show/work<?php echo ($k+1); ?>.png?ran=<?php echo ($ran); ?>" height="100px">
                                    <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片最好为：800 * 500</p>
                                </td>
                            </tr>
                            <tr>
                                <td>上传更新 - 公司展示图(<?php echo ($k + 1); ?>)：</td>
                                <td><input type="file" class="form-control" name="workImg<?php echo ($k); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">公司展示图(<?php echo ($k + 1); ?>) - 标题：</td>
                                <td><input name="company_show_title[]" class="form-control" value="<?php echo ($v["company_show_title"]); ?>"></td>
                            </tr>
                            <tr>
                                <td>公司展示图(<?php echo ($k + 1); ?>) - 描述：</td>
                                <td><input name="company_show_text[]" class="form-control" value="<?php echo ($v["company_show_text"]); ?>"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新公司展示板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- END 公司展示 -->

            <!--业务范围-->
            <div class="form-group" style="display: none;" id='editBusiness'>
                <form action="Admin/editIndex/businessUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <?php if(is_array($business_info)): foreach($business_info as $k=>$v): ?><tr>
                                <td>原图预览</td>
                                <td>
                                    <img src="../Uploads/Images/Business/business<?php echo ($k+1); ?>.png?ran=<?php echo ($ran); ?>" height="100px">
                                    <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片最好为：360 * 189</p>
                                </td>
                            </tr>
                            <tr>
                                <td>上传更新 - 业务范围示意图(<?php echo ($k + 1); ?>)：</td>
                                <td><input type="file" class="form-control" name="businessImg<?php echo ($k); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">业务范围(<?php echo ($k + 1); ?>)标题：</td>
                                <td><input name="business_header[]" class="form-control" value="<?php echo ($v["business_header"]); ?>"></td>
                            </tr>
                            <tr>
                                <td>范围(<?php echo ($k + 1); ?>) - 描述：</td>
                                <td><input name="business_text[]" class="form-control" value="<?php echo ($v["business_text"]); ?>"></td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新业务范围板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!--END 业务范围-->

            <!-- 发展历程-->
            <div class="form-group" style="display: none;" id='editYear'>
                <form action="Admin/editIndex/yearUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <?php if(is_array($year_info)): foreach($year_info as $k=>$v): ?><tr>
                                <td>年份 (<?php echo ($k + 1); ?>)：</td>
                                <td><input type="text" class="form-control"  name="year_num[]" value="<?php echo ($v["year_num"]); ?>"></td>
                            </tr>
                            <tr>
                                <td width="200px">年份 (<?php echo ($k + 1); ?>)标题：</td>
                                <td><input name="year_title[]" class="form-control" value="<?php echo ($v["year_title"]); ?>"></td>
                            </tr>
                            <tr>
                                <td>年份 (<?php echo ($k + 1); ?>) - 详情描述：</td>
                                <td>
                                    <textarea name="year_text[]" class="form-control" rows="3"><?php echo ($v["year_text"]); ?></textarea>
                                </td>
                            </tr>
                            <tr><td colspan="2"><hr></td></tr><?php endforeach; endif; ?>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新发展历程板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- END 发展历程-->

            <!-- 彩电塔-->
            <div class="form-group" style="display: none;" id='editCaita'>
                <form action="Admin/editIndex/caitaUpdate" method="post" enctype="multipart/form-data">
                    <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                        <tr>
                            <td>彩电塔标题：</td>
                            <td><input type="text" class="form-control"  name="caita_header" value="<?php echo ($ta_info["caita_header"]); ?>"></td>
                        </tr>
                        <tr>
                            <td>彩电塔描述：</td>
                            <td>
                                <textarea name="caita_text" class="form-control" rows="3"><?php echo ($ta_info["caita_text"]); ?></textarea>
                            </td>
                        </tr>

                        <tr><td colspan="2"><hr></td></tr>

                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新发展历程板块"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- END 彩电塔-->

            <!--页脚部分-->
            <div class="form-group" style="display: none;" id='editFooter'>
                <table class="table table-hover" style="width: 80%;margin-left: 40px;">
                    <form action="Admin/editIndex/erweiUpdate" method="post" enctype="multipart/form-data">
                        <tr>
                            <td>原图预览：</td>
                            <td>
                                <img src="../Uploads/Images/erwei.png?ran=<?php echo ($ran); ?>" height="100px">
                                <p style="margin-top: 5px;">温馨提示：为保证上传图片与网站布局的美观，上传图片最好为：180 * 180</p>
                            </td>
                        </tr>
                        <tr>
                            <td>上传更新 - 选择新的二维码：</td>
                            <td><input type="file" class="form-control" name="ImageErwei"></td>
                        </tr>
                        <tr><td colspan="2"><hr></td></tr>
                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新二维码"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </form>
                    <form action="Admin/editIndex/footerUpdate" method="post" enctype="multipart/form-data">
                        <tr>
                            <td>公司简介：</td>
                            <td>
                                <textarea name="com_text" class="form-control" rows="2"><?php echo ($com_info["com_text"]); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>通讯地址：</td>
                            <td><input type="text" class="form-control"  name="com_address" value="<?php echo ($com_info["com_address"]); ?>"></td>
                        </tr>
                        <tr>
                            <td>邮政编码：</td>
                            <td><input type="text" class="form-control"  name="com_postal" value="<?php echo ($com_info["com_postal"]); ?>"></td>
                        </tr>
                        <tr>
                            <td>联系电话：</td>
                            <td><input type="text" class="form-control"  name="com_tel" value="<?php echo ($com_info["com_tel"]); ?>"></td>
                        </tr>
                        <tr>
                            <td>邮箱地址：</td>
                            <td><input type="text" class="form-control"  name="com_email" value="<?php echo ($com_info["com_email"]); ?>"></td>
                        </tr>

                        <tr><td colspan="2"><hr></td></tr>

                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新页脚公司信息"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </form>
                    <form action="Admin/editIndex/linkUpdate" method="post">
                        <?php if(is_array($link_out_info)): foreach($link_out_info as $key=>$v): ?><tr>
                                <td><input type="text" class="form-control"  name="link_name[]" value="<?php echo ($v["link_name"]); ?>"></td>
                                <td><input type="text" class="form-control"  name="link_url[]" value="<?php echo ($v["link_url"]); ?>"></td>
                            </tr><?php endforeach; endif; ?>


                        <tr><td colspan="2"><hr></td></tr>

                        <tr align="center">
                            <td colspan="2"><input type="submit" value="更新相关链接"> &nbsp; | &nbsp; <input type="reset"></td>
                        </tr>
                    </form>
                </table>
            </div>
            <!--END 页脚部分-->

		</div>

		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Copyright &copy; 2017.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
				
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<!--<script src="../Admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>-->
	<!--<script src="../Admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>-->
	<!--<script src="../Admin/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>-->
	<!--<script src="../Admin/assets/vendor/chartist/js/chartist.min.js"></script>-->
	<!--<script src="../Admin/assets/scripts/klorofil-common.js"></script>-->
	<script type="text/javascript">
		$(function(){
			$("#disBannerBtn").click(function(event) {
				/* Act on the event */
                btnDown($("#editBanner"), $(this));
            });
            $("#disCompanyBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editCompany"), $(this));
            });
            $("#disServeBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editServe"), $(this));
            });
            $("#disSloganBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editSlogan"), $(this));
			});
            $("#disWorkBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editWork"), $(this));
			});
            $("#disBusinesskBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editBusiness"), $(this));
			});
            $("#disYearBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editYear"), $(this));
			});
            $("#disCaitaBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editCaita"), $(this));
			});
            $("#disFooterBtn").click(function(event) {
                /* Act on the event */
                btnDown($("#editFooter"), $(this));
			});
            function btnDown(div,btn){
                $("div[class='form-group']").hide()
                $("h2").removeClass('btnStyleDown');
                div.slideDown('slow');
                btn.addClass('btnStyleDown');
            }
		});
	</script>
</body>

</html>