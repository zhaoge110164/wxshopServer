<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 16:11
 */
namespace app\lib\exception;

class NoProductFound extends NoResourcesFound
{
    public $msg = '请求商品数据不存在';
    public $errorCode = 20000;

}
