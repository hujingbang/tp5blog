<?php
namespace app\admin\controller;

use think\Controller;
class Index extends Controller{

	public function index() {

		return $this ->responseMethod("hello");
	}

	protected function responseMethod($hello) {

		return $hello;
	}
	public function _empty($nullControllerName) {
		
		return "not exits ".$nullControllerName." method";
	}
	public function errorinfo() {

		$this ->	error("失败");
	}

}

