<?php
namespace Admin\Controller;
use Think\Controller;
class PagesController extends Controller {
    public function aboutus(){
        //企业展示板块
        $company = M("introduce_aboutus");
        $company_info = $company->select();
        $this->assign("company_info", $company_info);
        $this->assign("ran", time());


        $this->display();
    }
    public function abOther(){
        //企业展示板块
        $company = M("introduce_aboutus");
        $company_info = $company->select();
        $this->assign("company_info", $company_info);
        $this->assign("ran", time());


        $this->display("aboutus_other");
    }
    public function abTeamShow(){
        $team = M("team_aboutus");
        $team_info = $team->select();
        $this->assign("team_info", $team_info);

        $this->display("aboutus_team_show");
    }
    public function abTeamEdit(){
        if(isset($_GET['id'])){
            $m = M("team_aboutus");
            $m_info = $m->where("id = {$_GET['id']}")->find();
            $this->assign("m_info", $m_info);
            $this->assign("edit", "编辑");
            $this->assign("do", "abTeamUpdate");
            $this->assign("prompt", "(温馨提示：不上传新头像则不修改头像)");
        }
        $this->display("aboutus_team_edit");
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