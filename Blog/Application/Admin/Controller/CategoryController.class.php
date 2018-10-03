<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends CommonController{
    /** 展示分类添加页面 */
    public function category_add(){
        if(IS_POST){
            $category=D('Category');
            $res=$category->category_add();
            if($res){
                $this->success('添加成功',U('Category/category_add'));
            }else{
                $this->error('添加失败');
            }
        }else{
            $name=session('name');
            $this->assign('name',$name);
            $this->display();
        }

    }
    //搜索 展示 分页
    public function category_list(){
        $category=D('Category');
        $arr=I('get.');
        $where=[];
        if(!empty($arr['name'])){
            $where['c_name']=['like','%'.$arr['name'].'%'];
        }
        if(!empty($arr['leve'])){
            $where['c_show']=['like','%'.$arr['leve'].'%'];
        }

        $p=I('get.p',1);
        $page_num=3;
        $pa=($p-1)*$page_num;
        $info=$category->category_page($pa,$page_num,$where);
        $data=$info['data'];
        $count=$info['count'];
        $page=new \Think\Page($count,$page_num);
        $show=$page->show();
        $name=session('name');
        $this->assign('arr',$arr);
        $this->assign('name',$name);
        $this->assign('data',$data);
        $this->assign('str',$show);
        $this->display();
    }

//    function category_del(){
//        $id=I('get.id');
//        $category=D('Category');
//        $res=$category->category_del($id);
//        if($res){
//            $this->success('删除成功');
//        }else{
//            $this->error('删除失败');
//        }
//    }
    /** 显示修改页面 */
    function category_update(){
        $id=I('get.id');
        $cate=D('Category');
        $arr=$cate->category_update($id);
        //print_r($arr);exit;
        $this->assign('arr',$arr);
        $this->display();
    }
    /** 执行修改 */
    function category_update_do(){
        $cate=D('Category');
        $res=$cate->category_update_do();
        //print_r($arr);exit;
        if($res){
            $this->success('修改成功',U('Category/category_list'));
        }else{
            $this->error('修改失败');
        }
    }
}