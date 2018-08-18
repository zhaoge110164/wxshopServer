<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-16
 * Time: 11:54
 */
namespace app\lib\exception;
/**
 * Class ParamsException
 * 参数异常处理类
 */
class ParamsException extends BaseException
{
    public $code = 400; //返回的http错误码
    public $msg = 'invalid parameter';//错误消息
    public $errorCode = 10000; //自定义错误码

}