<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-16
 * Time: 12:56
 */

namespace app\lib\exception;

use think\Exception;
use think\exception\Handle;
use think\Log;
use think\Request;

/**
 * 重写Handle 的render  实现自定义异常处理
 */
class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    public function render(\Exception $e)
    {
        $request = Request::instance();
        $request_url = $request->url();//   返回请求地址

        //如为自定义异常，（如传参错误）不记录日志 直接返回自定义错误
        if ($e instanceof BaseException) {
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;

        } else {

            //服务器异常， 记录日志
            $this->recordErrLog($e, $request_url);
            //调试模式开启,返回TP默认错误页面
            if (config('app_debug')) {
                return parent::render($e);
            }

            //未开启调试模式 返回错误
            $this->code = 500;
            $this->msg = 'unknown error';
            $this->errorCode = 999;

        }


        $res = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => $request_url

        ];

        return json($res, $this->code);

    }

    /**
     * 格式化记录错误日志
     * @param \Exception $e
     */
    private function recordErrLog(\Exception $e, $request_url)
    {

        Log::init([ //日志初始化
            'type' => 'File',
            'path' => LOG_PATH . DIRECTORY_SEPARATOR . 'Error_',
            'level' => ['error']
        ]);

        Log::record(
            PHP_EOL . 'request_url:' . $request_url
            . PHP_EOL . 'errMsg:' . $e->getMessage()
            . PHP_EOL . 'file:' . $e->getFile() . ' ' . $e->getLine() . '行'
            . PHP_EOL . 'trace:' . PHP_EOL . $e->getTraceAsString()
            . PHP_EOL . '[error_end]'
            , 'error');//输出日志


    }


}