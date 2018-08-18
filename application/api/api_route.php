<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
/**
 * 注册路由
 */

use think\Route;

//轮播图接口

Route::get('api/:version/banner/:id', 'api/:version.Banner/getBanner');

//主题接口

Route::get('api/:version/theme', 'api/:version.Theme/getThemeByIds');
//主题详情
Route::get('api/:version/theme/:id', 'api/:version.Theme/getThemeDetail');

