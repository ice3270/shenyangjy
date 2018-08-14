<?php
namespace Home\Controller;
use Think\Controller;
class PagesController extends Controller {
    public function about_us(){
        $this->display("page-about-us");
    }
    public function callus(){
        $this->display("page-callus");
    }
    public function com_new(){
        $this->display("page-com-new");
    }
    public function ex(){
        $this->display("page-ex");
    }
    public function law(){
        $this->display("page-law");
    }
    public function server(){
        $this->display("page-server");
    }
}