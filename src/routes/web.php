<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
// お問い合わせフォーム入力ページ
Route::get('/', [ContactController::class, 'form']);

// お問い合わせフォーム確認ページ
Route::get('/confirm', [ContactController::class, 'confirm']);

// サンクスページ
Route::get('/thanks', [ContactController::class, 'thanks']);

// 管理画面
Route::get('/admin', [AdminController::class, 'dashboard']);

// ユーザ登録ページ
Route::get('/register', [AuthController::class, 'register']);

// ログインページ
Route::get('/login', [AuthController::class, 'login']);
