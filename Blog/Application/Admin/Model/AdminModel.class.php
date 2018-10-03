<?php
namespace Admin\Model;
use Think\Model;
class  AdminModel extends Model{
    protected $tableName='blog_admin';
    /**管理员管理*/
    protected $_map = array(
        'admin_id'=>'id',
        'name' =>'account',
        'pwd1'  =>'pwd',
        'phone' => 'tel',
    );
    //自动验证
    protected $_validate = array(
        array('account','require','用户名必填！'),
        array('account','/^[a-z]\w{2,19}$/','用户名开头不能为数字,不能为汉字，不能小于3位，不能大于20位',3,'regex'),
        array('account','','该用户已添加！',0,'unique',3),
        array('pwd','require','密码必填！'),
        array('pwd2','pwd','确认密码不正确',0,'confirm'),
        array('tel','require','手机号必填！'),
        array('tel','/^[1]\d{10}$/','请输入正确的手机号',3,'regex'),
    );

    //自动完成
    protected $_auto = array (
        array('t_time','time',1,'function'),
    );

    function admin_add(){
        $admin=D('Admin');
        $arr=$admin->create();
        if($arr){
            $id=$this->add($arr);
            $arr['pwd']=md5($arr['pwd'].$id);
            return $this->where(['id'=>$id])->save($arr);
        }else{
            exit($admin->getError());
        }
    }

    function admin_list(){
        $student=D('Admin');
        return $student->select();
//        print_r($res);exit;
    }
    //查询单条
    function admin_find($data){
        return $this->where($data)->find();
//       echo $this->_sql();exit;
    }
    //总条数
    function admin_count($where=[]){
        return  D('Admin')->where($where)->count();
    }
    //分页
    function admin_page($p,$page_num,$where=[]){
        return D('Admin')->where($where)->page($p,$page_num)->select();
        //echo $this->_sql();
    }
    //修改查询
    function admin_update($id){
        return $this->where(['l_id'=>$id])->find();
    }
    //修改
    function admin_update_do(){
        $label=D('Admin');
        $arr=$label->create();
        $arr['pwd']=md5($arr['pwd'].$arr['id']);
//      create ($arr);exit;
        //print_r($arr);exit;
        return $this->where(['id'=>$arr['id']])->save($arr);
    }
    function admin_pale($id){
        return $this->where(['id'=>$id])->find();
    }
}