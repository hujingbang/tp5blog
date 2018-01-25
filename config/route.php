<?php

use think\Route;
Route::rule('testUrl','home/Test/testUrl');//设置路由规则 直接有浏览器访问主域名/testUrl

// Route::get("test/:a/:b","index/Index/run_index");