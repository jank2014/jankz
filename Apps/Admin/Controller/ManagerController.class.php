<?php
namespace Admin\Controller;
use Think\Controller;

class ManagerController extends Controller {
	public function login() {
		if (!empty($_POST)) {
			$verify = new \Think\Verify();
			if (!$verify->check($_POST['captche'])) {
				$this->error('验证码错误');
			} else {
				// p(I('post.'));die;检查接受正常
				$user = new \Admin\Model\UserModel();
				$result = $user->checkNamePwd($_POST['username'], $_POST['password']);
				if ($result === false) {
					$this->error('登陆失败', U('login'));
				} else {
					session('uid', $result['id']);
					session('username', $result['username']);
					$this->redirect('Index/index');
					// $this->redirect('Admin/Index/index',array('id'=>$result['id'],'username'=>$result['username']),'登陆成功，致敬管理员');
				}

			}

		}

		$this->display();
	}
	public function logout() {
		session(null);
		$this->redirect('Manager/login');
	}
	public function verifyImg() {
		$conf = array(
			'length' => 5,
			'useNoise' => false,
			'useCurve' => false,
			'imageH' => 32,
			'imageW' => 160,
			'fontSize' => 18,
		);
		$verify = new \Think\Verify($conf);
		$verify->entry();
	}

	public function test() {
		echo C('ADMIN_AUTH_KEY');
	}
}

?>