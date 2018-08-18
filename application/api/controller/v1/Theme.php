<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 13:02
 */

namespace app\api\controller\v1;

use app\api\controller\BaseController;
use app\api\validate\CheckIds;
use app\api\validate\CheckId;
use app\api\model\Theme as ThemeModel;
use app\lib\exception\NoThemeFound;

/**
 * Class Theme
 * @package app\api\controller\v1
 * 主题接口控制器
 */
class Theme extends BaseController
{

    /**
     * 获取主题 通过ids
     * @url /theme?ids=id,idx....
     * @param $ids string 逗号分隔的id
     * @throws
     * @return  object 多个theme
     */
    public function getThemeByIds($ids=''){
        (new CheckIds())->toCheck();
        $res= ThemeModel::getThemeByIds(explode(',',$ids));
        if(!$res){
            throw new NoThemeFound();
        }
        return $res;

    }

    /**
     * 获取一个主题 详细通过id
     * @url /theme/:id
     * @param id
     * @throws
     * @return  object theme详情
     */
    public function getThemeDetail($id){
        (new CheckId())->toCheck(); //validate 拦截 检测id
        $res = ThemeModel::getThemeDetailById($id);
        if(!$res){
            throw new NoThemeFound();
        }
        return $res;


    }


}