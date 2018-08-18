<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 16:48
 */
namespace app\api\model;

use think\model;

/**
 * 分类模型
 * Class Category
 * @package app\api\model
 */
class Category extends BaseModel
{

    //隐藏字段
    protected $hidden = ['topic_img_id', 'delete_time', 'update_time'];

    /**
     * 关联img表
     */
    public function img()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');

    }

    /**
     * 获取所有分类
     */
    public static function getAllCategory()
    {
        return self::with('img')->select();
    }


}