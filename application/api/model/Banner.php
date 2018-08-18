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
 * Class Banner
 * @package app\api\model
 * 轮播图模块类
 */
class Banner extends BaseModel
{
    //隐藏字段
    protected $hidden = ['delete_time', 'update_time'];

    /**
     * @return model\relation\HasMany
     * 关联banner_item 表 获取
     */
    public function item()
    {
        //hasMany 一对多关系
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }

    /**
     * @param $id
     * @return array|false|\PDOStatement|string|Model
     * 通过banner.id 获取banner 信息
     */

    public static function getBannerById($id)
    {
        $res = self::with(['item', 'item.img'])->find($id);
        return $res;

    }


}