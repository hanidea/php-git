<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use App\Jobs\SendEmail;
class StudentController extends Controller
{
    public function queue()
    {
        dispatch(new SendEmail('loveidea2006@126.com'));
    }
    public function error()
    {
        //$name='james';
        //var_dump($name);
        // $student =null;
        // if($student==null){
        //     abort('404');
        // }
        //return view('student.error');
        //Log::info('这是一个info级别的日志');
        //Log::warning('这是一个warning级别的日志');
        Log::error('这是一个error数组',['name'=>'james','age'=>'18']);
    }
    public function cache1()
    {
        //Cache::put('key1','val1',10);
        //$bool=Cache::add('key2','val2',10);
        //Cache::forever('key3','val3');
        // if(Cache::has('key1'))
        // {
        //    $val = Cache::get('key3');
        //    var_dump($val);
        // }
        // else{
        //     echo 'No';
        // }
    }
    public function cache2()
    {
        //$val=Cache::get('key3');
        //$val=Cache::pull('key3');
        //var_dump($val);
        $bool =Cache::forget('key1');
        var_dump($bool);
    }
    public function mail()
    {
        // Mail::raw('邮件内容',function($message){
        //    $message->from('hydavid@126.com','学习laravel');
        //    $message->subject('邮件主题');
        //    $message->to('loveidea2006@126.com');
        // });
        Mail::send('student.mail',['name'=>'James'],function($message){
            $message->from('hydavid@126.com','学习laravel');
            $message->subject('邮件主题');
            $message->to('loveidea2006@126.com');
            });
    }
    //
    public function upload(Request $request)
    {
        //return 'upload';
        if($request->isMethod('POST'))
        {
            //var_dump($_FILES);
            $file = $request->file('source');
            //判断是否上传成功
            if($file->isValid()){
                $originalName=$file->getClientOriginalName();
                $ext=$file->getClientOriginalExtension();
                $type=$file->getClientMimeType();
                //临时绝对路径
                $realPath=$file->getRealPath();
                $filename = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;
                $bool=Storage::disk('uploads')->put($filename,file_get_contents($realPath));
                var_dump($bool);
            }
            
            exit;

        }
        return view('student.upload');
    }
}
