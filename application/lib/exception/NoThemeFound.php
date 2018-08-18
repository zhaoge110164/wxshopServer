<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 15:01
 */
namespace app\lib\exception;
class NoThemeFound extends NoResourcesFound
{
    public $code = 404;
    public $msg = '请求的主题数据不存在';
    public $errorCode = 30000;

}