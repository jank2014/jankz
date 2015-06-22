<?php
function show_bug($msg) {
	echo "<pre>";
	var_dump($msg);
	echo "</pre>";
}
function p($array) {
	dump($array, 1, '<pre>', 0);
}
function authcheck($rule = '', $uid = '', $relation = 'or') {
	$auth = new \Think\Auth();
	$group_id = M("Auth_group_access")->where(array('uid' => $uid))->getField('group_id', true);
	if (in_array(C('ADMIN_AUTH_KEY'), $group_id)) {
		return true;
	} else {
		return $auth->check($rule, $uid, $relation);
	}
}
?>