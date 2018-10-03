<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends CommonController{
    //显示系统设置视图
    function systemChange(){
        $this->display('systemChange');
    }
    //执行配置
    function system_do(){
        $data=I('post.');
        //print_R($data);

    //把配置文件数据取出来
        $path="./Application/Common/Conf/config.php";
        //dump($path);exit;
        $config=include($path);
        //dump($config);exit;
    //把配置文件配置和网站配置合并成一个
        $conf=array_merge($config,$data);
        //print_R($conf);exit;
        //dump($conf);
    //吧合并后的数组写入文件中
        $str="<?php\n return " .var_export($conf,true).';';
        //dump($str);exit;
        $num=file_put_contents($path,$str);
        if($num){
            $this->success('保存成功',U('System/systemChange'));
        }else{
            $this->error('保存失败');
        }
   }
}