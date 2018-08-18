<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 10:37
 */

namespace app\api\model;
/**
 * Class Image
 * @package app\api\model
 * 轮播图 图片表模块映射
 */
class Image extends BaseModel
{

    //隐藏字段
    protected $hidden =['id','from','delete_time','update_time'];


   /**
    * 框架读取器 处理图片url路径 如果为本地图片(from 字段= 1)拼接url
    * 读取器 方法名称定义 ‘get’+'字段名'+Attr
    * 读取器读取数据字段时触发 （框架调用）
    * 调用基类处理图片方法
    */

    public function getUrlAttr($value,$data){
        return $this->UrlToUsable($value,$data);
    }






}