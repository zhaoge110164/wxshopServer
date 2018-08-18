<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-17
 * Time: 16:19
 */

namespace app\api\model;
use think\model;

/**
 * Class Banner_item
 * @package app\api\model
 * 轮播图 详情映射模块类
 */
class BannerItem extends BaseModel
{

    //隐藏字段
    protected $hidden =['id','img_id','banner_id','delete_time','update_time'];
    /**
     * @return model\relation\BelongsTo
     * 关联image表获取图片数据
     */
    public function img(){
        //belongsTo 一对一关系
        return $this->belongsTo('Image','img_id','id');
    }


}