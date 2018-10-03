<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController{
    /** 展示管理员添加页面 */
    public function admin_add(){
        $this->display();
    }

    function admin_add_do(){
        $admin=D('Admin');
        $res=$admin->admin_add();
        if($res){
            $this->success('添加成功',U('Admin/admin_add'));
        }else{
            $this->error('添加失败');
        }

    }

    /** 展示页面 */
    public function admin_list(){
        //查询第一页数据
        $p = I('get.p', 1);
        $page_num = 3;
        $label = D('Admin');
        $where = 1;
        $data = $label->admin_page($p, $page_num, $where);

        //获取页码
        $count = $label->admin_count($where);
        $page = new \kui\Page($count, $page_num);

//        var_dump($page);exit;
        $str = $page->showAjax();
        $this->assign('data', $data);
        $this->assign('str', $str);
        $name=session('name');
        $this->assign('name',$name);
        $this->display('admin_list');
    }
    /** 搜索加分页 */
    function admin_page(){
        $p = I('get.p');
        $sou = I('get.sou');
        $where= "";
        if (!empty($sou)) {
            $where = " account like '%$sou%' ";
        }
        $page_num = 3;
        $admin = D('Admin');
        $data = $admin->admin_page($p, $page_num, $where);
        //查询总条数
        $count = $admin->admin_count($where);
        $page = new \kui\Page($count, $page_num);
        $str = $page->showAjax();
        $info['data'] = $data;
        $info['str'] = $str;
        $info['p'] = $p;
        echo json_encode($info);

    }
    /** 显示修改页面 */
    function admin_update(){
        $cate=D('Admin');
        $id=I('get.id');
        $name=session('name');
        $data=$cate->admin_pale($id);
        if($name==$data['account']){
            $arr=$cate->admin_update($id);
            //print_r($arr);exit;
            $this->assign('arr',$arr);
            $this->display();
        }else{
            $this->error('没有权限修改别人账号');
        }
    }

    /** 执行修改 */
    function admin_update_do(){
        $cate=D('Admin');
        $res=$cate->admin_update_do();
        //print_r($arr);exit;
        if($res){
            $this->success('修改成功',U('Admin/admin_list'));
        }else{
            $this->error('修改失败');
        }
    }

}