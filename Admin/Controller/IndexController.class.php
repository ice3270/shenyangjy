<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	// banner 板块部分
    	$banner = M("banner");
    	$banner_info = $banner->select();
    	// echo "<pre>";
    	// var_dump($info);die;
    	$this->assign("banner_info", $banner_info);
    	$this->assign("ran", time());

    	// 企业简介板块部分
    	$company = M("company_index");
    	$company_info = $company->find();
    	$this->assign("company_info", $company_info);
        // 服务范围介绍部分
        $serve = M("serve_index");
        $serve_info = $serve->select();
        $this->assign("serve_info", $serve_info);
    	
        // 服务宗旨部分
    	$slogan = M("slogan_index");
    	$slogan_info = $slogan->select();
    	$this->assign("slogan_info", $slogan_info);

        // 公司展示部分
    	$company_show = M("company_show_index");
    	$company_show_info = $company_show->select();
    	$this->assign("company_show_info", $company_show_info);

        //业务范围板块
        $business = M("business_index");
        $business_info = $business->select();
        $this->assign("business_info", $business_info);

        //时间轴板块
        $year = M("year_index");
        $year_info = $year->select();
        $this->assign("year_info", $year_info);

        //彩电塔滚动板块
        $ta = M("caita_index");
        $ta_info = $ta->find();
        $this->assign("ta_info", $ta_info);

        $this->display();
    }
}