<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //Banner图数据处理
        $banner = M("banner");
        $banner_info = $banner->select();
        $this->assign("banner_info", $banner_info);

        //企业简介板块
        $company = M("company_index");
        $company_info = $company->find();
        $this->assign("company_info", $company_info);
        $this->assign("ran", time());

        //服务相关板块（四小部分）
        $serve = M("serve_index");
        $serve_info = $serve->select();
        $this->assign("serve_info", $serve_info);

        //服务终止板块
        $slogan = M("slogan_index");
        $slogan_info = $slogan->select();
        $this->assign("slogan_info", $slogan_info);

        $this->display();
    }
}