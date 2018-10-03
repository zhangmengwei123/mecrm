<?php
namespace Admin\Model;
use Think\Model;
class  LoginModel extends Model{
    protected $tableName='blog_admin';
    /**登录*/

    function login_find($arr){
        return $this->where(['account'=>$arr['name']])->find();
    }
}