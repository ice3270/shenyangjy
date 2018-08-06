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

        $this->display();
    }
}