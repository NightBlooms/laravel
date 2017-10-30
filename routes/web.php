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

//基础路由
Route::get('basic',function(){
    return 'hello world!';
});
Route::post('basic2',function(){
    return 'hai';
});

//多请求路由
Route::match(['get','post'],'nihao',function(){
	return '我很快乐！';
});
Route::any('wohao',function(){
	return "我很伤心！";
});

//路由参数
// Route::any('User/{id}',function($id){
// 	return "User-" .$id;
// });
// Route::any('User/{name?}',function($name = 'abbbc'){
// 	return "User-name-" .$name;
// });
// Route::get('user/{name}/{id}',function($name,$id = 'seam'){
// 	return 'user-id-' .$name. '---name---' .$id;
// })->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);

//路由别名
Route::get('user/member-center',['as'=>'center',function(){
	return route('center');
}]);

//路由群组
Route::group(['prefix'=>'member'],function(){
    Route::get('user/center',['as'=>'center',function(){
	return route('center');
}]);
    Route::match(['get','post'],'nihao',function(){
	return '你快乐吗？我很快乐！';
});
});

//路由中输出视图
Route::get('view', function () {
    return view('welcome');
});



//关联控制器的方法
// Route::get('member/info','MemberController@info');

//Route::any('member/info',['uses'=>'MemberController@info']);

// Route::any('member/info',[
// 	'uses'=>'MemberController@info',
// 	'as'=>'member-info'
// 	]);

//关联控制器并绑定参数
//Route::any('member/{id}',['uses'=>'MemberController@info'])->where('id','[0-9]+');

Route::get('test1','StudentController@test1');