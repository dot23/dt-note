<?php
class BaseController extends Controller{
	function _init(){
		if(!isset($_COOKIE['userid'])){
			header("Location:index.php?p=admin&c=user&a=login");

		}
	}
}