<?php
namespace Admin\Controller;
use Think\Controller;

class FileController extends Controller {
	public function index() {
		$content = M('content');
		$file = M('file');
		$images = $content->field('image')->select();
		$file = $file->field('src')->select();
		$this->file = $file;
		$this->images = $images;
		$this->display();
	}
	public function imageShow() {
		// $content = M('content');
		// $images = $content->field('image,name,link')->select();
		// $this->images =$images;
		// $this->display();
	}
	public function imageAdd() {
		if (!empty($_POST)) {
			if (!empty($_FILES)) {
				$config = array(
					'maxSize' => 3145728,
					'rootPath' => './Uploads/',
					'savePath' => 'images/',
					'saveName' => '', //空表示保持文件名不变,array('unique','')默认
					'exts' => array('jpg', 'jpeg', 'gif', 'png'),
					// 'autoSub'	=>false,//默认true 是否开启子目录'subName'=>array('date','Ymd'),设置子目录时间日期
				);
				$upload = new \Think\Upload($config);
				$result = $upload->uploadOne($_FILES['picture']);
				if (!$result) {
					$this->error('图片上传失败！', 'index');
				} else {
					// $this->success('图片已上传',U('index'));//测试使用
					$_POST['src'] = SITE_URL . 'Uploads/' . $result['savepath'] . $result['savename'];
					$_POST['name'] = $result['name'];
					$_POST['size'] = $result['size'];
				}
			}
			$file = M('file');
			$data = $file->create();
			$info = $file->add($data);
			if ($info) {
				$this->success('图片已上传', U('index'));
			} else {
				$this->error('图片已上传,信息更新失败', U('index'));
			}
		}

	}
	public function imageDel() {

	}

}

?>