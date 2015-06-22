<?php
namespace Home\Controller;
use Think\Controller;

class InfoController extends CommonController {
	public function uinfo() {
		$user = M('user');
		$user = $user->field('id,username,score,creattime')->where(array('id' => $_SESSION['uid']))->find();
		$this->user = $user;
		$this->display();
	}
}
?>