<?php
class Upload{
	protected $allowSize;
	protected $allType;
	protected $toPath;
	function __construct($toPath="./upload",$allowSize=2000000,$allType=array('image/jpeg','images/pjpeg','images/png','images/jpg')){
		$this->allowSize=$allowSize;
		$this->allType=$allType;
		$this->toPath=$toPath;
	}
	function saveImg(){
		if($_FILES){
			$reArr=array();
			foreach($_FILES['upload']['error'] as $index=>$v){
				if($v===0){//没有错误
					$type=$_FILES['upload']['type'][$index];
					if(in_array($type, $this->allType)){
						$size=$_FILES['upload']['size'][$index];
						if($size<=$this->allowSize){
							$newFileName=md5(uniqid(microtime(),true));
							$ext=pathinfo($_FILE['upload']['name'][$index],PATHINFO_EXTENSION);
							$newFileName=$newFileName.".".$ext;
							$re=move_uploaded_file($_FILES['upload']['tmp_name'][$index], $this->toPath."/".$newFileName);
							if($re){
								$reArr[$index]=$newFileName;
							}else{
								$reArr[$index]=false;
							}
						}else{
							$reArr[$index]=false;
						}
					}else{
						$reArr[$index]=false;
					}
				}else{
					$reArr[$index]=false;
				}
			}
			return $reArr;
		}else{
			return false;
		}
	}
}