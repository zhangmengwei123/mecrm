<?php
namespace Admin\Model;
use Think\Model;
class  LabelModel extends Model{
    /**标签管理*/
    protected $tableName='blog_label';
    //字段映射
    protected $_map = array(
        'name' =>'l_name',
        'show'  =>'l_show',
    );
    //自动验证
    protected $_validate = array(
        array('l_name','require','标签必填！'),
        array('l_name','','该标签已添加！',0,'unique',1),
        array('l_show','require','是否展示必选！',1),
    );
    //自动完成
    protected $_auto = array (
        array('l_time','time',1,'function'),
        array('l_man','label_man',3,'callback'),
    );
    function label_man(){
        $name=session('name');
        return $name;
    }
    //添加
    function label_add(){
        $label=D('Label');
        $arr=$label->create();
        if($arr){
            return $this->add($arr);
        }else{
            exit($label->getError());
        }
    }
    //查询
    function label_list(){
        $student=D('Label');
        return $student->select();
//        print_r($res);exit;
    }
    //查询单条
    function label_find($data){
        return $this->where($data)->find();
//       echo $this->_sql();exit;
    }
    //总条数
    function label_count($where=[]){
        return  D('Label')->where($where)->count();
    }
    //分页
    function label_page($p,$page_num,$where=[]){
        return D('Label')->where($where)->page($p,$page_num)->select();
    }
    //修改查询
    function label_update($id){
        return $this->where(['l_id'=>$id])->find();
    }
    //修改
    function label_update_do(){
        $label=D('Label');
        $arr=$label->create();
//        create ($arr);exit;
        return $this->where(['l_id'=>$arr['l_id']])->save($arr);
    }

    function label_select($label_id){
        $data=$this->where(['l_show'=>1])->select();
        foreach($data as $k=>$v){
            if(in_array($v['l_id'],$label_id)){
                $data[$k]['flag']=1;
            }else{
                $data[$k]['flag']=0;
            }
        }
        return $data;
    }
}