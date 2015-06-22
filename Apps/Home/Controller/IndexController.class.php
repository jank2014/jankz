<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index() {
		$this->display();
	}
	public function fream() {
		// $fream = new \Home\Model\FreamModel();
		$content = D('content');
		$content1 = D('content')->where('type=1 and status=1')->limit(8)->select(); //查询前端框架
		$content2 = D('content')->where('type=2 and status=1')->select(); //查询后端框架
		$content3 = D('content')->where('type=3 and status=1')->select(); //查询其他框架
		// var_dump($content1);die;
		$this->content1 = $content1;
		$this->content2 = $content2;
		$this->content3 = $content3;
		$this->display('fream');
	}
	public function qianyan() {
		$qianyan = D('qianyan');
		$qianyan1 = $qianyan->field('id,title')->where('type=1 and status=1')->limit(5)->select();
		$qianyan2 = $qianyan->field('id,title')->where('type=2 and status=1')->limit(5)->select();
		$qianyan3 = $qianyan->field('id,title')->where('type=3 and status=1')->limit(5)->select();
		$qianyan4 = $qianyan->field('id,title')->where('type=4 and status=1')->limit(5)->select();
		$this->qianyan1 = $qianyan1;
		$this->qianyan2 = $qianyan2;
		$this->qianyan3 = $qianyan3;
		$this->qianyan4 = $qianyan4;
		$this->display();
	}
	public function qybase() {
		if ($_GET['id']) {
			$id = I('id', '', 'intval');
		}
		$qianyan = M('qianyan');
		$qianyan = $qianyan->find($id);
		$this->qianyan = $qianyan;
		$this->display();
	}
	public function test() {
		// $content = D('content');
		// $content = D('content')->select(); //查询前端框架
		// $this->content = $content;
		// $count = D('content')->count();
		// $Page = new \Think\Page($count, 10);
		// $show = $Page->show();
		// $this->show = $show;
		// $this->assign('page', $show);
		$content = M('content'); // 实例化User对象
		$count = $content->where('status=1')->count(); // 查询满足要求的总记录数
		$Page = new \Think\Page($count, 16); // 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page->show(); // 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$content = $content->where('status=1')->limit($Page->firstRow . ',' . $Page->listRows)->select();
		$this->assign('content', $content); // 赋值数据集
		$this->assign('page', $show); // 赋值分页输出
		$this->display(); // 输出模板
		$this->display();
	}
}