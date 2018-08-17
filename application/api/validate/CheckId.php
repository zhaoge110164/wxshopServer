<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-16
 * Time: 12:10
 */

namespace app\api\validate;
/**
 * Class CheckId
 * @package app\api\validate
 * 检测ID参数是否合法
 */
class CheckId extends BaseValidate
{
    protected $rule = [
        //id 必填且为正整数
        'id'=> 'require|isPositiveInt',
    ];


}