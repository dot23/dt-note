<?php
class page{
	protected $curPage=1;//当前页面值
	protected $pageSize=10;//每页条数
	protected $pageNum=0;//总页数
	protected $num=0;//总条数
	function __construct($pageSize,$num){
		//接收每页条数和总条数算出页数
		$pageNum=ceil($num/$pageSize);
		//接收页码值，判断其合法性
		$page=isset($_GET['page'])?(int)$_GET['page']:1;
		if($page<1){
			$page=1;
		}else if($page>$pageNum){
			$page=$pageNum;
		}
		$this->curPage=$page;
		$this->pageSize=$pageSize;
		$this->pageNum=$pageNum;
		$this->num=$num;
	}
	function getLimit(){
		return ($this->curPage-1)*$this->pageSize.",".$this->pageSize;
	}
	function showPage(){
		$str="";
		foreach ($_GET as $k=>$v){
			if($k!='page'){
				$str.="&{$k}={$v}";
			}
		}
		$prePage=$this->curPage-1;
		$nextPage=$this->curPage+1;
		return "共{$this->num}条&nbsp;每页{$this->pageSize}条&nbsp;
				共{$this->pageNum}页&nbsp;当前是{$this->curPage}页&nbsp;
		<a href=\"?page=1{$str}\">首页</a>&nbsp;
		<a href=\"?page={$prePage}{$str}\">上一页</a>&nbsp;
		<a href=\"?page={$nextPage}{$str}\">下一页</a>&nbsp;
		<a href=\"?page={$this->pageNum}{$str}\">尾页</a>";
	}
}