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

/**
 * banner 轮播图接口
 * */

class Banner extends BaseController
{

    /**
     * 获取banner
     * @url /banner/:id
     * @http get
     * @param $id int banner id
     * @throws
     */
    public function  getBanner($id){
        $validate =new CheckId();
        $validate->toCheck();
        echo 123;

    }

}