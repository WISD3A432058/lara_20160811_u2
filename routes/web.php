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

/*
//設定 Route 回傳字串
Route::get('/',function(){
    return'welcome';
});

//設定 Route 回傳 view
Route::get('/',function(){
    returnview('welcome');
});

//設定 Route 跳轉頁面
Route::get('/',function(){
    returnredirect('welcome');
});
*/

/*
//修改 Route 裡的路徑
Route::get('say/{name?}',['as'=>'hello.index',function($name='Everybody'){
    returnview('welcome');
}]);



//修改參數成選擇性
Route::get('hello/{name?}',function($name='Everybody'){
return'Hello,'.$name;
});

Route::get('{uri}',function(){});


//設定 dashboard路徑的 Route
Route::get('dashboard',function(){
    return'dashboard';
});


//設定另一個 Route 以群組包起來設定 prefix
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return'admindashboard';
    });
});
*/
//編輯 app/Http/web.php
Route::get('/',['as'=>'home.index','uses'=>
    'HomeController@index']);
