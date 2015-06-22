<?php
namespace Admin\Controller;
use Think\Controller;

class MemberController extends Controller {
	public function index() {
		$user = M('user');
		$user = $user->where('id>1')->select();
		$this->user = $user;
		$this->display();
	}
	public function memberAdd() {
		//p(I('post.'));die;测试数据传输
		if (!empty($_POST)) {
			$user = M('user');
			$user->create();
			$result = $user->add();
			if ($result) {
				$this->success('Yeap!添加会员成功!', U('index'));
			} else {
				$this->error('添加会员失败!返回中...', U('index'));
			}
		}
	}
	public function memberEdit() {
		if (!empty($_POST)) {
			// p(I('post.'));die;
			$user = M('user');
			$user->create();
			$result = $user->save();
			if ($result) {
				$this->success('更新成功', U('index'));
			} else {
				$this->error('更新失败', U('index'));
				// p(I('post.'));die;
			}
		} else {
			$id = I('id', '', 'intval');
			if ($id != false) {
				$user = M('user');
				$user = $user->field('loginip,logintime,creattime,score', true)->where(array('id' => $id))->find();
				$this->user = $user;
				$this->display();
			}
		}
	}
	public function memberDel() {
		$id = I('id', '', 'intval');
		$user = M('user');
		$result = $user->delete($id);
		if ($result) {
			$this->success('Yeap!已删除会员', U('index'));
		} else {
			$this->error('会员删除失败!返回中', U('index'));
		}
	}

}

?>