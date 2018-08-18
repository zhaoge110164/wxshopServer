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

/*轮播图接口*/

//id(banner位id)获取轮播图
Route::get('api/:version/banner/:id', 'api/:version.Banner/getBanner');

/*主题接口*/
//ids获取主题
Route::get('api/:version/theme', 'api/:version.Theme/getThemeByIds');
//id 获取主题详情
Route::get('api/:version/theme/:id', 'api/:version.Theme/getThemeDetail');

/*商品接口*/
//获取分类下的商品
Route::get('api/:version/product/byCategory/:id', 'api/:version.product/getByCategory');
//获取最新商品
Route::get('api/:version/product/latest', 'api/:version.Product/getLatestProduct');

/*分类接口*/
//获取所有分类
Route::get('api/:version/category/getall', 'api/:version.category/getAll');


