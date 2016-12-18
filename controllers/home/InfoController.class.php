<?php
class InfoController extends  Controller{
	function info(){//显示后台首页
		$newsOb=new News();
		$newsArr=$newsOb->getNewsByList("*","cateid=1","","");
		$this->assign('newsArr', $newsArr);
		$this->display();
	}
}