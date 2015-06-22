<?php
namespace Home\Controller;
use Think\Controller;

class FreamController extends Controller {
	public function index() {

	}
	public function qianduan() {
		$page = $_GET["page"];
		// var_dump($page);
		$content = M('content');
		$pag = D('content')->where('type=1 and status=1')->count();
		$pag = ceil($pag / 4);
		$qianduan = $content->where('type=1 and status=1')->page($page, 4)->select();
		$this->qianduan = $qianduan;
		$this->pag = $pag;
		$this->display();

	}
	public function php() {
		$content = M('content');
		$php = $content->where('type=2 and status=1')->select();
		$this->php = $php;
		$this->display();
	}
	public function other() {
		$content = M('content');
		$other = $content->where('type=3 and status=1')->select();
		$this->other = $other;
		$this->display();
	}
}

?>