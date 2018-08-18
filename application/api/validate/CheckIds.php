<?php
/**
 * Created by PhpStorm.
 * User: zhaoge
 * Date: 2018-08-18
 * Time: 13:26
 */
namespace app\api\validate;
class checkIds extends BaseValidate
{

    protected $rule=['ids'=>'require|toCheckIds'];
    protected $message= ['ids'=>'ids必须为逗号分隔的正整数'];

    /**
     * @param $value
     * @return bool
     * 验证ids
     */

     protected function toCheckIds($value){
         $idsArr=explode(',',$value);
         if(empty($idsArr)){
             return false;
         }
         foreach($idsArr as $id){
             if(!$this->isPositiveInt($id)){ //判断正整数
                 return false;
             }
         }
         return true;

     }


}