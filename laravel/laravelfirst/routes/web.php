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
//Route::get('member/info','MemberController@info');
// Route::any('member/info',[
//     'uses'=>'MemberController@info',
//     'as'=>'memberinfo'
// ]);
// Route::any('member/{id}',[
//     'uses'=>'MemberController@info'
// ])->where('id','[0-9]+');
Route::any('student1',[
    'uses'=>'StudentController@student1'
]);
Route::any('st_insert',[
    'uses'=>'StudentController@st_insert'
]);
Route::any('st_update',[
    'uses'=>'StudentController@st_update'
]);
Route::any('st_delete',[
    'uses'=>'StudentController@st_delete'
]);
Route::any('st_query',[
    'uses'=>'StudentController@st_query'
]);
Route::any('st_juhe',[
    'uses'=>'StudentController@st_juhe'
]);
Route::any('orm_query',[
    'uses'=>'StudentController@orm_query'
]);
Route::any('orm_insert',[
    'uses'=>'StudentController@orm_insert'
]);
Route::any('orm_update',[
    'uses'=>'StudentController@orm_update'
]);
Route::any('orm_delete',[
    'uses'=>'StudentController@orm_delete'
]);
Route::any('section1',[
    'uses'=>'StudentController@section1'
]);
Route::any('url',[
    'as'=>'url',
    'uses'=>'StudentController@urlTest'
]);
// //基础路由
// Route::get('basic1', function (){
//     return 'get Hello World';
// });

// Route::post('basic2', function (){
//     return 'post hello world';
// });
// //多请求路由
// Route::match(['get','post'],'multy1',function(){
//     return 'match multy1';
// });

// Route::any('multy2', function (){
//     return 'any hmulty2';
// });

//路由参数
// Route::get('user/{id}/{name?}',function($id,$name='david'){
//     return 'User-id-'.$id.'-name-'.$name;
// })->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
// Route::get('user/{id}',function($id){
//     return 'User-id-'.$id;
// });
// Route::get('user/{name?}',function($name=null){
//     return 'User-name-'.$name;
// });
// Route::get('user/{name?}',function($name=david){
//     return 'User-name-'.$name;
// })->where('name','[A-Za-z]+');

//路由别名
// Route::get('user/member-center',['as'=>'center',function(){
//     return route('center');
// }]);
//路由群组
// Route::group(['prefix'=>'member'],function(){
//     Route::get('user/member-center',['as'=>'center',function(){
//         return route('center');
//     }]);
//     Route::any('multy2', function (){
//         return 'any hmulty2';
//     });
// });

// //路由中输出视图
// Route::get('view', function () {
//     return view('welcome');
// });