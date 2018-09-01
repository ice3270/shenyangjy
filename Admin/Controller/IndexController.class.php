<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(!empty(session("username"))){
            redirect(U("/Admin/Pages/index"));
        }
        $this->display();
    }
    public function login(){
        $username = $_POST['u'];
        $password = md5($_POST['p']);
        $m = M("user");
        $m_info = $m->where("username='{$username}'")->find();

        if (!$m_info){
            $this->error("没有此用户！请联络管理员核对管理员用户信息！", "" ,3);
        }else{
            if($password == $m_info['password']){
                session('username',$username);  //设置session,登陆成功
                $this->success("登录成功！", U("/Admin/Pages/index"));
            }else{
                $this->error("密码错误！请联络管理员核对管理员用户信息！", "" ,3);
            }
        }
    }
    public function logout(){
        session(null); // 清空当前的session
        $this->success("管理员已安全退出！", U("/Admin/Index/index"));
    }
}