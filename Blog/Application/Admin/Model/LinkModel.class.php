<?php
namespace Admin\Model;
use Think\Model;
class  LinkModel extends Model{
    /**标签管理*/
    protected $tableName='blog_link';
    //字段映射
    protected $_map = array(
        'l_id'=>'id',
        'name' =>'account',
        'rl'=>'url',
    );
    //自动验证
    protected $_validate = array(
        array('account','require','名称必填！'),
        array('account','','该网址已添加！',0,'unique',1),
    );
    //自动完成
    protected $_auto = array (
        array('time','time',1,'function'),
    );

    //添加
    function link_add(){
        $link=D('Link');
        $arr=$link->create();
        if($arr){
            return $this->add($arr);
        }else{
            exit($link->getError());
        }
    }
    //查询
    function link_list(){
        $student=D('Link');
        return $student->select();
//        print_r($res);exit;
    }
    //查询单条
    function link_find($data){
        return $this->where($data)->find();
//       echo $this->_sql();exit;
    }
    //总条数
    function link_count($where=[]){
        return  D('Link')->where($where)->count();
    }
    //分页
    function link_page($p,$page_num,$where=[]){
        return D('Link')->where($where)->page($p,$page_num)->select();
    }
    //修改查询
    function link_update($id){
        return $this->where(['id'=>$id])->find();
    }
    //修改
    function link_update_do(){
        $link=D('Link');
        $arr=$link->create();
            //print_r($arr);exit;
        return $this->where(['id'=>$arr['id']])->save($arr);
    }
}