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
// webサイトで見る時のパスを通す用

Route::get('/', function () {
    return view('welcome');
});

// ::get URLを直接呼び出す
// post formメソッドを使って呼び出す
Route::get('/archives/', function(){
    return '記事一覧';
});

Route::get('/archives/{category}/', function($category){
    return $category . 'の一覧';
});

Route::post('/join/', function(){
    return '入会申込完了';
});

Route::get('/join/', function(){
    return redirect() -> to('/');
});

// {}を使うことでpathが動的に変わる
Route::get('/{id}/', function($id){
    return $id . 'のページ';
});
