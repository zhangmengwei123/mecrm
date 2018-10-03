<?php
namespace Admin\Model;
use Think\Model;
class  CategoryModel extends Model{
    protected $tableName='blog_category';
    //字段映射
    protected $_map = array(
        'name' =>'c_name',
        'show'  =>'c_show',
        'leve' => 'c_leve',
    );
    //自动验证
    protected $_validate = array(
        array('c_name','require','分类必填！'),
        array('c_name','','该分类已添加！',0,'unique',3),
        array('c_show','require','是否展示必选！',3),
        array('c_leve','require','权重必填！'),
        array('c_leve',array(1,100),'权重不能大于100！',3,'between'),
    );

    //自动完成
    protected $_auto = array (
        array('c_time','time',1,'function'),
        array('c_man','category_man',1,'callback'),
    );
    function category_man(){
        $name=session('name');
        return $name;
    }

    function category_add(){
        $category=D('Category');
        $arr=$category->create();
        if($arr){
            return $this->add($arr);
        }else{
            exit($category->getError());
        }
    }
    function category_page($p,$page_num,$where=[]){
        $info=[];
        $info['data']=$this->where($where)->limit($p,$page_num)->select();
        $info['count']=$this->where($where)->count();
        //echo $this->_sql();exit;
        return $info;
    }

//    function category_del($id){
//        return $this->where(['c_id'=>$id])->delete();
//    }

    function category_update($id){
        return $this->where(['c_id'=>$id])->find();
    }

    function category_update_do(){
        $category=D('Category');
        $arr=$category->create();
        return $this->where(['c_id'=>$arr['c_id']])->save($arr);
    }

    function category_select(){
        return $this->where(['c_show'=>1])->select();
    }
}