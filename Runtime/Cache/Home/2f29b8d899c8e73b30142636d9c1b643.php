<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <title>/shenyangjy/index.php/Home | Repute Lite - Free Bootstrap Business Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Bootstrap Business Template">
    <meta name="author" content="The Develovers">
    <!-- CSS -->
    <link rel="stylesheet" href="/shenyangjy/font_awesome/css/font-awesome.min.css">
    <link href="/shenyangjy/Home/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/shenyangjy/Home/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/shenyangjy/Home/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="/shenyangjy/Home/assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
    <!-- IE 9 Fallback-->
    <!--[if IE 9]>
		<link href="/shenyangjy/Home/assets/css/ie.css" rel="stylesheet">
	<![endif]-->
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700,400,300' rel='stylesheet' type='text/css'>
    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/shenyangjy/Home/assets/ico/repute144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/shenyangjy/Home/assets/ico/repute114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/shenyangjy/Home/assets/ico/repute72x72.png">
    <link rel="apple-touch-icon-precomposed" href="/shenyangjy/Home/assets/ico/repute57x57.png">
    <link rel="shortcut icon" href="/shenyangjy/Home/assets/ico/favicon.png">

    <style>
        .tlength{
            width: 220px;
        }
    </style>
</head>

<body>
    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- 导航栏 -->
        <nav class="navbar navbar-default " role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a href="index.html" class="navbar-brand navbar-logo" style="padding-top: 2px;padding-left: 8px">
                <img src="/shenyangjy/Home/assets/img/logo/LogoTest.png" alt="Repute Lite - Free Bootstrap Business Template" style="width: 280px;">
            </a>
        </div>
        <!-- MAIN NAVIGATION -->
        <div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active" id="pageIndex">
                    <a href="/shenyangjy">首页 </a>
                </li>
                <li class="dropdown" id=" ">
                    <a href="/shenyangjy/Home/Pages/about_us">关于我们 </a>
                </li>
                <li class="dropdown" id="pageServer">
                    <a href="/shenyangjy/Home/Pages/server">服务内容 </a>
                </li>
                <li class="dropdown" id="pageEx">
                    <a href="/shenyangjy/Home/Pages/ex">合作案例 </a>
                </li>
                <li class="dropdown" id="pageDown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">最新动态 <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/shenyangjy/Home/Pages/com_new">公司动态</a></li>
                        <li><a href="/shenyangjy/Home/Pages/law">法律法规</a></li>
                    </ul>
                </li>
                <li><a href="/shenyangjy/Home/Pages/callus" class="special-menu-item" target="_blank"><i class="fa fa-paper-plane-o"></i> 联系我们</a></li>
            </ul>
        </div>
        <!-- END MAIN NAVIGATION -->
    </div>
</nav>
        <!-- END 导航栏 -->

        <!-- Banner图部分 修改后 -->
        <section class="hero-unit-slider slider-responsive no-margin">
            <div id="carousel-hero" class="slick-carousel">
                <div class="carousel-inner" role="listbox">
                    <!-- 一组 Banner元素-->
                    <?php if(is_array($banner_info)): foreach($banner_info as $k=>$v): ?><div class="item active">
                            <img src="/shenyangjy/Uploads/Images/Banner/banner<?php echo ($k + 1); ?>.png?ran=<?php echo ($ran); ?>" class="img-responsive" alt="Slider Image">
                            <div class="carousel-caption">
                                <h2 class="hero-heading"><?php echo ($v["banner_header"]); ?></h2>
                                <br><br>
                                <p class="lead"><?php echo ($v["banner_text"]); ?></p>
                            </div>
                        </div><?php endforeach; endif; ?>
                </div>
            </div>
        </section>
        <!-- END Banner图部分 修改后 -->

        <!-- 四个引导图标 -->
        <div class="main-features ">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6"><i class="fa fa-eercast "></i>
                        <h3 class="feature-heading">资质优势</h3></div>
                    <div class="col-md-3 col-sm-6"><i class="fa fa-linode "></i>
                        <h3 class="feature-heading">企业动态</h3></div>
                    <div class="col-md-3 col-sm-6"><i class="fa fa-id-card "></i>
                        <h3 class="feature-heading">员工资历</h3></div>
                    <div class="col-md-3 col-sm-6"><i class="fa fa-newspaper-o "></i>
                        <h3 class="feature-heading">法律法规</h3></div>
                </div>
            </div>
        </div>
        <!-- END 四个引导图标 -->

        <!-- 企业简介板块 -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="section-heading" style="font-size: 40px">企业简介</h1>
                        <p class="lead"><?php echo ($company_info["company_header"]); ?></p>
                        <p><?php echo ($company_info["company_text"]); ?></p>
                    </div>
                    <div class="col-md-6">
                        <img src="/shenyangjy/Uploads/Images/Company/companyIndex.png?ran=<?php echo ($ran); ?>" class="img-responsive" alt="Image Intro" style="height: 380px;margin:0 auto;">
                    </div>
                </div>
            </div>
        </section>
        <!-- END 企业简介板块 -->

        <!-- 服务范围 -->
        <section>
            <div class="container">
                <div class="row">
                    <?php if(is_array($serve_info)): foreach($serve_info as $k=>$v): ?><div class="col-md-6">
                            <div class="boxed-content left-aligned left-boxed-icon">
                                <i class="fa fa-<?php echo ($v["serve_icon"]); ?>"></i>
                                <h2 class="boxed-content-title"><?php echo ($v["serve_header"]); ?></h2>
                                <p><?php echo ($v["serve_text"]); ?>.</p>
                            </div>
                        </div><?php endforeach; endif; ?>
                </div>
            </div>
        </section>
        <!-- END 服务范围 -->
        
        <!-- 服务宗旨部分 --> 
        <section>
            <div class="container">
                <!--<h2 class="section-heading sr-only">WHY REPUTE</h2>-->
                <div class="tab-content">
                <?php if(is_array($slogan_info)): foreach($slogan_info as $k=>$v): ?><div class="tab-pane fade in text-center" id="tab-bottom<?php echo ($k + 1); ?>">
                        <img src="/shenyangjy/Uploads/Images/Slogan/sloganImg<?php echo ($k + 1); ?>.png?ran=<?php echo ($ran); ?>" class="img-responsive center-block margin-bottom-30px">
                        <h3 class="text-accent-color"><?php echo ($v["slogan_header"]); ?></h3>
                        <p class="lead"><?php echo ($v["slogan_text"]); ?></p>
                    </div><?php endforeach; endif; ?>
                </div>
                <div class="custom-tabs-line tabs-line-top">
                    <ul class="nav" role="tablist">
                        <li class="active"><a href="#tab-bottom1" role="tab" data-toggle="tab"><?php echo ($slogan_info[0]["slogan_btn"]); ?></a></li>
                        <li><a href="#tab-bottom2" role="tab" data-toggle="tab"><?php echo ($slogan_info[1]["slogan_btn"]); ?></a></li>
                        <li><a href="#tab-bottom3" role="tab" data-toggle="tab"><?php echo ($slogan_info[2]["slogan_btn"]); ?></a></li>
                        <li><a href="#tab-bottom4" role="tab" data-toggle="tab"><?php echo ($slogan_info[3]["slogan_btn"]); ?></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- END 服务宗旨部分 -->

        <!-- 公司展示部分 -->
        <section class="recent-works">
            <div class="container">
                <h2 class="section-heading pull-left">公司展示</h2>
                <a href="#" class="btn btn-primary pull-right">查看更多</a>
                <div class="clearfix"></div>
                <div class="portfolio-static">
                    <div class="row">
                        <?php if(is_array($company_show_info)): foreach($company_show_info as $k=>$v): ?><div class="col-md-4">
                            <div class="portfolio-item">
                                <div class="overlay"></div>
                                <div class="info">
                                    <h4 class="title"><?php echo ($v["company_show_title"]); ?></h4>
                                    <br>
                                    <p class="brief-description"><?php echo ($v["company_show_text"]); ?></p>
                                </div>
                                <div class="media-wrapper">
                                    <img src="/shenyangjy/Uploads/Images/Company_show/work<?php echo ($k + 1); ?>.png?ran=<?php echo ($ran); ?>" alt="Item Thumbnail" />
                                </div>
                            </div>
                        </div><?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- END 公司展示部分 -->

        <!-- 业务范围 -->
        <section>
            <div class="container">
                <h2 class="section-heading">业务范围</h2>
                <div class="row">
                    <div class="col-md-4">
                        <!--大图标大标题大内容-->
                        <div class="news-item news-featured">
                            <a href="#"><img src="/shenyangjy/Uploads/Images/Business/business1.png?ran=<?php echo ($ran); ?>" class="img-responsive"></a>
                            <h3 class="news-title"><a href="#"><?php echo ($business_info[0]["business_header"]); ?></a></h3>
                            <p><?php echo ($business_info[0]["business_text"]); ?></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!--小图标小标题小内容-->
                        <div class="row">
                            <?php $__FOR_START_2611__=1;$__FOR_END_2611__=6;for($i=$__FOR_START_2611__;$i < $__FOR_END_2611__;$i+=1){ ?><div class="col-md-6 col-sm-6">
                                    <div class="news-item margin-bottom-30px clearfix">
                                        <a href="#"><img src="/shenyangjy/Uploads/Images/Business/business<?php echo ($i + 1); ?>.png?ran=<?php echo ($ran); ?>" class="img-responsive pull-left"></a>
                                        <div class="right">
                                            <h3 class="news-title"><a href="#"><?php echo ($business_info[$i]["business_header"]); ?></a></h3>
                                            <p><?php echo ($business_info[$i]["business_text"]); ?></p>
                                        </div>
                                    </div>
                                </div><?php } ?>

                            <div class="col-md-6 col-sm-6">
                                <div class="see-all-news">
                                    <a href="#">查看更多 <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END 业务范围 -->

        <!-- 发展历程 -->
        <section class="full-width-section no-margin">
            <div class="container">
                <div class="row">
                    <?php if(is_array($year_info)): foreach($year_info as $k=>$v): ?><div id="dd<?php echo ($k + 1); ?>" class="col-sm-3 col-xs-6 tlength">
                        <div class="number-info horizontal text-white-color">
                            <i class="fa fa-clock-o pull-left"></i>
                            <p><?php echo ($v["year_num"]); ?> <span><?php echo ($v["year_title"]); ?></span></p>
                        </div>
                    </div><?php endforeach; endif; ?>
                </div>
                <br>
                <?php if(is_array($year_info)): foreach($year_info as $k=>$v): ?><div class="row" style="display: none" id="dp<?php echo ($k + 1); ?>">
                    <p class="text-white-color"><?php echo ($v["year_text"]); ?></p>
                </div><?php endforeach; endif; ?>
            </div>
        </section>
        <!-- END 发展历程 -->

        <!-- 彩电塔板块 -->
        <section id="testimoial-parallax" class="testimonial-with-bg parallax">
            <div class="container">
                <div class="testimonial slick-carousel">
                    <div class="testimonial-container">
                        <div class="testimonial-body">
                            <p style="font-size: 40px"><?php echo ($ta_info["caita_header"]); ?></p>
                            <p><?php echo ($ta_info["caita_text"]); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END 彩电塔板块 -->

        <!-- 合作单位 -->
        <section class="clients">
            <div class="container">
                <h2 class="section-heading">合作单位</h2>
                <ul class="list-inline list-client-logo">
                    <?php $__FOR_START_4592__=1;$__FOR_END_4592__=19;for($i=$__FOR_START_4592__;$i < $__FOR_END_4592__;$i+=1){ ?><li>
                        <img src="/shenyangjy/Uploads/Images/FriendCom/logo<?php echo ($i); ?>.png" height="60px" style="margin: 15px" alt="logo">
                    </li><?php } ?>
                </ul>
            </div>
        </section>
        <!-- END 合作单位 -->

        <!-- CALL-TO-ACTION -->
        <section class="call-to-action">
            <div class="container">
                <div class="pull-left">
                    <h2 class="section-heading">联系我们</h2>
                </div>
                <div class="pull-right">
                    <p>TEL： (024) 88516304 <br> E-mail： xxxx@xx.com</p>
                </div>
            </div>
        </section>
        <!-- END CALL-TO-ACTION -->

        <!-- 页脚部分 -->
        <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- COLUMN 1 -->
                <img src="/shenyangjy/Home/assets/img/logo/LogoTest.png" class="logo" alt="Repute" style="width: 280px;">
                <div style="height: 80px; overflow:hidden; margin-bottom: 10px;">
                    <?php echo ($com_info["com_text"]); ?>
                </div>
                <div>
                    <div style="height: 180px;float: left;">
                        <div style="margin:auto">
                            <h3 style="font-size: 20px;" class="footer-heading">关注我们</h3>
                            <span><li class="fa fa-hand-o-right fa-5x"></li></span>
                        </div>
                    </div>
                    <div style="width: 180px; height: 180px; margin-left: 40px; border: 2px solid white;float: left;">
                        <img src="#" alt="二维码">
                    </div>
                </div>
                <!-- END COLUMN 1 -->
            </div>

            <div class="col-md-4">
                <!-- COLUMN 2 -->
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="footer-heading">站内链接</h3>
                        <ul class="list-unstyled footer-nav">
                            <?php if(is_array($link_in_info)): foreach($link_in_info as $key=>$v): ?><!--<li><a href="<?php echo ($v["link_url"]); ?>"><?php echo ($v["link_name"]); ?></a></li>-->
                                <li><a href="/shenyangjy/<?php echo ($v["link_url"]); ?>"><?php echo ($v["link_name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="footer-heading">相关链接</h3>
                        <ul class="list-unstyled footer-nav">
                            <?php if(is_array($link_out_info)): foreach($link_out_info as $key=>$v): ?><li><a href="<?php echo ($v["link_url"]); ?>"><?php echo ($v["link_name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                    <div class="col-xs-6" style="width: 400px;">
                        <h3 class="footer-heading">邮寄地址及联系方式</h3>
                        <ul class="list-unstyled">
                            <li>通讯地址：<?php echo ($com_info["com_address"]); ?></li>
                            <li>邮政编码：<?php echo ($com_info["com_postal"]); ?></li>
                            <li>办公电话：<?php echo ($com_info["com_tel"]); ?></li>
                            <li>Email：<?php echo ($com_info["com_email"]); ?></li>
                        </ul>
                    </div>
                </div>
                <!-- END COLUMN 2 -->
            </div>

            <h3 class="footer-heading">公司地址</h3>
            <div class="col-md-4">
                <p><?php echo ($com_info["com_address"]); ?></p>
                <div id="allmap">
                    <iframe src="/shenyangjy/Home/View/Index/baiduMap.html" height="261px" width="396">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- COPYRIGHT -->
    <div class="text-center copyright">
        More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
    </div>
    <!-- END COPYRIGHT -->
</footer>
        <!-- END 页脚部分 -->
    </div>
    <!-- END WRAPPER -->
    <!-- JAVASCRIPTS -->
    <script src="/shenyangjy/Home/assets/js/jquery-2.1.1.min.js"></script>
    <script src="/shenyangjy/Home/assets/js/bootstrap.min.js"></script>
    <script src="/shenyangjy/Home/assets/js/plugins/slick/slick.min.js"></script>
    <script src="/shenyangjy/Home/assets/js/plugins/stellar/jquery.stellar.min.js"></script>
    <script src="/shenyangjy/Home/assets/js/repute-scripts.js"></script>

    <script>
        // active
        // tab-bottom<?php echo ($k + 1); ?>

        $(function(){
            $(".dropdown").removeClass("active");
            $("#pageIndex").addClass("active");
            $("#tab-bottom1").addClass('active');
            $("div[id^='dp']").css("display", "none");

            $("div[id^='dd']").mouseover(function(){
                switch (this.id) {
                case 'dd1':
                    $('#dp1').css("display", "block");
                    break;
                case 'dd2':
                    $('#dp2').css("display", "block");
                    break;
                case 'dd3':
                    $('#dp3').css("display", "block");
                    break;
                case 'dd4':
                    $('#dp4').css("display", "block");
                    break;
                case 'dd5':
                    $('#dp5').css("display", "block");
                    break;
                }
            }).mouseout(function(){
                // alert(this.id);
                $("div[id^='dp']").css("display", "none");
            });
        });

    </script>
</body>

</html>