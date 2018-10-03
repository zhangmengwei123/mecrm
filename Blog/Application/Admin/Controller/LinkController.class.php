<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends CommonController{
    /** 展示标签添加页面 */
    public function link_add(){
        if(IS_POST){
            $link=D('Link');
            $res=$link->link_add();
            if($res){
                $this->success('添加成功',U('Link/link_add'));
            }else{
                $this->error('添加失败');
            }
        }else{
            $name=session('name');
            $this->assign('name',$name);
            $this->display();
        }
    }
    /** 展示页面 */
    public function link_list(){
        //查询第一页数据
        $p = I('get.p', 1);
        $page_num = 3;
        $link = D('Link');
        $where = 1;
        $data = $link->link_page($p, $page_num, $where);

        //获取页码
        $count = $link->link_count($where);
        $page = new \kui\Page($count, $page_num);

//        var_dump($page);exit;
        $str = $page->showAjax();
        $this->assign('data', $data);
        $this->assign('str', $str);
        $name=session('name');
        $this->assign('name',$name);
        $this->display('link_list');
    }
    /** 搜索加分页 */
    function link_page(){
        $p = I('get.p');
        $sou = I('get.sou');
        $where= "";
        if (!empty($sou)) {
            $where = " account like '%$sou%'";
        }
        $page_num = 3;
        $link = D('Link');
        $data = $link->link_page($p, $page_num, $where);
        //查询总条数
        $count = $link->link_count($where);
        $page = new \kui\Page($count, $page_num);
        $str = $page->showAjax();
        $info['data'] = $data;
        $info['str'] = $str;
        $info['p'] = $p;
        echo json_encode($info);

    }
    /** 显示修改页面 */
    function link_update(){
        $id=I('get.id');
        $cate=D('Link');
        $arr=$cate->link_update($id);
        //print_r($arr);exit;
        $this->assign('arr',$arr);
        $this->display();
    }
    /** 执行修改 */
    function link_update_do(){
        $cate=D('Link');
        $res=$cate->link_update_do();
        if($res){
            $this->success('修改成功',U('Link/link_list'));
        }else{
            $this->error('修改失败');
        }
    }

}