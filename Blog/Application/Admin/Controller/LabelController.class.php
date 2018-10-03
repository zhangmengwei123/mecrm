<?php
namespace Admin\Controller;
use Think\Controller;
class LabelController extends CommonController{
    /** 展示标签添加页面 */
    public function label_add(){
        if(IS_POST){
            $label=D('Label');
            $res=$label->label_add();
            if($res){
                $this->success('添加成功',U('Label/label_add'));
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
    public function label_list(){
        //查询第一页数据
        $p = I('get.p', 1);
        $page_num = 3;
        $label = D('Label');
        $where = 1;
        $data = $label->label_page($p, $page_num, $where);

        //获取页码
        $count = $label->label_count($where);
        $page = new \kui\Page($count, $page_num);

//        var_dump($page);exit;
        $str = $page->showAjax();
        $this->assign('data', $data);
        $this->assign('str', $str);
        $name=session('name');
        $this->assign('name',$name);
        $this->display('label_list');
    }
    /** 搜索加分页 */
    function label_page(){
        $p = I('get.p');
        $sou = I('get.sou');
        $where= "";
        if (!empty($sou)) {
            $where = " l_name like '%$sou%' and l_show";
        }
        $page_num = 3;
        $label = D('Label');
        $data = $label->label_page($p, $page_num, $where);
        //查询总条数
        $count = $label->label_count($where);
        $page = new \kui\Page($count, $page_num);
        $str = $page->showAjax();
        $info['data'] = $data;
        $info['str'] = $str;
        $info['p'] = $p;
        echo json_encode($info);

    }
    /** 显示修改页面 */
    function label_update(){
        $id=I('get.id');
        $cate=D('Label');
        $arr=$cate->label_update($id);
        //print_r($arr);exit;
        $this->assign('arr',$arr);
        $this->display();
    }
    /** 执行修改 */
    function label_update_do(){
        $cate=D('Label');
        $res=$cate->label_update_do();
        //print_r($arr);exit;
        if($res){
            $this->success('修改成功',U('Label/label_list'));
        }else{
            $this->error('修改失败');
        }
    }

}