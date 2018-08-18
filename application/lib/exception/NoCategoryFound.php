<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 16:47
 */

namespace app\lib\exception;

class NoCategoryFound extends NoResourcesFound
{
    public $msg = '请求分类数据不存在';
    public $errorCode = 50000;

}