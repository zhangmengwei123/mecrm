<?php
namespace Admin\Model;
use Think\Model;
class  UserModel extends Model{
    protected $tableName='blog_user';
    //查询
    function user_list(){
        $user=D('User');
        return $user->select();
//        print_r($res);exit;
    }
    //查询单条
    function user_find($data){
        return $this->where($data)->find();
//       echo $this->_sql();exit;
    }
    //总条数
    function user_count($where=[]){
        return  D('User')->where($where)->count();
    }
    //分页
    function user_page($p,$page_num,$where=[]){
        return D('User')->where($where)->page($p,$page_num)->select();
    }
}