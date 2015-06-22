<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index() {
		$this->
		display();
	}
	public function system() {
		$this->display();
	}
	public function content() {
		$this->display();
	}
	public function addFream() {
		if (!empty($_POST)) {
			if (!empty($_FILES)) {
				$config = array(
					'maxSize' => 3145728,
					'rootPath' => './Public/Home/images/',
					'savePath' => 'fream/',
					'saveName' => '',
					'exts' => array('jpg', 'gif', 'png', 'jpeg'),
					'autoSub' => false,
					// 'subName'    =>    array('date','Ymd'),
				);
				$upload = new \Think\Upload($config);
				$info = $upload->uploadOne($_FILES['photo']);
				if (!$info) {
					$this->error('图片上传失败！', 'index');
				} else {
					$imagesrc = SITE_URL . 'Public/Home/images/fream/';
					$_POST['image'] = $imagesrc . $info['savename'];
					$fream = M('content');
					$fream->create();
					$result = $fream->add();
					if ($result) {
						$this->success('Good!,框架添加成功', 'contentManager');
					} else {
						$this->error('Sorry! 框架添加失败', 'contentManager');
					}

				}

			}
		}

	}
	public function addQy() {
		// var_dump(I('post.'));die;
		if (!empty($_POST['content'])) {
			$_POST['content'] = stripslashes($_POST['content']);
			$_POST['creattime'] = time();
			$qianyan = M('qianyan');
			$qianyan->create();
			$result = $qianyan->add();
			if ($result) {
				$this->success('添加成功', U('Index/content'));
			} else {
				$this->error('添加失败', U('Index/content'));
			}
		} else {
			return false;
		}
	}

	public function imagetest() {
		if (!empty($_POST)) {
			if (!empty($_FILES)) {
				$config = array(
					'maxSize' => 3145728,
					'rootPath' => './Public/Home/images/',
					'savePath' => 'fream/',
					'saveName' => '',
					'exts' => array('jpg', 'gif', 'png', 'jpeg'),
					'autoSub' => false,
					// 'subName'    =>    array('date','Ymd'),
				);
				$upload = new \Think\Upload($config);
				$result = $upload->upload();
				if (!$result) {
					$this->error('图片上传失败！', 'index');
				} else {
					$this->success('上传成功', 'contentManager');
				}

			}
		}

	}
}