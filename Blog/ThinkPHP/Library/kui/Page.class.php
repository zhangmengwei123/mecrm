<?php
namespace kui;
header('content-type:text/html;charset=utf8');
class Page{
    public $counts;
    public $p;
    public $offset=3;
    /** 求总页数 */
    function __construct($page_count,$page_num){
        //总条数/每页显示条数向上取整
        $this->counts=ceil($page_count/$page_num);
        //获取当前页码
        $this->p=empty($_GET['p'])?1:$_GET['p'];
    }
    function show(){
        //如果当前页数-偏移量<1
        if($this->counts<$this->offset*2+1){
            $start=1;
            $end=$this->counts;
        }else if($this->p-$this->offset<1){
            //开始位置
            $start=1;
            //结束位置
            $end=$this->offset*2+1;
            //当前页+偏移量 总条数
        }else if($this->p+$this->offset>$this->counts){
            //结束位置
            $end=$this->counts;
            //开始位置
            $start=$this->counts-$this->offset*2;
        }else{

            $start=$this->p-$this->offset;
            $end=$this->p+$this->offset;
        }
        //上一页
        $prve=$this->p-1<1?1:$this->p-1;
        //下一页
        $next=$this->p+1>$this->counts?$this->counts:$this->p+1;
        $str="<a href='index.php?m=Home&c=Student&a=student_list&p=$prve'>上一页</a>&nbsp;&nbsp;";
        for($i=$start;$i<=$end;$i++){
            if($i==$this->p){
                $str .= "<a href='index.php?m=Home&c=Student&a=student_list&p=$i'; style='font-size:50px;   color:red;'>$i</a>&nbsp;&nbsp;";
            }else{
                $str .= "<a href='index.php?m=Home&c=Student&a=student_list&p=$i'>$i</a>&nbsp;&nbsp;";
            }
        }
        $str .="<a href='index.php?m=Home&c=Student&a=student_list&p=$next'>下一页</a>&nbsp;&nbsp;";
        return $str;
    }
    function showajax(){
        if($this->p-$this->offset<1){
            $start=1;
            $end=1+2*$this->offset;
        }else if($this->p+$this->offset>$this->counts){
            $start=$this->counts-$this->offset*2;
            $end=$this->counts;
        }else{
            $start=$this->p-$this->offset;
            $end=$this->p+$this->offset;
        }
        if($this->counts<$this->offset*2+1){
            $start=1;
            $end=$this->counts;
        }
        $up_page=$this->p-1<1?1:$this->p-1;
        $down_page=$this->p+1>$this->counts?$this->counts:$this->p+1;
        $str='';
        $str.="<a href='javascript:;' onclick='page(".$up_page.")'>".$this->style[0]."</a>";
        for($i=$start;$i<=$end;$i++){
            if($this->p==$i){
                $str.="<a href='javascript:;' style='color:red;font-size:23px;'
						onclick='page(".$i.")'>".$i."</a>&nbsp;&nbsp;";
            }else{
                $str.="<a href='javascript:;'onclick='page(".$i.")'>".$i."</a>&nbsp;&nbsp;";
            }
        }	$str.="<a href='javascript:;' onclick='page(".$down_page.")'>".$this->style[1]."</a>";
        return $str;
    }


}

?>
