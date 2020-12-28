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

//非会員閲覧可能ページ
Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


//無料会員以上閲覧可能ページ→status=2


//有料会員閲覧可能ページ→status=3


//管理者権限ページ
// ログイン周り
Route::get('admin', [\App\Http\Controllers\Admin\AdminController::class, 'showLoginForm']);
Route::post('admin', [\App\Http\Controllers\Admin\AdminController::class, 'login']);
Route::get('admin/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout']);

// ログイン後
Route::prefix('admin')->middleware('auth:admin')->group(function(){

    //topページ
    Route::get('top', [\App\Http\Controllers\Admin\AdminController::class, 'displayTop'])->name('adminTop');

    //記事管理
    Route::group(['prefix' => 'article'], function () {
        Route::get('list', [\App\Http\Controllers\Admin\ArticleController::class, 'getList'])->name('articleList');
        Route::post('list', [\App\Http\Controllers\Admin\ArticleController::class, 'getList']);
        Route::post('delete', [\App\Http\Controllers\Admin\ArticleController::class, 'delete'])->name('articleDelete');
        Route::get('/regist', [\App\Http\Controllers\Admin\ArticleController::class, 'regist'])->name('articleRegist');
        Route::post('/regist', [\App\Http\Controllers\Admin\ArticleController::class, 'insert'])->name('articleInsert');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\ArticleController::class, 'edit']);
        Route::post('/edit', [\App\Http\Controllers\Admin\ArticleController::class, 'update']);
    });

    //問い合わせ管理
    Route::group(['prefix' => 'inquiry'], function () {
        Route::get('list', [\App\Http\Controllers\Admin\MemberController::class, 'getList'])->name('inquiryList');
    });   
   
    //会員管理
    Route::group(['prefix' => 'member'], function () {
        Route::get('list', [\App\Http\Controllers\Admin\MemberController::class, 'getList'])->name('memberList');
        Route::post('list', [\App\Http\Controllers\Admin\MemberController::class, 'getList']);
        Route::post('delete', [\App\Http\Controllers\Admin\MemberController::class, 'delete'])->name('memberDelete');
        Route::get('/regist', [\App\Http\Controllers\Admin\MemberController::class, 'regist'])->name('memberRegist');
        Route::post('/regist', [\App\Http\Controllers\Admin\MemberController::class, 'insert']);
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\MemberController::class, 'edit']);
        Route::post('/edit', [\App\Http\Controllers\Admin\MemberController::class, 'update']);
    });   

    //タグ管理
    Route::group(['prefix' => 'tag'], function () {
        Route::get('list', [\App\Http\Controllers\Admin\TagController::class, 'getList'])->name('tagList');
        Route::post('list', [\App\Http\Controllers\Admin\TagController::class, 'getList']);
        Route::post('delete', [\App\Http\Controllers\Admin\TagController::class, 'delete'])->name('tagDelete');
        Route::get('/regist', [\App\Http\Controllers\Admin\TagController::class, 'regist'])->name('tagRegist');
        Route::post('/regist', [\App\Http\Controllers\Admin\TagController::class, 'insert']);
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\TagController::class, 'edit']);
        Route::post('/edit', [\App\Http\Controllers\Admin\TagController::class, 'update']);
    });
    
});

