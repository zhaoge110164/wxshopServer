<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-13
 * Time: 21:55
 */

namespace app\api\controller\v1;

use app\api\controller\BaseController;
use app\api\validate\CheckId;
use app\lib\exception\NoBannerFound;
use app\api\model\Banner AS BannerModel;

/**
 * banner 轮播图接口
 * */
class Banner extends BaseController
{

    /**
     * 获取banner
     * @url /banner/:id (banner位的id)
     * @http get
     * @param $id int banner id
     * @throws
     * @return  object
     */
    public function getBanner($id)
    {
        (new CheckId())->toCheck(); //validate 拦截
        $res = BannerModel::getBannerById($id);
        if (!$res) {
            throw new NoBannerFound();
        }
        return $res;

    }


}