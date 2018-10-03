<?php
namespace Admin\Model;
use Think\Model;
class  ArticleModel extends Model{
    protected $tableName='blog_article';
    protected $_map = array(
        'article_id'=>'a_id',
        'title' =>'a_title',
        'content'  =>'a_content',
        'man'  =>'a_man',
        'cate_id'=>'c_id',
    );

    protected $_auto = array (
        array('a_num','0'),
        array('a_time','time',1,'function'),
    );
    function article_insert($l_id){
        $article = D("Article");
        $data=$article->create();
        if ($data){
            $this->startTrans();
            $blog_id=$this->add($data);
            foreach($l_id as $k=>$v){
                $arr[]=['a_id'=>$blog_id,'l_id'=>$v];
            }
            $res=M('article_label')->addAll($arr);

            if($blog_id&&$res){
                $this->commit();
                return true;
            }else{
                $this->rollback();
                return false;
            }
        }else{
            exit($article->getError());
        }
    }

    function article_select($p,$page_num){
        $data=$this->order('a_id asc')->limit($p,$page_num)->join('blog_category on blog_category.c_id=blog_article.c_id')->select();
        //echo $this->_sql();exit;
        foreach($data as $k=>$v){
            $label_name=M('article_label')->join('blog_label on article_label.l_id=blog_label.l_id')->where(['a_id'=>$v['a_id']])->getField('l_name',true);
            $data[$k]['l_name']=implode(',',$label_name);
        }
        //echo $this->_sql();exit;
        return $data;
    }

    function article_count(){
        return $this->count();
    }

    function article_del($id){
        $this->startTrans();
        $res=$this->where(['a_id'=>$id])->delete();
        $num=M('article_label')->where(['a_id'=>$id])->delete();
        if($num&&$res){
            $this->commit();
            return true;
        }else{
            $this->rollback();
            return false;
        }
    }

    function article_find($id){
        $arr=$this->where(['a_id'=>$id])->find();
        $label_id=M('article_label')->where(['a_id'=>$arr['a_id']])->getField('l_id',true);
        $arr['label_id']=$label_id;
        return $arr;
   }

    function article_update_do($l_id){
        $article = D("Article");
        $data=$article->create();
        if($data){

            $this->where(['a_id'=>$data['a_id']])->save($data);

            $this->startTrans();
            $num1=M('article_label')->where(['a_id'=>$data['a_id']])->delete();

            foreach($l_id as $k=>$v){
                $arr[]=['a_id'=>$data['a_id'],'l_id'=>$v];
            }

            $res=M('article_label')->addAll($arr);
            if($num1&&$res){
                $this->commit();
                return true;
            }else{
                $this->rollback();
                return false;
            }
        }
    }

}