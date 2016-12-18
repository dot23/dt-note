<?php
class Category extends Model{
	protected $tableName="category";
	//添加栏目
	function addCate($arr){
		return $this->insert($arr);
	}
	//获取栏目数据
	function getCateByList($field="*",$order="",$where=""){
		return $this->select($field,$where,$order,"");
	}
	//根据栏目ID修改栏目信息
	function updateCateById($arr,$id){
		return $this->update($arr,"id={$id}");
	}

	//根据栏目ID删除栏目
	function deleteCateById($id){
		return $this->delete("id=:id",array(":id"=>$id));
	}
	//根据栏目ID获取记录
	function getCateById($id){
		$arr=$this->select("*","id=:id","","",array(":id"=>$id));
		//var_dump($arr[0]);
		return $arr[0];
	}
}



