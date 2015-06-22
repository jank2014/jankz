<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
	public function checkNamePwd($username,$password){
		$info = $this->getByUsername($username);
		if($info!=null){
			if($info['password']!=$password){
				return false;
			}else{
				return $info;
			}
		}else{
			return false;
		}
	}
}
?>