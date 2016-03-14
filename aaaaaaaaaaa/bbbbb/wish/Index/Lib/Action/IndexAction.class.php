<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	// p($_GET);
    	// echo U('Index/show',array('uid'=>1,'aaa'=>'you'));
    	// p(I('get.'));
    	// p($_GET);
		$this->display('wish');
    }


    public function handle(){
    	echo I('username');
    	// echo $this->_post('username');
    	// 上面这个自带这个功能
    	// htmlspecialchars(string)
    }




}