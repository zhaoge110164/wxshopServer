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
    public $msg = '请求banner数据不存在';
    public $errorCode = 40000;


}