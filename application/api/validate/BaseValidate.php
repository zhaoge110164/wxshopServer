<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-16
 * Time: 10:42
 */

namespace app\api\validate;

use app\lib\exception\ParamsException;
use think\Validate;
use think\Request;

/**
 * 验证器基类
 */
class BaseValidate extends Validate
{
    /**
     * 检测客户端请求接口是否通过验证
     * @throws ParamsException 未通过抛出参数异常
     * @return  true 通过验证
     *
     */
    public function toCheck()
    {

        //通过Request对象获取提交的所有参数变量
        $request = Request::instance();//初始化Request对象
        $params = $request->param();//获取提交的参数

        if (!$this->check($params)) {//未通过检测抛出自定义的参数异常
            //判断处理 多个错误消息（数组）
            $msg = $this->error;
            $msg = is_array($msg) ? implode(';', $msg) : $msg;
            $exception = new ParamsException(array('msg' => $msg));
            throw $exception;

        }
        return true;
    }


    /**
     * 检测正整数
     * */
    protected function isPositiveInt($value, $rule = '', $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }
        return false;

    }


}
