<?php
namespace Admin\Controller;
use Think\Controller;

class QianyanController extends Controller {
	public function qylist() {
		$page = $_GET["page"];
		$qianyan = M('qianyan');
		$pag = M('qianyan')->count();
		$pag = ceil($pag / 12);
		$qianyan = $qianyan->field('id,title')->where('status=1')->page($page, 12)->select();
		$this->qianyan = $qianyan;
		$this->pag = $pag;
		$this->display();
	}
	public function qyeditshow() {
		$id = I('id', '', 'intval');
		$qianyan = M('qianyan');
		$qianyan = $qianyan->find($id);
		$this->qianyan = $qianyan;
		$this->display();
	}
	public function qyedit() {
		$id = $_POST['id'];
		if (!empty($_POST['content'])) {
			$_POST['content'] = stripslashes($_POST['content']);
			$_POST['creattime'] = time();
			$qianyan = M('qianyan');
			$data = $qianyan->create();
			$result = $qianyan->where(array('id' => $id))->field('title,content,creattime')->save($data);
			if ($result) {
				$this->success('修改成功', U('qylist'));
			} else {
				$this->error('修改失败', U('qylist'));
			}
		} else {
			return false;
		}

	}
	public function qydel() {
		$id = I('id', '', 'intval');
		$qianyan = M('qianyan');
		$info = $qianyan->delete($id);
		if ($info) {
			$this->success('删除成功', U('qylist'));
		} else {
			$this->error('删除失败', U('qylist'));
		}
	}

}

?>