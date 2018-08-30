<?php
namespace Admin\Controller;
use Think\Controller;
class EditPagesController extends Controller
{

    public function companyUpdate()
    {
        //文件上传初始化
        $upload = new \Think\Upload();
        $upload->maxSize = 4096000; //限制文件大小
        $upload->exts = array('png'); //上传文件类型
        $upload->savePath = './Images/Company_show/';    //文件上传目录
        $upload->replace = true; //如果同名则覆盖
        $upload->autoSub = false; //不适用子目录名保存
        $upload->saveName = "abus";    //指定文件名

        $company = M("introduce_aboutus");
        $company->where("id='1'")->save($_POST);    //更新数据库中标题、描述

        if ($_FILES['company_img']['size']) {
            $info = $upload->uploadOne($_FILES['company_img']);    //上传单个文件
            if (!$info) { //如果不成功则输出错误信息
                $this->error($upload->getError());
            }
        }

        $this->success("更新成功", U("/Admin/Pages/aboutus"), 3);
    }//End 公司图文介绍

    public function comOtherUpdate()
    {
        $other = M("introduce_aboutus");
        foreach ($_POST as $k => $v) {
            foreach ($v as $kk => $vv) {
                $data[$kk][$k] = $vv;
            }
        }

        foreach ($data as $k => $v) {
            $kk = $k + 2;
            $other->where("id=" . $kk)->save($v);    //更新数据库中标题、描述
        }
        $this->success("更新成功", U("/Admin/Pages/abOther"), 3);
    }//End 公司其他简介

    public function abTeamAdd()
    {
        //文件上传初始化
        $data = $_POST;

        $upload = new \Think\Upload();
        $upload->maxSize = 4096000; //限制文件大小
        $upload->exts = array('png'); //上传文件类型
        $upload->savePath = './Images/team/';    //文件上传目录
        $upload->replace = true; //如果同名则覆盖
        $upload->autoSub = false; //不适用子目录名保存

        $info = $upload->uploadOne($_FILES['headImg']);    //上传单个文件
        if (!$info) { //如果不成功则输出错误信息
            $this->error($upload->getError());
        }

        //数据库操作
        $data['imgpath'] = $info['savename']; //获取并保存文件名

        $m = M("team_aboutus");//创建数据库对象
        $m->data($data)->add();//向数据库中插入数据

        $this->success("添加成功", U("/Admin/Pages/abTeamShow"), 3);
    }//End 添加团队成员功能

    public function abTeamUpdate()
    {
        //文件上传初始化
        $m = M("team_aboutus");//创建数据库对象
        $m_info = $m->where("id={$_POST['id']}")->find();
        $imgpath = $m_info['imgpath'];

        if ($_FILES['headImg']['size'] > 0) {
            $upload = new \Think\Upload();
            $upload->maxSize = 4096000; //限制文件大小
            $upload->exts = array('png'); //上传文件类型
            $upload->savePath = './Images/team/';    //文件上传目录
            $upload->replace = true; //如果同名则覆盖
            $upload->autoSub = false; //不适用子目录名保存
            $upload->saveName = rtrim($imgpath, ".png");

            $info = $upload->uploadOne($_FILES['headImg']);    //上传单个文件
            if (!$info) { //如果不成功则输出错误信息
                $this->error($upload->getError());
            }
        }

        $data = $_POST;
        $data['imgpath'] = $imgpath;
        $m->where("id={$_POST['id']}")->save($data);//向数据库中插入数据

        $this->success("修改成功", U("/Admin/Pages/abTeamShow"), 3);
    }//End 更新团队成员

    public function abTeamDel()
    {
        //数据库操作
        $m = M("team_aboutus");
        $m_info = $m->where("id = {$_GET['id']}")->find();
        $imgpath = "./Uploads/Images/team/" . $m_info['imgpath'];
        unlink($imgpath);
        $m->where("id = {$_GET['id']}")->delete();
        $this->success("删除成功", U("/Admin/Pages/abTeamShow"), 3);
    }//End 删除团队成员功能

    public function addLogo(){
        //数据库操作
        $upload = new \Think\Upload();
        $upload->maxSize = 4096000; //限制文件大小
        $upload->exts = array('png'); //上传文件类型
        $upload->savePath = './Images/FriendCom/';    //文件上传目录
        $upload->replace = true; //如果同名则覆盖
        $upload->autoSub = false; //不适用子目录名保存

        $info = $upload->uploadOne($_FILES['logoImage']);    //上传单个文件
        if (!$info) { //如果不成功则输出错误信息
            $this->error($upload->getError());
        }

        $data['imgPathName'] = $info['savename'];
        $l = M("collaborate");
        $l->add($data);
        $this->success("企业Logo添加成功", U("/Admin/Pages/collaborate"), 3);
    }//End  添加企业Logo

    public function delLogo(){
        //数据库操作
        $m = M("collaborate");
        $m_info = $m->where("id = {$_GET['id']}")->find();
        $imgpath = "./Uploads/Images/FriendCom/" . $m_info['imgPathName'];
        unlink($imgpath);
        $m->where("id = {$_GET['id']}")->delete();
        $this->success("企业Logo删除成功", U("/Admin/Pages/collaborate"), 3);
    }//End 删除Logo

    public function serverAdd()
    {
        //文件上传初始化
        $data = $_POST;

        $upload = new \Think\Upload();
        $upload->maxSize = 4096000; //限制文件大小
        $upload->exts = array('png'); //上传文件类型
        $upload->savePath = './Images/blog/';    //文件上传目录
        $upload->replace = true; //如果同名则覆盖
        $upload->autoSub = false; //不适用子目录名保存

        $info = $upload->uploadOne($_FILES['imgServer']);    //上传单个文件
        if (!$info) { //如果不成功则输出错误信息
            $this->error($upload->getError());
        }

        //数据库操作
        $data['imgpath'] = $info['savename']; //获取并保存文件名

        $s = M("serve_page");//创建数据库对象
        $s->data($data)->add();//向数据库中插入数据

        $this->success("添加成功", U("/Admin/Pages/server"), 3);
    }//End 添加服务内容功能

    public function serverUpdate()
    {
        //文件上传初始化
        $s = M("serve_page");//创建数据库对象
        $s_info = $s->where("id={$_POST['id']}")->find();
        $imgpath = $s_info['imgpath'];

        if ($_FILES['imgServer']['size'] > 0) {
            $upload = new \Think\Upload();
            $upload->maxSize = 4096000; //限制文件大小
            $upload->exts = array('png'); //上传文件类型
            $upload->savePath = './Images/blog/';    //文件上传目录
            $upload->replace = true; //如果同名则覆盖
            $upload->autoSub = false; //不适用子目录名保存
            $upload->saveName = rtrim($imgpath, ".png");

            $info = $upload->uploadOne($_FILES['imgServer']);    //上传单个文件
            if (!$info) { //如果不成功则输出错误信息
                $this->error($upload->getError());
            }
        }

        $data = $_POST;
        $data['imgpath'] = $imgpath;
        $s->where("id={$_POST['id']}")->save($data);//向数据库中插入数据

        $this->success("修改成功", U("/Admin/Pages/server"), 3);
    }//End 更新服务内容
    public function serverDel()
    {
        //数据库操作
        $m = M("serve_page");
        $m_info = $m->where("id = {$_GET['id']}")->find();
        $imgpath = "./Uploads/Images/blog/" . $m_info['imgpath'];
        unlink($imgpath);
        $m->where("id = {$_GET['id']}")->delete();
        $this->success("删除成功", U("/Admin/Pages/server"), 3);
    }//End 删除团队成员功能

    public function exAdd()
    {
        //文件上传初始化
        $data = $_POST;

        $upload = new \Think\Upload();
        $upload->maxSize = 4096000; //限制文件大小
        $upload->exts = array('png'); //上传文件类型
        $upload->savePath = './Images/portfolio/';    //文件上传目录
        $upload->replace = true; //如果同名则覆盖
        $upload->autoSub = false; //不适用子目录名保存

        $info = $upload->uploadOne($_FILES['imgEx']);    //上传单个文件
        if (!$info) { //如果不成功则输出错误信息
            $this->error($upload->getError());
        }

        //数据库操作
        $data['imgpath'] = $info['savename']; //获取并保存文件名

        $e = M("ex_page");//创建数据库对象
        $e->data($data)->add();//向数据库中插入数据

        $this->success("添加成功", U("/Admin/Pages/example"), 3);
    }//End 添加案例

    public function exUpdate()
    {
        //文件上传初始化
        $e = M("ex_page");//创建数据库对象
        $e_info = $e->where("id={$_POST['id']}")->find();
        $imgpath = $e_info['imgpath'];

        if ($_FILES['imgEx']['size'] > 0) {
            $upload = new \Think\Upload();
            $upload->maxSize = 4096000; //限制文件大小
            $upload->exts = array('png'); //上传文件类型
            $upload->savePath = './Images/portfolio/';    //文件上传目录
            $upload->replace = true; //如果同名则覆盖
            $upload->autoSub = false; //不适用子目录名保存
            $upload->saveName = rtrim($imgpath, ".png");

            $info = $upload->uploadOne($_FILES['imgEx']);    //上传单个文件
            if (!$info) { //如果不成功则输出错误信息
                $this->error($upload->getError());
            }
        }

        $data = $_POST;
        $data['imgpath'] = $imgpath;
        $e->where("id={$_POST['id']}")->save($data);//向数据库中插入数据

        $this->success("修改成功", U("/Admin/Pages/example"), 3);
    }//End 更新案例

    public function exDel()
    {
        //数据库操作
        $m = M("ex_page");
        $m_info = $m->where("id = {$_GET['id']}")->find();
        $imgpath = "./Uploads/Images/portfolio/" . $m_info['imgpath'];
        unlink($imgpath);
        $m->where("id = {$_GET['id']}")->delete();
        $this->success("删除成功", U("/Admin/Pages/example"), 3);
    }//End 删除团队成员功能
}