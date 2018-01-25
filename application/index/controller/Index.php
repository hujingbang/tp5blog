<?php
namespace app\index\controller;

use think\config;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
       return $this ->fetch();
    }

   public function run_index($a,$b) {

   		return $a."+".$b."=".($a+$b);
   }

   public function importDisplay() {

   		// $this -> success("成功","/Index/run_index/20/30");
   		// $this -> error("defeat");
   }

   }
