<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller {
	function _initialize() {
		if (!isset($_SESSION['uid']) || !isset($_SESSION['username'])) {
			$this->redirect('Admin/Manager/login');
		}

		$uid = $_SESSION[C('USER_AUTH_KEY')];
		$auth = new \Think\Auth();
		$group_id = M("Auth_group_access")->where(array('uid' => $uid))->getField('group_id', true);
		$group_id = is_array($group_id) ? $group_id : array();
		// if (in_array(C('ADMIN_AUTH_KEY'), $group_id)) {
		// 	//判断为管理员 获取全部权限
		// 	$Auth_accessList = M()->table(C('AUTH_RULE'))->getField('name', true);
		// 	$Auth_accessList = is_array($Auth_accessList) ? $Auth_accessList : array();
		// } else {
		// 	//非管理员 通过auth 获取权限
		// 	$Auth_accessList = $auth->getAccessList($uid);
		// }
		// $this->Auth_accessList = $Auth_accessList;
		if (in_array(C('ADMIN_AUTH_KEY'), $group_id)) {
			return true;
		} else {
			$rule = GROUP_NAME . '/' . MODULE_NAME . '/' . ACTION_NAME;
			if (!$auth->check($rue, $uid)) {
				$this->error('没有权限', '', 2);
			}
		}

	}
}

?>