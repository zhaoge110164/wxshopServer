<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 15:55
 */

namespace app\api\validate;

/**
 * 显示条目传参校验
 * Class Count
 * @package app\api\validate
 */
class Count extends BaseValidate
{
    //正整数 且 1-15
    protected $rule = ['count' => 'isPositiveInt|between:1,15'];
    protected $message = ['count' => '必须为正整数且在1-15之间'];

}