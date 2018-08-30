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
        $this->assign("ran", time());

        $this->display("aboutus_team_show");
    }
    public function abTeamEdit(){
        if(isset($_GET['id'])){
            $m = M("team_aboutus");
            $m_info = $m->where("id = {$_GET['id']}")->find();
            $this->assign("m_info", $m_info);
            $this->assign("edit", "编辑");
            $this->assign("update", "更新");
            $this->assign("do", "abTeamUpdate");
            $this->assign("prompt", "(温馨提示：不上传新头像则不修改头像)");
        }
        $this->display("aboutus_team_edit");
    }
    public function collaborate(){
        $c = M("collaborate");
        $c_info = $c->select();
        $count = count($c_info);
        $pages = $count % 6 != 0 ? (int)($count / 6) + 1 : (int)($count / 6);

        for ($i = 0, $k = 0; $i < $pages; $i++){
            for ($j = 0; $j < 6; $j++, $k++){
                if (!empty($c_info[$k]))
                    $data[$i][$j] = $c_info[$k];
            }
        }

        $this->assign("data", $data);

        $this->display();
    }
    public function server(){
        //服务页面
        $s = M("serve_page");
        $s_info = $s->select();
        $this->assign("s_info", $s_info);
        $this->assign("ran", time());

        $this->display();
    }
    public function serverEdit()
    {
        //编辑服务页面
        if(isset($_GET['id'])){
            $s = M("serve_page");
            $s_info = $s->where("id = {$_GET['id']}")->find();
            $this->assign("s_info", $s_info);
            $this->assign("edit", "编辑");
            $this->assign("update", "更新");
            $this->assign("do", "serverUpdate");
            $this->assign("prompt", "(温馨提示：不上传新图像则不修改图像)");
        }
        $this->display("server_edit");
    }
    public function comnew(){
        $this->display();
    }
    public function example(){
        //服务页面
        $e = M("ex_page");
        $e_info = $e->select();
        $this->assign("e_info", $e_info);
        $this->assign("ran", time());

        $this->display();
    }
    public function exampleEdit(){
        //编辑案例页面
        if(isset($_GET['id'])){
            $e = M("ex_page");
            $e_info = $e->where("id = {$_GET['id']}")->find();
            $this->assign("e_info", $e_info);
            $this->assign("edit", "编辑");
            $this->assign("update", "更新");
            $this->assign("do", "exUpdate");
            $this->assign("prompt", "(温馨提示：不上传新图像则不修改图像)");
        }
        $this->display("example_edit");
    }
    public function law(){
        $this->display();
    }
}