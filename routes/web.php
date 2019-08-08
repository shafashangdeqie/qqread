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

Route::prefix('')->group(function(){

});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello aaa';
});
Route::get('/form', function () {
    return '<form action="/foo" method="post"> '.csrf_field().'<input type="text" name="aaa"/> <button>提交</button>';
});
Route::post('/foo', function () {
    return 'hello aaa';
});
//重定向
Route::redirect('/aaa','/',301);
//路由视图

//Route::get('/he', function () {
//    return view('test');
//});
//Route::view('/he','test',['name'=>'zhangsan']);
//路由参数
//Route::get('/he/{id}', function ($id) {
//    return 'id 是：'.$id;
//});

Route::get('/he/{id}','UserController@index');

//qq阅读后台
Route::group(['prefix'=>'read'],function(){
    Route::any('/admin','Read\\AdminController@admin');
    //小说添加
    Route::any('/add','Read\\AdminController@add');
    //小说添加执行
    Route::any('/readadd','Read\\AdminController@readadd');
    //轮播图
    Route::any('/turbot','Read\\AdminController@turbot');
    Route::any('/doturbot','Read\\AdminController@doturbot');
    //添加作品
    Route::any('/text','Read\AdminController@text');
    Route::any('/dotext','Read\AdminController@dotext');
    //作者展示
    Route::any('/author','Read\AdminController@author');
    //小说展示
    Route::any('/readindex','Read\AdminController@readindex');
    //更改审核状态
    Route::any('/readlook','Read\AdminController@readlook');
});
//qq阅读前台
Route::group(['prefix'=>'readindex'],function(){
    Route::any('/index','Read\\IndexController@index');
    Route::any('/turbot','Read\\IndexController@turbot');
    //登录
    Route::any('/login','Read\\IndexController@login');

});
