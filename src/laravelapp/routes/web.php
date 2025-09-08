<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// お問合せ入力ページ
Route::get('/inquiries/top', 'InquiriesController@showCreateForm')->name('inquiries.top');
// 確認ページ
Route::post('/inquiries/comfilm', 'InquiriesController@comfilm')->name('inquiries.comfilm');
// 保存
Route::post('/inquiries/store', 'InquiriesController@store')->name('inquiries.store');
// 完了ページ
Route::get('/inquiries/thanks', 'InquiriesController@showThanksForm')->name('inquiries.thanks');
