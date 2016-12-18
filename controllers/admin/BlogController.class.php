<?php
class BlogController extends BaseController{
	function add(){
		$cateOb=new Category();
		$cateArr=$cateOb->getCateByList("*");
		$this->assign('cateArr', $cateArr);
		$this->display();
	}
	function oper(){
		$blogOb=new Blog();
		$arr=array();
		if(isset($_GET['cid'])){
			//$where="cateid=".$_GET['cid'];
			$where="cateid=:cid";
			$arr[':cid']=$_GET['cid'];
		}else{
			$where="";
		}
		//实例化分页
		$pageSize=5;
		$num=$blogOb->getCount($where);
		$pageOb=new Page($pageSize,$num);
		$pageStr=$pageOb->showPage();
		$this->assign('pageStr', $pageStr);
		$limit=$pageOb->getLimit();
		$blogArr=$blogOb->getBlogByList("*",$where,$limit,'id desc',$arr);
		$this->assign('blogArr', $blogArr);
		$this->display();
	}
	function save(){
		$uploadOb=new Upload();
		$reArr=$uploadOb->saveImg();
		if($reArr[0]){
			$_POST['imagename']=$reArr[0];
		}
		$_POST['pubtime']=time();
		$blogOb=new Blog();
		$res=$blogOb->addBlog($_POST);
		if($res){
			$this->redirect("文章添加成功","index.php?p=admin&c=blog&a=oper");
		}else{
			$this->redirect("文章添加失败，请重试", "index.php?p=admin&c=blog&a=add");
		}
	}
	function update(){
		$cateOb=new Category();
		$cateArr=$cateOb->getCateByList("*");
		$this->assign('cateArr', $cateArr);
		$blogOb=new Blog();
		$arr=$blogOb->getBlogById($_GET['id']);
		//var_dump($arr);
		$this->assign('arr', $arr);
		$this->display();
	}
	function updateConfirm(){
		$blogOb=new Blog();
		$result=$blogOb->updateBlogById($_POST,$_GET['id']);
		if($result){
			$this->redirect("栏目修改成功", "index.php?p=admin&c=blog&a=oper");
		}else{
			//var_dump($result);
			$this->redirect("栏目修改失败", "index.php?p=admin&c=blog&a=oper");
		}
	}
	function delete(){
		$blogOb=new Blog();
		$result=$blogOb->deleteBlogById($_GET['id']);
		if($result){
			$this->redirect("栏目删除成功", "index.php?p=admin&c=blog&a=oper");
		}else{
			$this->redirect("栏目删除失败", "index.php?p=admin&c=blog&a=oper");
		}
	}
}