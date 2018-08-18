<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-17
 * Time: 16:21
 */
namespace app\api\model;

use think\Model;

/**
 * Class BaseModel
 * @package app\api\model
 * 模型基础类
 */
class BaseModel extends Model
{

    /**
     * 处理url 地址为本地时url拼接
     * @param $value string 字段url值
     * @param $data array 所有字段数据的数组
     * @return  string url 完整路径
     */
    protected function UrlToUsable($value, $data)
    {
        $url = $value;
        if ($data['from'] == 1) {
            //配置文件获取根域名和图片文件路径
            $img_url_root = config('z_config.root_domain') . config('z_config.banner_img_dir');
            $url = $img_url_root . $value;
        }
        return $url;

    }


}

