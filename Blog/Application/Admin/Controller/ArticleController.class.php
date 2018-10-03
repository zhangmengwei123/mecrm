<?php
namespace Admin\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class ArticleController extends CommonController {
    /** 展示博文添加页面 */
    public function article_add(){
        $name=session('name');
        $this->assign('name',$name);
        $category=D('Category');
        $data=$category->category_select();
        $this->assign('data',$data);
        $label=D('Label');
        $label_data=$label->label_select($label_id=[]);
        $this->assign('label_data',$label_data);
        $this->display();
    }


    function article_add_do(){
        $data=I('post.');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize= 1024*1024*3;// 设置附件上传大小
        $upload->exts= array('jpg', 'gif', 'png', 'jpeg','bmp');// 设置附件上传类型
        $upload->savePath  = './Public/Uploads/'; // 设置附件上传目录    // 上传文件
        $upload->rootPath="./";
        $info=$upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            $students_img=$info['myfile']['savepath'].$info['myfile']['savename'];
            //dump( $students_img);exit;
            $data['path']=$students_img;
        }













        $l_id=I('post.l_id');
        $article=D('Article');
        $res=$article->article_insert($l_id);
        if($res){
            $this->success('添加成功',U('Article/article_add'));
        }else{
            $this->error('添加失败');
        }
    }


    //展示
    public function article_list(){
        $article=D('Article');
        $p=I('get.p',1);
        $page_num=3;
        $page_show=($p-1)*$page_num;
        $data=$article->article_select($page_show,$page_num);
        $count=$article->article_count();
        $Page = new \Think\Page($count,3);
        $show = $Page->show();
        $this->assign('show',$show);
        $this->assign('data',$data);
        //print_r($data);exit;
        $this->display();
    }


    function article_delete(){
        $id=I('get.id');
        $article=D('Article');
        $res=$article->article_del($id);
        if($res){
            $this->success('删除成功',U('Article/article_list'));
        }else{
            $this->error('删除失败');
        }
    }

    function article_update(){
        $id=I('get.id');
        $article=D('Article');
        $arr=$article->article_find($id);
        $this->assign('arr',$arr);

        $category=D('Category');
        $data=$category->category_select();
        $this->assign('data',$data);

        $label=D('Label');
        $label_data=$label->label_select($arr['label_id']);
        $this->assign('label_data',$label_data);

        $this->display();
    }


    function article_update_do(){
        $label_id=I('post.l_id');
        $article=D('Article');
        $res=$article->article_update_do($label_id);
        if($res){
            $this->success('修改成功',U('Article/article_list'));
        }else{
            $this->error('修改失败');
        }
    }

}