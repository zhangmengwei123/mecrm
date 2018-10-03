<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController{
    /** 用户展示页面 */
    public function user_list(){
        //查询第一页数据
        $p = I('get.p', 1);
        $page_num = 3;
        $user = D('User');
        $where = 1;
        $data = $user->user_page($p, $page_num, $where);

        //获取页码
        $count = $user->user_count($where);
        $page = new \kui\Page($count, $page_num);

//        var_dump($page);exit;
        $str = $page->showAjax();
        $this->assign('data', $data);
        $this->assign('str', $str);
        $name=session('name');
        $this->assign('name',$name);
        $this->display('user_list');
    }
    /** 搜索加分页 */
    function user_page(){
        $p = I('get.p');
        $sou = I('get.sou');
        $where= "";
        if (!empty($sou)) {
            $where = " username like '%$sou%'";
        }
        $page_num = 3;
        $user = D('User');
        $data = $user->user_page($p, $page_num, $where);
        //查询总条数
        $count = $user->user_count($where);
        $page = new \kui\Page($count, $page_num);
        $str = $page->showAjax();
        $info['data'] = $data;
        $info['str'] = $str;
        $info['p'] = $p;
        echo json_encode($info);

    }
}