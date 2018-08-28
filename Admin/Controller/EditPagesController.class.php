<?php
namespace Admin\Controller;
use Think\Controller;
class EditPagesController extends Controller {

    public function companyUpdate(){
    	//文件上传初始化
		$upload = new \Think\Upload();
		$upload->maxSize = 4096000; //限制文件大小
		$upload->exts = array('png'); //上传文件类型
		$upload->savePath = './Images/Company_show/';    //文件上传目录
		$upload->replace = true; //如果同名则覆盖
		$upload->autoSub = false; //不适用子目录名保存
		$upload->saveName = "abus";	//指定文件名

    	$company = M("introduce_aboutus");
    	$company->where("id='1'")->save($_POST);    //更新数据库中标题、描述

    	if($_FILES['company_img']['size']){
    		$info = $upload->uploadOne($_FILES['company_img']);    //上传单个文件
			if(!$info){ //如果不成功则输出错误信息
			   $this->error($upload->getError());
			}
    	}

    	$this->success("更新成功", U("/Admin/Pages/aboutus"), 3);
    }
    public function comOtherUpdate(){
        $other = M("introduce_aboutus");
        foreach($_POST as $k => $v){
            foreach($v as $kk => $vv){
                $data[$kk][$k] = $vv;
            }
        }

        foreach ($data as $k => $v){
            $kk = $k + 2;
            $other->where("id=".$kk)->save($v);    //更新数据库中标题、描述
        }
        $this->success("更新成功", U("/Admin/Pages/abOther"), 3);
    }

    public function abTeamAdd(){
        die("add");
    }
    public function abTeamUpdate(){
        die("update");
    }
    public function abTeamDel(){
        die("del");
    }
    //===============================================
    public function serveUpdate(){
    	$serve = M("serve_index");
    	foreach($_POST as $k => $v){
            foreach($v as $kk => $vv){
                $data[$kk][$k] = $vv;
            }
        }

        foreach ($data as $k => $v){	
        	$kk = $k + 1;
    		$serve->where("id=".$kk)->save($v);    //更新数据库中标题、描述
		}
    	$this->success("更新成功", U("/Admin/"), 3);
    }

    public function sloganUpdate(){
        //文件上传初始化
        $upload = new \Think\Upload();
        $upload->maxSize = 4096000; //限制文件大小
        $upload->exts = array('png'); //上传文件类型
        $upload->savePath = './Images/Slogan/';    //文件上传目录
        $upload->replace = true; //如果同名则覆盖
        $upload->autoSub = false; //不适用子目录名保存

        //标题和描述处理部分
        $banner = M("slogan_index");
        foreach($_POST as $k => $v){
            foreach($v as $kk => $vv){
                $data[$kk][$k] = $vv;
            }
        }
    
        foreach ($data as $k => $v){
            $kk = $k + 1;
            $upload->saveName = "sloganImg".$kk;
            // echo "bannerImg{$k}";die;
            if($_FILES['sloganImg'.$k]['size']){//判断文件大小是否大于0，如果大于0说明有文件要上传
                $info = $upload->uploadOne($_FILES['sloganImg'.$k]);    //上传单个文件
                if(!$info){ //如果不成功则输出错误信息
                   $this->error($upload->getError());
                }
            }
            $banner->where("id=".$kk)->save($v);    //更新数据库中标题、描述
        } 

        $this->success("更新成功", U("/Admin/"), 3);
    }

    public function workUpdate(){
        //文件上传初始化
        $upload = new \Think\Upload();
        $upload->maxSize = 4096000; //限制文件大小
        $upload->exts = array('png'); //上传文件类型
        $upload->savePath = './Images/Company_show/';    //文件上传目录
        $upload->replace = true; //如果同名则覆盖
        $upload->autoSub = false; //不适用子目录名保存

        //标题和描述处理部分
        $banner = M("company_show_index");
        foreach($_POST as $k => $v){
            foreach($v as $kk => $vv){
                $data[$kk][$k] = $vv;
            }
        }

        foreach ($data as $k => $v){
            $kk = $k + 1;
            $upload->saveName = "work".$kk;
            // echo "bannerImg{$k}";die;
            if($_FILES['sloganImg'.$k]['size']){//判断文件大小是否大于0，如果大于0说明有文件要上传
                $info = $upload->uploadOne($_FILES['sloganImg'.$k]);    //上传单个文件
                if(!$info){ //如果不成功则输出错误信息
                    $this->error($upload->getError());
                }
            }
            $banner->where("id=".$kk)->save($v);    //更新数据库中标题、描述
        }

        $this->success("更新成功", U("/Admin/"), 3);
    }

    public function businessUpdate(){
        //文件上传初始化
        $upload = new \Think\Upload();
        $upload->maxSize = 4096000; //限制文件大小
        $upload->exts = array('png'); //上传文件类型
        $upload->savePath = './Images/Business/';    //文件上传目录
        $upload->replace = true; //如果同名则覆盖
        $upload->autoSub = false; //不适用子目录名保存

        //标题和描述处理部分
        $business = M("business_index");
        foreach($_POST as $k => $v){
            foreach($v as $kk => $vv){
                $data[$kk][$k] = $vv;
            }
        }

        foreach ($data as $k => $v){
            $kk = $k + 1;
            $upload->saveName = "business".$kk;
            // echo "bannerImg{$k}";die;
            if($_FILES['businessImg'.$k]['size']){//判断文件大小是否大于0，如果大于0说明有文件要上传
                $info = $upload->uploadOne($_FILES['businessImg'.$k]);    //上传单个文件
                if(!$info){ //如果不成功则输出错误信息
                    $this->error($upload->getError());
                }
            }
            $business->where("id=".$kk)->save($v);    //更新数据库中标题、描述
        }

        $this->success("更新成功", U("/Admin/"), 3);
    }

    public function yearUpdate(){
        $year = M("year_index");
        foreach($_POST as $k => $v){
            foreach($v as $kk => $vv){
                $data[$kk][$k] = $vv;
            }
        }

        foreach ($data as $k => $v){
            $kk = $k + 1;
            $year->where("id=".$kk)->save($v);    //更新数据库中标题、描述
        }
        $this->success("更新成功", U("/Admin/"), 3);
    }



    public function footerUpdate(){
        $com_footer = M("company_info_footer");
        $com_footer->where("id='1'")->save($_POST);    //更新数据库中标题、描述

        $this->success("更新成功", U("/Admin/"), 3);
    }

    public function erweiUpdate(){
        //文件上传初始化
        $upload = new \Think\Upload();
        $upload->maxSize = 4096000; //限制文件大小
        $upload->exts = array('png'); //上传文件类型
        $upload->savePath = './Images/';    //文件上传目录
        $upload->replace = true; //如果同名则覆盖
        $upload->autoSub = false; //不适用子目录名保存
        $upload->saveName = "erwei";	//指定文件名

        if($_FILES['ImageErwei']['size']){
            $info = $upload->uploadOne($_FILES['ImageErwei']);    //上传单个文件
            if(!$info){ //如果不成功则输出错误信息
                $this->error($upload->getError());
            }
        }

        $this->success("更新成功", U("/Admin/"), 3);
    }

    public function linkUpdate(){
        $link = M("link_out_index");

        foreach($_POST as $k => $v){
            foreach($v as $kk => $vv){
                $data[$kk][$k] = $vv;
            }
        }

        foreach ($data as $k => $v){
            $kk = $k + 1;
            $link->where("id=".$kk)->save($v);    //更新数据库中标题、描述
        }
        $this->success("更新成功", U("/Admin/"), 3);
    }
}