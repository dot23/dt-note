<?php
class Admin extends Model{
	protected $tableName='admin';
	//检查用户名和密码是否正确
	function checkUserAndPass($username,$password){
		$password=md5($password);
		$arr=$this->select('id','username=:u and password=:p','','',array(':u'=>$username,':p'=>$password));
		if(is_array($arr)&&count($arr)>0){
			return $arr[0]['id'];
		}else{
			return false;
		}
	}
}