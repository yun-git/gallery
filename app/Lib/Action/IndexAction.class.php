<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action
{
    public function index()
    {
		$D = D('Album');
		$id = empty($_GET['id'])?1:$_GET['id'];
		$album = $D->relation(true)->find($id);
		$this->assign('album',$album);
		$this->assign('images',$album['images']);
		$this->display();
    }
	public function img()
	{
		$M = M('file');
		$id = empty($_GET['id'])?1:$_GET['id'];
		$img = $M->find($id);
		if($img)
		{
			header('content-type:image/jpeg');
			echo readfile($img['url']);
		}
	}
	public function article()
	{
		$D = D('Album');
		$article = $D->relation(true)->find(1);
		print_r($article);
	}
	public function check()
	{
		$id = empty($_POST['id'])?1:$_POST['id'];
		$key =	'album'.$id;
		if(cookie($key));
	}
}