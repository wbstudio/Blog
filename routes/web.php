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


//******************************//
//  非会員閲覧可能ページ
//******************************//
Route::get('/', [\App\Http\Controllers\Front\TopController::class, 'index'])->name('topPage');
Route::get('/qrtest', [\App\Http\Controllers\Front\TopController::class, 'qrtest']);
Route::get('/top/{test_id}', [\App\Http\Controllers\Front\TopController::class, 'test'])->name('topPageTest');
Route::get('/auther', [\App\Http\Controllers\Front\ListController::class, 'autherList'])->name('autherList');
Route::get('/category', [\App\Http\Controllers\Front\ListController::class, 'categoryList'])->name('categoryList');
Route::get('/auther/{auther_id}', [\App\Http\Controllers\Front\ListController::class, 'onlyAuther'])->name('list.onlyAuther');
Route::get('/category/{category_id}', [\App\Http\Controllers\Front\ListController::class, 'onlyCategory'])->name('list.onlyCategory');
Route::get('/auther/{auther_id}/category/{category_id}/page/{page}', [\App\Http\Controllers\Front\ListController::class, 'bothAutherAndCategory'])->name('list.bothAutherAndCategory');
Route::get('/tag/{tag_id}/page/{page}', [\App\Http\Controllers\Front\ListController::class, 'tagArticleList'])->name('list.tagArticleList');
Route::post('/search', [\App\Http\Controllers\Front\ListController::class, 'searchBox'])->name('list.searchWordList');
Route::get('/search/{searchWord}/page/{page}', [\App\Http\Controllers\Front\ListController::class, 'searchPagenation']);
Route::get('/article/{article_id}', [\App\Http\Controllers\Front\ArticleController::class, 'articleDetail'])->name('detail.article');
Route::get('/howtouse', [\App\Http\Controllers\Front\FixedpageController::class, 'howtouse'])->name('howtouse');
Route::get('/thisblogis', [\App\Http\Controllers\Front\FixedpageController::class, 'thisblogis'])->name('thisblogis');
Route::get('/operation', [\App\Http\Controllers\Front\FixedpageController::class, 'operation'])->name('operation');
Route::get('/terms', [\App\Http\Controllers\Front\FixedpageController::class, 'terms'])->name('terms');
Route::get('/privacy', [\App\Http\Controllers\Front\FixedpageController::class, 'privacy'])->name('privacy');
//アドレス忘れ
Route::get('/password-forget', [\App\Http\Controllers\Front\MemberController::class, 'passwordForgetShowform'])->name('password-forget.showForm');
Route::post('/password-forget', [\App\Http\Controllers\Front\MemberController::class, 'passwordForgetMailSend'])->name('password-forget.mailSend');
Route::get('/password-reset/{rand_number_01}/{user_id}/{rand_number_02}', [\App\Http\Controllers\Front\MemberController::class, 'passwordResetShowform'])->name('password-forget.resetShowform');
Route::post('/password-reset', [\App\Http\Controllers\Front\MemberController::class, 'passwordResetEdit'])->name('password-forget.resetEdit');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (){ return view('dashboard');})->name('dashboard');

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
        Route::get('list', [\App\Http\Controllers\Admin\ArticleController::class, 'getList'])->name('article.list');
        Route::post('list', [\App\Http\Controllers\Admin\ArticleController::class, 'getList'])->name('article.list');
        Route::post('delete', [\App\Http\Controllers\Admin\ArticleController::class, 'delete'])->name('article.delete');
        Route::get('/regist', [\App\Http\Controllers\Admin\ArticleController::class, 'regist'])->name('article.regist');
        Route::post('/regist', [\App\Http\Controllers\Admin\ArticleController::class, 'insert'])->name('article.insert');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\ArticleController::class, 'edit'])->name('article.edit');
        Route::post('/edit', [\App\Http\Controllers\Admin\ArticleController::class, 'update'])->name('article.update');
        // Route::post('/edit', [\App\Http\Controllers\Admin\ArticleController::class, 'update']);
    });

    //記事管理
    Route::group(['prefix' => 'auther'], function () {
        Route::get('list', [\App\Http\Controllers\Admin\AutherController::class, 'getList'])->name('auther.list');
        // Route::post('list', [\App\Http\Controllers\Admin\AutherController::class, 'getList'])->name('autherList');
        Route::post('delete', [\App\Http\Controllers\Admin\AutherController::class, 'autherDelete'])->name('auther.delete');
        Route::get('/regist/form', [\App\Http\Controllers\Admin\AutherController::class, 'registForm'])->name('auther.regist.form');
        Route::post('/regist/confirm', [\App\Http\Controllers\Admin\AutherController::class, 'registConfirm'])->name('auther.regist.confirm');
        Route::post('/regist/insert', [\App\Http\Controllers\Admin\AutherController::class, 'registInsert'])->name('auther.regist.insert');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\AutherController::class, 'editForm'])->name('auther.edit.form');
        Route::post('/edit/confirm', [\App\Http\Controllers\Admin\AutherController::class, 'editConfirm'])->name('auther.edit.confirm');
        Route::post('/edit/update', [\App\Http\Controllers\Admin\AutherController::class, 'editUpdate'])->name('auther.edit.update');
    });

    //記事管理
    Route::group(['prefix' => 'category'], function () {
        Route::get('list', [\App\Http\Controllers\Admin\CategoryController::class, 'getList'])->name('category.list');
        // Route::post('list', [\App\Http\Controllers\Admin\AutherController::class, 'getList'])->name('autherList');
        Route::post('delete', [\App\Http\Controllers\Admin\CategoryController::class, 'categoryDelete'])->name('category.delete');
        Route::get('/regist/form', [\App\Http\Controllers\Admin\CategoryController::class, 'registForm'])->name('category.regist.form');
        Route::post('/regist/confirm', [\App\Http\Controllers\Admin\CategoryController::class, 'registConfirm'])->name('category.regist.confirm');
        Route::post('/regist/insert', [\App\Http\Controllers\Admin\CategoryController::class, 'registInsert'])->name('category.regist.insert');
        Route::get('/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'editForm'])->name('category.edit.form');
        Route::post('/edit/confirm', [\App\Http\Controllers\Admin\CategoryController::class, 'editConfirm'])->name('category.edit.confirm');
        Route::post('/edit/update', [\App\Http\Controllers\Admin\CategoryController::class, 'editUpdate'])->name('category.edit.update');
    });


    //記事管理
    Route::group(['prefix' => 'pickup'], function () {
        Route::get('list', [\App\Http\Controllers\Admin\PickupController::class, 'getList'])->name('admin.pickup.list');
        Route::post('delete', [\App\Http\Controllers\Admin\PickupController::class, 'delete'])->name('admin.pickup.delete');
        Route::get('/regist/status/{status}', [\App\Http\Controllers\Admin\PickupController::class, 'registShowForm'])->name('admin.pickup.registShowForm');
        Route::post('/regist', [\App\Http\Controllers\Admin\PickupController::class, 'registInsert'])->name('admin.pickup.registInsert');
        Route::get('/edit/{pickup_id}/status/{status}', [\App\Http\Controllers\Admin\PickupController::class, 'editShowForm'])->name('admin.pickup.editShowForm');
        Route::post('/edit/{id}', [\App\Http\Controllers\Admin\PickupController::class, 'editUpdate'])->name('admin.pickup.editUpdate');
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
        Route::get('list', [\App\Http\Controllers\Admin\TagController::class, 'getList'])->name('tag.list');
        Route::post('regist', [\App\Http\Controllers\Admin\TagController::class, 'regist'])->name('tag.regist');
        Route::post('delete', [\App\Http\Controllers\Admin\TagController::class, 'delete'])->name('tag.delete');
        Route::get('edit/{id}/{name}', [\App\Http\Controllers\Admin\TagController::class, 'edit']);
    });
    
    //Ajax
    Route::group(['prefix' => 'ajax'], function () {
        Route::get('delete/profile/image/{image}', [\App\Http\Controllers\Admin\AjaxController::class, 'deleteProfileImage'])->name('ajax.delete.profile.image');
    });
    
});

