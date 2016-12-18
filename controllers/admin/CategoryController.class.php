<?php
class CategoryController extends BaseController{
	function add(){
		$this->display();
	}
	
	function save(){
		$cateOb=new Category();
		$result=$cateOb->addCate($_POST);
		if($result){
			$this->redirect("栏目添加成功", "index.php?p=admin&c=category&a=oper");
		}else{
			//var_dump($result);
			$this->redirect("栏目添加失败", "index.php?p=admin&c=category&a=add");
		}
	}
	
	function oper(){
		$cateOb=new Category();
		$arr=$cateOb->getCateByList("*");
		//var_dump($arr);
		$this->assign('arr', $arr);
		$this->display();
	}
	
	//显示更新操作的html模板
	function update(){
		$cateOb=new Category();
		$arr=$cateOb->getCateById($_GET['id']);
		//var_dump($arr);
		$this->assign('arr', $arr);
		$this->display();
	}
	//更新的数据入库
	function updateConfirm(){
		$cateOb=new Category();
		$result=$cateOb->updateCateById($_POST,$_GET['id']);
		if($result){
			$this->redirect("栏目修改成功", "index.php?p=admin&c=category&a=oper");
		}else{
			//var_dump($result);
			$this->redirect("栏目修改失败", "index.php?p=admin&c=category&a=update&id=".$_GET['id']);
		}
	}
	
	function delete(){
		$cateOb=new Category();
		$result=$cateOb->deleteCateById($_GET['id']);
		if($result){
			$this->redirect("栏目删除成功", "index.php?p=admin&c=category&a=oper");
		}else{
			$this->redirect("栏目删除失败", "index.php?p=admin&c=category&a=oper");
		}
	}
	
}