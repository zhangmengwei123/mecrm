<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $name=session('name');
        $this->assign('name',$name);
        $this->display();
    }
    function index_quit(){
        session(null);
        $this->success('退出成功',U('Login/login'));
    }
}