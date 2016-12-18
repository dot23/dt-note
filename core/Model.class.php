<?php
class Model{
	protected $tableName="";
	protected $pdoOb="";
	function __construct(){
		try{
			$pOb=new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
			$pOb->exec("set names ".DB_CHARSET);
			$this->pdoOb=$pOb;
		}catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
	//查询
	function select($field="*",$where,$order,$limit,$paramArr=array()){
		$where=empty($where)?"":"where ".$where;
		$order=empty($order)?"":"order by ".$order;
		$limit=empty($limit)?"":"limit ".$limit;
		$sql="select {$field} from {$this->tableName} {$where} {$order} {$limit};";
		//$res=$this->pdoOb->query($sql);
		//准备执行
		$pdoS=$this->pdoOb->prepare($sql);
		//给$where绑定数据
		$i=0;
		foreach ($paramArr as $k=>$v){
			$ph='p'.$i;
			$$ph=$v;
			if(is_int($v)){
				$pdoS->bindParam($k,$$ph,PDO::PARAM_INT);
			}else{
				$pdoS->bindParam($k,$$ph,PDO::PARAM_STR);
			}
			$i++;
		}
		//执行
		$res=$pdoS->execute();
		/*一次取一条记录
		 	while($arr=$res->fetch()){
			var_dump($arr);			
		}*/
		//一次获取全部记录
		if($res){
			return $pdoS->fetchAll(PDO::FETCH_ASSOC);//返回关联下标
		}else{
			return array();
		}
	}
	/*
	 * 删除
	 * @param:$where 'id=:id or id=:id1'
	 * $paramArr=array(':id'=>5,':id'=>7)
	 */
	function delete($where="",$paramArr=array()){
		$where=empty($where)?"":"where ".$where;
		$sql="delete from {$this->tableName} {$where};";
	
		//$num=$this->pdoOb->exec($sql);//返回剩余记录条数
		//var_dump($num);
		
		//准备
		$pdoS=$this->pdoOb->prepare($sql);
		//给$where绑定数据
		$i=0;
		foreach($paramArr as $k=>$v){
			$ph='p'.$i;
			$$ph=$v;
			if(is_int($v)){
				$pdoS->bindParam($k,$$ph,PDO::PARAM_INT);
			}else{
				$pdoS->bindParam($k,$$ph,PDO::PARAM_STR);
			}
			$i++;
		}
		//执行
		$res=$pdoS->execute();
		return $res;
	}
	//插入
	function insert($arr){
		$kStr="";
		$vStr="";
		$i=0;
		foreach ($arr as $k=>$v){
			$kStr.=",".$k;
			$ph='p'.$i;
			$vStr.=",:{$ph}";
			$i++;
		}
		$kStr=substr($kStr, 1);//去掉第一个逗号
		$vStr=substr($vStr, 1);
		//var_dump($kStr);
		//var_dump($vStr);
		$sql="insert into {$this->tableName}({$kStr}) values({$vStr});";
		var_dump($sql);
		//准备执行
		$pdoS=$this->pdoOb->prepare($sql);
		//绑定
		$i=0;
		foreach($arr as $v){
			$ph='p'.$i;
			$$ph=$v;
			var_dump($$ph);
			if(is_int($v)){
				$pdoS->bindParam(":{$ph}",$$ph,PDO::PARAM_INT);
			}else{
				$pdoS->bindParam(":{$ph}",$$ph,PDO::PARAM_STR);
			}
			$i++;
		}
		//执行
		$res=$pdoS->execute();
		//判断是否有主键，有则返回之，无则返回true，否则返回false
		if($res){
			$priID=$this->pdoOb->lastInsertId();
			if($this->checkPRI()){
				return $priID;
			}else{
				return false;
			}
		}else{
			return false;
		}
		//$num=$this->pdoOb->exec($sql);//返回成功插入记录条数
		//var_dump($num);
	}
	//获取表结构
	protected function getTableStruct(){
		$sql='desc '.$this->tableName;
		$pdoS=$this->pdoOb->query($sql);
		return $pdoS->fetchAll(PDO::FETCH_ASSOC);
	}
	//判断是否有主键id
	protected function checkPRI(){
		$arr=$this->getTableStruct();
		if(is_array($arr)){
			foreach ($arr as $v){
				$isPRI=strtolower($v['Key']);
				if($isPRI=='pri'){
					return true;
				}
			}
			return false;
		}else{
			return false;
		}
	}
	//更新
	function update($arr,$where='',$paramArr=array()){
		$where=empty($where)?"":"where ".$where;
		$fvStr="";
		$i=0;
		foreach ($arr as $k=>$v){
			$ph='p'.$i;
			$fvStr.=",{$k}=:{$ph}";
			$i++;
		}
		$fvStr=substr($fvStr,1);
		//var_dump($fvStr);
		$sql="update {$this->tableName} set {$fvStr} {$where};";
		//var_dump($sql);
		//准备执行
		$pdoS=$this->pdoOb->prepare($sql);
		//绑定更新的数据
		$i=0;
		foreach($arr as $v){
			$ph='p'.$i;
			$$ph=$v;
			echo $ph.':'.$$ph;
			if(is_int($v)){
				$pdoS->bindParam(":".$ph,$$ph,PDO::PARAM_INT);
			}else{
				$pdoS->bindParam(":".$ph,$$ph,PDO::PARAM_STR);
			}
			$i++;
		}
		//绑定$where
		$i=0;
		foreach($paramArr as $k=>$v){
			$ph="p".$i;
			$$ph=$v;
			if(is_int($v)){
				$pdoS->bindParam($k,$$ph,PDO::PARAM_INT);
			}else{
				$pdoS->bindParam($k,$$ph,PDO::PARAM_STR);
			}
			$i++;
		}
		//执行
		$res=$pdoS->execute();
		//var_dump($res);
		return $res;
		//$num=$this->pdoOb->exec($sql);
		//var_dump($res);
	}
}


















