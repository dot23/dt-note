<?php
class Blog extends Model{
	protected $tableName="blog";
	function addBlog($arr){
		return $this->insert($arr);
	}
	function getCount($where=''){
		@$arr=$this->select("count(*) as num",$where);
		return $arr[0]['num'];
	}
	function getBlogByList($fields="*",$where="",$limit="",$order="",$arr=array()){
		return $this->select($fields,$where,$order,$limit,$arr);
	}
	function getBlogById($id){
		$arr=$this->select("*","id=:id","","",array(":id"=>$id));
		//var_dump($arr[0]);
		return @$arr[0];
	}
	function updateBlogById($arr,$id){
		return $this->update($arr,"id={$id}");
	}
	function deleteBlogById($id){
		return $this->delete("id=:id",array(":id"=>$id));
	}
}