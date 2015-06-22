<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {
	public function index() {
		p(__SELF__);
		$this->display();
	}
	public function login() {
		if (!empty($_POST)) {
			$verify = new \Think\Verify();
			if (!$verify->check($_POST['captche'])) {
				$this->error('验证码错误', U('login'), 3);
			}
			$user = new \Home\Model\UserModel();
			$username = I('username');
			$password = I('password');
			$result = $user->checkNamePwd($username, $password);
			if (!$result) {
				$this->error('亲,登陆失败！', U('login'), 3);
			} else {
				session('uid', $result['id']);
				session('username', $result['username']);
				$this->success('登陆成功！', U('Home/Info/uinfo'), 3);
			}
		} else {
			$this->display();
		}
	}
	public function logout() {
		session(null);
		// $this->redirect('index');
		$this->success('注销成功', U('Index/index'));
	}
	public function register() {
		// if(!empty($_POST))
		// p(I('post.'));测试
		if (!empty($_POST)) {
			$verify = new \Think\Verify();
			if (!$verify->check($_POST['captche'])) {
				$this->error('验证码错误', U('Home/User/register'));
			} else {
				$user = new \Home\Model\UserModel();
				$result = $user->create();
				if (!$result) {
					show_bug($user->getError());
					exit;
				}
				$result = $user->add();
				if ($result) {
					$this->success('注册成功!', U('Home/User/login'), 3);
				} else {
					$this->error('注册失败!', U('Home/User/register'), 3);
				}
			}
		} else {
			$this->display();
		}
	}
	public function verifyImg() {
		$conf = array(
			'length' => 1,
			'fontSize' => 18,
			'imageH' => 32,
			'imageW' => 160,
			'useNoise' => false,
			'useCurve' => false,
		);
		$verify = new \Think\Verify($conf);
		$verify->entry();
	}

}

?>