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

Route::get('/get-demo',function (){
    getParams();
});

Route::post('/post-form-urlencode',function(){
    postFormUrlEncode();
});

Route::post('/post-form-data',function(){
    echo 11;
});

Route::post('/post-json',function(){
    echo 11;
});

function getParams(){
    print_r($_GET);
    $id = $_GET['id'];
    $name = $_GET['name'];
    echo $id . '' .$name;
}

function postFormUrlEncode(){
    print_r($_POST);
    $firstParam = $_POST['first_param'];
    $secondParam = $_POST['second_param'];
    echo $firstParam . ' ' .$secondParam;
}

