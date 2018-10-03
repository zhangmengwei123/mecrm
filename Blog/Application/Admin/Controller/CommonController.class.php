<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
    function __construct(){
        parent::__construct();
        $name=session('name');
        if(empty($name)){
            $this->error('请先登录',U('Login/login'));
        }
    }
}