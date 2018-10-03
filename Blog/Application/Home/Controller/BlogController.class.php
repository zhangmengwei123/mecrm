<?php
namespace Home\Controller;
use Think\Controller;
class BlogController extends Controller {
    public function blog_detail(){
        $this->display();
    }
    public function blog_list(){
        $this->display();
    }
}