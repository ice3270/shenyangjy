<?php
namespace Admin\Controller;
use Think\Controller;
class PagesController extends Controller {
    public function aboutus(){
        //企业展示板块
        $company = M("introduce_aboutus");
        $company_info = $company->find();
        $this->assign("company_info", $company_info);
        $this->assign("ran", time());
        $this->display();
    }
    public function server(){
        $this->display();
    }
    public function comnew(){
        $this->display();
    }
    public function example(){
        $this->display();
    }
    public function law(){
        $this->display();
    }
}