<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 13:05
 */
namespace app\api\model;

use think\model;

/**
 * Class Product
 * @package app\api\model
 * 产品模型
 */
class Product extends BaseModel
{
    //隐藏字段 'pivot'为框架本身产生的中间表数据
    protected $hidden = ['delete_time', 'update_time', 'topic_img_id', 'head_img_id', 'category_id'
        , 'from', 'create_time', 'img_id', 'pivot'];


    /**
     * 框架读取器 处理图片url路径 如果为本地图片(from 字段= 1)拼接url
     * 读取器 方法名称定义 ‘get’+'字段名'+Attr
     * 读取器读取数据字段时触发 （框架调用）
     * 调用基类处理图片方法
     */
    public function getMainImgUrlAttr($value, $data)
    {
        return $this->UrlToUsable($value, $data);
    }

    /**
     * 获取最新商品
     * @param $count 获取条目
     * @return object
     */
    public static function getLatest($count)
    {
        return self::limit($count)->order('create_time desc')->select();
    }


    /**
     * 获取分类下的所有商品
     * @param $categoryId
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function getProductsByCategoryId($categoryId)
    {
        return self::where('category_id', '=', $categoryId)->select();

    }
}