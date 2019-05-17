<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/login',['uses'=>'JwtLoginController@login']);

Route::group(['middleware' => ['jwt_auth']], function () {
    Route::get('/user/info', ['uses'=>'UserController@info']);
    Route::get('/user/info-cache', ['uses'=>'UserController@infoWithCache']);
});
// Route::get('/user/info', ['middleware'=>'jwt_auth', 'uses'=>'UserController@info']);

Route::get('/get-demo',['uses'=>'Controller@index']);

Route::post('/post-form-urlencode',function(){
    postFormUrlEncode();
});

Route::post('/post-form-data',function(){
    postFormData();
});

Route::post('/post-json',function(){
    postJson();
});

// function getParams(){
//     print_r($_GET);
//     $id = $_GET['id'];
//     $name = $_GET['name'];
//     echo $id . '' .$name;
// }

// function postFormUrlEncode(){
//     print_r($_POST);
//     $firstParam = $_POST['first_param'];
//     $secondParam = $_POST['second_param'];
//     echo $firstParam . ' ' .$secondParam;
// }

// function postFormData(){
//     print_r($_POST);
//     $firstParam = $_POST['first_param'];
//     $secondParam = $_POST['second_param'];
//     echo $firstParam . ' ' .$secondParam;
// }

// function postJson(){
//     // print_r($_POST);
//     // $firstParam = $_POST['first_param'];
//     // $secondParam = $_POST['second_param'];
//     // echo $firstParam . ' ' .$secondParam;
//     $re = file_get_contents("php://input");
//     $reArr = json_decode($re,true);
//     print_r($reArr);
//     $firstParam = $reArr['first_param'];
//     $secondParam = $reArr['second_param'];
//     echo $firstParam . ' ' .$secondParam;
// }