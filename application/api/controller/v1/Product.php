<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 15:44
 */

namespace app\api\controller\v1;

use app\api\controller\BaseController;
use app\api\validate\Count;
use app\api\model\Product AS ProductModel;
use app\api\validate\CheckId;
use app\lib\exception\NoProductFound;


/**
 * 商品接口控制器
 * Class Product
 * @package app\api\controller\v1
 */
class Product extends BaseController
{


    /**
     * 获取分类下商品
     * @url product\latest
     * @http get
     * @param $id 分类id
     * @throws
     * @return  object
     */
    public function getByCategory($id)
    {
        (new CheckId())->toCheck();
        $res = ProductModel::getProductsByCategoryId($id);
        if ($res->isEmpty()) {
            throw new NoProductFound();
        }
        //处理数据集 隐藏‘summary’ 字段
        return $res;

    }

    /**
     * 获取最新商品
     * @url product\latest
     * @http get
     * @param $count 获取条目
     * @throws
     * @return  object
     */
    public function getLatestProduct($count = 15)
    {
        (new Count())->toCheck();
        $res = ProductModel::getLatest($count);
        if ($res->isEmpty()) {
            throw new NoProductFound();
        }
        //处理数据集 隐藏‘summary’ 字段
        $res->hidden(['summary']);
        return $res;

    }
}