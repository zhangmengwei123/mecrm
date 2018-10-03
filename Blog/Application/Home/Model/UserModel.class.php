<?php
namespace Home\Model;
use Think\Model;
header("content-type:text/html; charset=utf8");
class UserModel extends Model {
    protected  $tableName='blog_user';
    function check_login($where){
        return $this->where($where)->find();
    }

    function up_num($where,$arr1){
        return $this->where($where)->save($arr1);
    }



    function up_status($where,$arr){
        return $this->where($where)->save($arr);
    }

    function user_add($arr){
       return  $this->add($arr);
    }


    function up_pwd($where,$arr){
        return $this->where($where)->save($arr);
    }

}