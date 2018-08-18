<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 15:00
 */
namespace app\lib\exception;
class NoBannerFound extends NoResourcesFound
{
    public $code = 404;
    public $msg = '请求bannner数据不存在';
    public $errorCode = 40000;


}