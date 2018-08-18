<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 16:44
 */
namespace app\api\controller\v1;

use app\api\controller\BaseController;
use app\lib\exception\NoCategoryFound;
use app\api\model\Category AS CategoryMode;

/**
 * Class Category
 * @package app\api\controller\v1
 * 分类api 控制器
 */
class Category extends BaseController
{

    /**
     * 获取所有分类（一级）
     */
    public function getAll()
    {
        $res = CategoryMode::getAllCategory();
        if ($res->isEmpty()) {
            throw new NoCategoryFound();
        }
        return $res;

    }


}