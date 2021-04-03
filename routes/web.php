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

if (preg_match("/iPhone|iPod|Android.*Mobile|Windows.*Phone/", $_SERVER['HTTP_USER_AGENT'])) {
    $user_agent = "sp";
} else {
    $user_agent = "pc";
}
define("USER_AGENT", $user_agent);


//******************************//
//  非会員閲覧可能ページ
//******************************//
Route::get('/', [\App\Http\Controllers\Front\TopController::class, 'index'])->name('topPage');
Route::get('/category', [\App\Http\Controllers\Front\ListController::class, 'categoryList'])->name('categoryList');
Route::get('/auther/{auther_id}', [\App\Http\Controllers\Front\ListController::class, 'onlyAuther'])->name('list.onlyAuther');
Route::get('/category/{category_id}', [\App\Http\Controllers\Front\ListController::class, 'onlyCategory'])->name('list.onlyCategory');
Route::get('/auther/{auther_id}/category/{category_id}', [\App\Http\Controllers\Front\ListController::class, 'bothAutherAndCategory'])->name('list.bothAutherAndCategory');
Route::post('/search', [\App\Http\Controllers\Front\ListController::class, 'searchBox'])->name('list.searchWordList');
Route::get('/article/{article_id}', [\App\Http\Controllers\Front\ArticleController::class, 'articleDetail'])->name('detail.article');
//アドレス忘れ
Route::get('/password-forget', [\App\Http\Controllers\Front\MemberController::class, 'passwordForgetShowform'])->name('password-forget.showForm');
Route::post('/password-forget', [\App\Http\Controllers\Front\MemberController::class, 'passwordForgetMailSend'])->name('password-forget.mailSend');
Route::get('/password-reset/{rand_number_01}/{user_id}/{rand_number_02}', [\App\Http\Controllers\Front\MemberController::class, 'passwordResetShowform'])->name('password-forget.resetShowform');
Route::post('/password-reset', [\App\Http\Controllers\Front\MemberController::class, 'passwordResetEdit'])->name('password-forget.resetEdit');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//******************************//
//  会員閲覧可能ページ
//******************************//
//member
Route::middleware(['auth:sanctum', 'verified'])->get('/member', [\App\Http\Controllers\Front\MemberController::class, 'index'])->name('member.index');
//怪異情報編集
Route::middleware(['auth:sanctum', 'verified'])->get('/member/setting', [\App\Http\Controllers\Front\MemberController::class, 'settingShowFrom'])->name('member.settingShowFrom');
Route::middleware(['auth:sanctum', 'verified'])->post('/member/setting', [\App\Http\Controllers\Front\MemberController::class, 'settingUpdate'])->name('member.settingUpdate');
//inquiry
Route::middleware(['auth:sanctum', 'verified'])->get('/inquiry', [\App\Http\Controllers\Front\InquiryController::class, 'showFrom'])->name('inquiry.showForm');
Route::middleware(['auth:sanctum', 'verified'])->post('/inquiry/confirm', [\App\Http\Controllers\Front\InquiryController::class, 'confirm'])->name('inquiry.confirm');
Route::middleware(['auth:sanctum', 'verified'])->post('/inquiry/thanks', [\App\Http\Controllers\Front\InquiryController::class, 'thanks'])->name('inquiry.thanks');

//******************************//
//  管理者権限ページ
//******************************//
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
        Route::post('/edit/{id}', [\App\Http\Controllers\Admin\ArticleController::class, 'update']);
        // Route::post('/edit', [\App\Http\Controllers\Admin\ArticleController::class, 'update']);
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
        Route::post('regist', [\App\Http\Controllers\Admin\TagController::class, 'regist'])->name('tagRegist');
        Route::post('delete', [\App\Http\Controllers\Admin\TagController::class, 'delete'])->name('tagDelete');
        Route::get('edit/{id}/{name}', [\App\Http\Controllers\Admin\TagController::class, 'edit']);
    });
    
});

