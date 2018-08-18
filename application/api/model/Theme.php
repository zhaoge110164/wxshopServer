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
 * Class Theme
 * @package app\api\model
 * 专题模型
 */
class Theme extends BaseModel
{

    //隐藏字段
    protected $hidden =['delete_time','update_time','topic_img_id','head_img_id'];
    /**
     * @return model\relation\BelongsTo
     * 关联image 表的图片
     */
    public function topImg() {
        //belongsTo 一对一关系 包含外键用
        //hasOne 也为一对一关系 不包含外键用
        return $this->belongsTo('Image','topic_img_id','id');

    }
    public function headImg() {
        return $this->belongsTo('Image','head_img_id','id');

    }

    //关联products 产品信息
    public function products(){
        //多对多关系
        //对应模块，中间表名称（没建立model 直接写表面名称，关联Product 的外键）
        return $this->belongsToMany('Product','theme_product','product_id','theme_id');

    }

    /**
     * 获取主题 通过ids
     * @param $ids
     * @return false|\PDOStatement|string|\think\Collection
     */
    public static function getThemeByIds($ids){
        return self::with('topImg,headImg')->select($ids);

    }

    /**
     * 获取一个主题 详细通过id
     * @param $id
     * @return array|false|\PDOStatement|string|Model
     */
    public static function getThemeDetailById($id){
       return  self::with('products,topImg,headImg')->find($id);

    }

}