<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
header("content-type:text/html; charset=utf8");
$_SESSION['num']=0;
class UserController extends Controller {
    function login(){

        if($_COOKIE['num']==1){
            $this->assign('num',1);
        }else{
            $this->assign('num',0);
        }
        setcookie('num',time()-1);
        $this->display('user/login');
    }

    function verify(){
        $config =    array(    'fontSize'    =>    30,    // 验证码字体大小
                                'length'      =>    4,     // 验证码位数
                                'useNoise'    =>    false, // 关闭验证码杂点
                                'codeSet'     =>    '0123456789',  //数字
                                'useCurve'    =>    false,   // 关闭线条
        );
        $Verify = new Verify($config);
        $Verify->entry();
    }


    function login_do(){
            if($_COOKIE['num']==1){
                $code=I('post.code');   //接受验证码
                $Verify = new Verify();
                $res=$Verify->check($code);  //检测输入的验证码和验证码是否一致
                if(!$res){
                    $this->error('验证码输入错误',U('User/login'));
                }
            }
        $username=I('post.username');  //接受账号
        if(empty($username)){
            $this->error('账号不能为空',U('User/login'));
        }
        $pwd=I('post.pwd');
        if(empty($pwd)){
            $this->error('密码不能为空',U('User/login'));
        }
        $obj=D('User');  //实例化model
        $where=['username'=>$username];   //条件
        $arr=$obj->check_login($where);   //检测是否有此账号
        if(!$arr){
            $this->error('没有此账号，请注册账号',U('User/login'));
        }else{
            if($arr['num']>=3){
                setcookie('num',1);
            }
            if($arr['num']>=5){
                $where=['id'=>$arr['id']];
                $arr=['status'=>3];
                $res=$obj->up_status($where,$arr);
            }
            switch($arr['status']){
                case 1:$this->error('此账号待审核',U('User/login'));break;
                case 3:$this->error('此账号以被冻结',U('User/login'));break;
                case 4:$this->error('没有此账号，请注册',U('User/login'));break;
                default;
                    break;
            }
            $pwd=md5($pwd.$arr['rand'].$arr['id']);
            if($pwd==$arr['pwd']){
				session('arr',$arr);
                $this->success('登陆成功',U('Index/Index'));
				$where=['id'=>$arr['id']];
				$data=['num'=>0];
				$obj->up_num($where,$data);
				
            }else{
                $where1=['id'=>$arr['id']];
                $arr1=['num'=>$arr['num']+1];
                $res=$obj->up_num($where1,$arr1);
                $this->error('账号密码不匹配',U('User/login'));
            }
        }
    }
    /**
     * 退出账号
     */
    function session_del(){
        session('arr',null);
        $this->success('退出成功',U('Index/Index'));
    }
    /**
     * 加载注册视图
     */
    function user_add(){
       layout(false);
       $this->display('user/user');
   }
    /**
     * 前台注册
     */
    function user_add_do(){
        $username=I('post.username');  //接受用户名
        $pwd=I('post.pwd');  //接受密码
        $psd=I('post.psd');  //接受确认密码
        $tel=I('post.tel');
        $content=I('post.content');
        if(empty($username)){
            $this->error('用户名不能为空');
        }
        if(empty($tel)){
            $this->error('手机号不能为空');
        }
        if(empty($content)){
            $this->error('职业不能为空');
        }
        if(empty($pwd)){
            $this->error('密码不能为空');
        }
        if(empty($psd)){
            $this->error('确认密码不能为空');
        }
        if($pwd!=$psd){
            $this->error('密码和确认密码请保持一致');exit;
        }
        $arr=[
            'username'=>$username,
            'pwd'=>$pwd,
            'ctime'=>time(),
            'rand'=>rand(1000,9999),
            'status'=>2,
            'tel'=>$tel,
            'content'=>$content,
        ];
        $obj=D('user');
        $id=$obj->user_add($arr);
        if(!$id){
            $this->error('注册失败');
        }else{
            $where=[
                'id'=>$id,
            ];
            $arr=$obj->check_login($where);
            $pwd=[
                'pwd'=>md5($arr['pwd'].$arr['rand'].$arr['id']),
            ];
            $num=$obj->up_pwd($where,$pwd);
            if($num){
                $this->success('注册成功',U('user/login'));
            }
        }

    }

    function register(){
        $this->display('register/register');
    }



}