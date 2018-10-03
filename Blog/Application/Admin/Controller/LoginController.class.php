<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
    /** 显示登录页面 */
    function login(){
        $this->display();
    }
    /** 登录 */
    function login_do(){
        $code=I('post.code');
        $res=$this->check_verify($code);
        if(!$res){
            $this->error('验证码有误',U('Login/login'));exit;
        }else{


        $arr=I('post.');
        $login=D('Login');
        $data=$login->login_find($arr);
        if(empty($data)){
            $this->error('没有此用户',U('Login/login'));
        }else{
            $pwd=md5($arr['pwd'].$data['id']);
            if($pwd==$data['pwd']){
                session('name',$arr['name']);
                $this->success('登录成功',U('Index/index'));
            }else{
                $this->error('账号或密码错误');
            }
        }
    }
    }
    public function verify(){
        $Verify =     new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->codeSet = '0123456789';
        $Verify->entry();
    }

    /** 验证码检测 */
    function check_verify($code){
        $verify = new \Think\Verify();
        return $verify->check($code);
    }

}