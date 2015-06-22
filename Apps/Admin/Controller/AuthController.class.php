<?php
namespace Admin\Controller;
use Think\Controller;

class AuthController extends Controller {
	public function index() {
		$rule = M('auth_rule');
		$group = M('auth_group');
		$group_access = M('auth_group_access');
		$rule = $rule->select();
		$group = $group->select();
		$group_access = $group_access->select();
		$this->rule = $rule;
		$this->group = $group;
		$this->group_access = $group_access;
		$this->display('index');

	}
}
?>