<?php


namespace app\api\model;


use think\Db;
use think\Exception;
use think\Model;

class Banner extends BaseModel
{
    protected $hidden = ['update_time','delete_time'];
    //protected $table = 'category';
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }
    public static function getBannerByID($id)
    {
        $banner = self::with(['items','items.img'])->find($id);
        return $banner;
//      $result = Db::query('select * from banner_item where banner_id=?',[$id]);
//      return $result;
//        $result = Db::table('banner_item')->where('banner_id','=',$id)->select();
//        return $result;
    }
}