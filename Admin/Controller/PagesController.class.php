<?php
namespace Admin\Controller;
use Think\Controller;
class PagesController extends Controller {
    public function index(){
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
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

        //start 页脚相关数据信息
        $com = M("company_info_footer");
        $com_info = $com->find();
        $this->assign("com_info", $com_info);

        $link_out = M("link_out_index");
        $link_out_info = $link_out->select();
        $this->assign("link_out_info", $link_out_info);
        //end 页脚相关数据信息

        $this->display();
    }

    public function aboutus(){
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }

        //企业展示板块
        $company = M("introduce_aboutus");
        $company_info = $company->select();
        $this->assign("company_info", $company_info);
        $this->assign("ran", time());


        $this->display();
    }

    public function abOther(){
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
        //企业展示板块
        $company = M("introduce_aboutus");
        $company_info = $company->select();
        $this->assign("company_info", $company_info);
        $this->assign("ran", time());


        $this->display("aboutus_other");
    }

    public function abTeamShow(){
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
        $team = M("team_aboutus");
        $team_info = $team->select();
        $this->assign("team_info", $team_info);
        $this->assign("ran", time());

        $this->display("aboutus_team_show");
    }

    public function abTeamEdit(){
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
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
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
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
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
        //服务页面
        $s = M("serve_page");
        $s_info = $s->select();
        $this->assign("s_info", $s_info);
        $this->assign("ran", time());

        $this->display();
    }

    public function serverEdit(){
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
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
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
        $n = M("new_page");
        $n_info = $n->select();
        $this->assign("n_info", $n_info);
        $this->assign("ran", time());

        $this->display();
    }

    public function comnewEdit(){
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
        //编辑公司动态页面
        if(isset($_GET['id'])){
            $n = M("new_page");
            $n_info = $n->where("id = {$_GET['id']}")->find();
            $this->assign("n_info", $n_info);
            $this->assign("edit", "编辑");
            $this->assign("update", "更新");
            $this->assign("do", "newUpdate");
            $this->assign("prompt", "(温馨提示：不上传新图像则不修改图像)");
        }
        $this->display("comnew_edit");
    }

    public function example(){
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
        //服务页面
        $e = M("ex_page");
        $e_info = $e->select();
        $this->assign("e_info", $e_info);
        $this->assign("ran", time());

        $this->display();
    }

    public function exampleEdit(){
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
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
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
        //数据库操作
        $l = M("law_page");
        $l_info = $l->find();
        $this->assign("l_info", $l_info);
        $this->assign("ran", time());

        $this->display();
    }

    public function lawFile(){
        if(empty(session("username"))){
            $this->error("管理员没有登录，请先登录！", U("/Admin/Index/index") ,3);
        }
        $lf = M("law_file_page");
        $lf_info = $lf->select();
        $this->assign("lf_info", $lf_info);

        $this->display("law_file");
    }
}