<?php
require_once '../config.ini.php';
$temp=new Model();
//$re=$temp->select("*","id=:id", "id desc", "",array(":id"=>3));
//var_dump($re);
//$temp->delete("id=1");
/*$arr=array(
	'title'=>'10','content'=>'100','author'=>'1000','cateid'=>'1'
);
$temp->insert($arr);*/
//insert news(title,content,author,cateid) values('9','99','999','1');

/*$arr=array(
		'name'=>'公司简介','enum'=>'公司信息','isshow'=>'1'
);
$temp->insert($arr);*/

$arr=array('name'=>'公司简介');
$temp->update($arr,"id=:id",array(":id"=>6));
//update news set title='11',content='111' where id=10;

//$temp=new Controller();
var_dump($temp);

