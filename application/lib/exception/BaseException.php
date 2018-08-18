<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-16
 * Time: 11:33
 */
namespace app\lib\exception;


use think\Exception;

/**
 * Class BaseException
 * 异常处理基类
 */
class BaseException extends Exception
{
    //默认为未知错误
    public $code = 500; //返回的http错误码
    public $msg = 'unknown error';//错误消息
    public $errorCode = 999; //自定义错误码

    /**
     * 构造函数  接收异常错误参数（http错误码，错误消息，定义错误码）
     * @param array $params 包含httpCode msg errCode
     */

    public function __construct($params = [])
    {
        if (!is_array($params)) {
            return;
        }
        if (array_key_exists('httpCode', $params)) {
            $this->code = $params['code'];
        }

        if (array_key_exists('msg', $params)) {
            $this->msg = $params['msg'];
        }

        if (array_key_exists('errorCode', $params)) {
            $this->errorCode = $params['errorCode'];

        }
    }

}