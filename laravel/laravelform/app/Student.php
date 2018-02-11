<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const SEX_UN = 10;  //未知
    const SEX_BOY = 20; // 男
    const SEX_GIRL = 30;    //女
    protected $table = 'student';
    //批量
    protected $fillable = ['name', 'age', 'sex'];
    public $timestamps =false;
    public function getDateFormat()
    {
        return time();
    }
    protected function asDateTime($val)
    {
        return $val;
    }
    public function getSex($ind = null)
    {
        $arr = [
            self::SEX_UN => '未知',
            self::SEX_BOY => '男',
            self::SEX_GIRL => '女',
        ];

        if ($ind !== null) {
            return array_key_exists($ind, $arr) ? $arr[$ind] : $arr[self::SEX_UN];
        }

        return $arr;
    }
}
