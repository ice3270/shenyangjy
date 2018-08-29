<?php
namespace Home\Controller;
use Think\Controller;
class PagesController extends Controller {
    public function about_us(){
        //关于我们页面
        $us = M("introduce_aboutus");
        $us_info = $us->select();
        $this->assign("us_info", $us_info);

        $team = M("team_aboutus");
        $team_info = $team->select();
        $this->assign("team_info", $team_info);

        //合作单位
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

        //start 页脚相关数据信息
        $com = M("company_info_footer");
        $com_info = $com->find();
        $this->assign("com_info", $com_info);

        $link_in = M("link_in_index");
        $link_in_info = $link_in->select();
        $this->assign("link_in_info", $link_in_info);

        $link_out = M("link_out_index");
        $link_out_info = $link_out->select();
        $this->assign("link_out_info", $link_out_info);
        //end 页脚相关数据信息
        $this->display("page-about-us");
    }
    public function callus(){
        //start 页脚相关数据信息
        $com = M("company_info_footer");
        $com_info = $com->find();
        $this->assign("com_info", $com_info);

        $link_in = M("link_in_index");
        $link_in_info = $link_in->select();
        $this->assign("link_in_info", $link_in_info);

        $link_out = M("link_out_index");
        $link_out_info = $link_out->select();
        $this->assign("link_out_info", $link_out_info);
        //end 页脚相关数据信息
        $this->display("page-callus");
    }
    public function com_new(){
        //start 页脚相关数据信息
        $com = M("company_info_footer");
        $com_info = $com->find();
        $this->assign("com_info", $com_info);

        $link_in = M("link_in_index");
        $link_in_info = $link_in->select();
        $this->assign("link_in_info", $link_in_info);

        $link_out = M("link_out_index");
        $link_out_info = $link_out->select();
        $this->assign("link_out_info", $link_out_info);
        //end 页脚相关数据信息
        $this->display("page-com-new");
    }
    public function ex(){
        //start 页脚相关数据信息
        $com = M("company_info_footer");
        $com_info = $com->find();
        $this->assign("com_info", $com_info);

        $link_in = M("link_in_index");
        $link_in_info = $link_in->select();
        $this->assign("link_in_info", $link_in_info);

        $link_out = M("link_out_index");
        $link_out_info = $link_out->select();
        $this->assign("link_out_info", $link_out_info);
        //end 页脚相关数据信息
        $this->display("page-ex");
    }
    public function law(){
        //start 页脚相关数据信息
        $com = M("company_info_footer");
        $com_info = $com->find();
        $this->assign("com_info", $com_info);

        $link_in = M("link_in_index");
        $link_in_info = $link_in->select();
        $this->assign("link_in_info", $link_in_info);

        $link_out = M("link_out_index");
        $link_out_info = $link_out->select();
        $this->assign("link_out_info", $link_out_info);
        //end 页脚相关数据信息
        $this->display("page-law");
    }
    public function server(){
        //start 页脚相关数据信息
        $com = M("company_info_footer");
        $com_info = $com->find();
        $this->assign("com_info", $com_info);

        $link_in = M("link_in_index");
        $link_in_info = $link_in->select();
        $this->assign("link_in_info", $link_in_info);

        $link_out = M("link_out_index");
        $link_out_info = $link_out->select();
        $this->assign("link_out_info", $link_out_info);
        //end 页脚相关数据信息
        $this->display("page-server");
    }
}