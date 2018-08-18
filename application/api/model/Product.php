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

}