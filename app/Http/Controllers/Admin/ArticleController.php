<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Admin\Article;
use \App\Models\Auther;
use \App\Models\Category;
use \App\Models\Admin\Tag;

class ArticleController extends Controller
{
    public function getList(Request $request) {

        $arrayRequest = [
            'auther' => $request->input('auther'),
            'category' => $request->input('category'),
        ];
        
        $mdArticle = new Article();
        $articleList = $mdArticle->getArticlesList($arrayRequest);

        $mdAuther = new Auther();
        $autherNameList = $mdAuther->getAutherNameList();

        $mdCategory = new Category();
        $categoryNameList = $mdCategory->getCategoryNameList();

        // ページャーURLに引数追加
         if ($articleList->isNotEmpty()) {
            $articleList->appends($arrayRequest);
        }

        $queryString = '&auther=' . $arrayRequest['auther'] .
                        // '&bond_name=' . urlencode($arrayRequest['bond_name']) .
                        '&category=' . $arrayRequest['category'];

        return view('admin.article.list', 
                    compact(
                        'arrayRequest',
                        'queryString',
                        'articleList',
                        'autherNameList',
                        'categoryNameList',
                    )
                );
    }

    public function regist() {

        $mdAuther = new Auther();
        $autherDataList = $mdAuther->getAutherDataList();
        $mdCategory = new Category();
        $categoryNameList = $mdCategory->getCategoryNameList();
        $mdTag = new Tag();
        $tagList = $mdTag->getTagList();

        return view('admin.article.regist', 
                    compact(
                        'autherDataList',
                        'categoryNameList',
                        'tagList',
                    )
                );
    }

    public function insert(Request $request) {

        $inputData = $request->input();
        $inputData['eyecatch'] = null;
        if($request->file("eyecatch")){
            $inputData['eyecatch'] = $request->file("eyecatch")->getClientOriginalName();
            $path = $request -> file("eyecatch")->storeAs("admin/article/eyecatch", $inputData['eyecatch']);
        }
        /*
        * バリデーション
        */
        if($request->input("status") < 3){
            $this->validate($request, [
                'auther' => 'required',
                'category' => 'required',
            ]);
        }


        //公開日時
        $inputData['releaseDate'] = $request->input('release_year')."-".$request->input('release_month')."-".$request->input('release_day')." ".$request->input('release_hour').":".$request->input('release_minute');
        if($request->input('endstatus') == "on"){
            $inputData['endDate'] = $request->input('end_year')."-".$request->input('end_month')."-".$request->input('end_day')." ".$request->input('end_hour').":".$request->input('end_minute');
        }else{
            $inputData['endDate'] = "9999-12-31 23:59";
        }

        //タグ
        $inputTags = $request->input("tag");
        $inputData['tag'] = null;
        if(isset($inputTags) && $inputTags != null){
            $inputData['tag'] = join(",",$request->input("tag"));
        }

        $mdArticle = new Article();
        $mdArticle->insertArticleData($inputData);

        return redirect('admin/article/list');

    }

    public function edit(Request $request) {

        $mdArticle = new Article();
        $articlesData = $mdArticle->getArticleDataById($request->id);

        $articlesData->editEndFlag = 0;
        if($articlesData->end_at != "9999-12-31 23:59:00"){
            $articlesData->endFlg = 1;
        }

        $articlesData->tagsData = null;
        if(isset($articlesData->tag)){
            $articlesData->tagsData = explode(",", $articlesData->tag);
        }

        $mdAuther = new Auther();
        $autherDataList = $mdAuther->getAutherDataList();
        $mdCategory = new Category();
        $categoryNameList = $mdCategory->getCategoryNameList();
        $mdTag = new Tag();
        $tagList = $mdTag->getTagList();

        return view('admin.article.edit',
                    compact(
                        'articlesData',
                        'autherDataList',
                        'categoryNameList',
                        'tagList',
                    )
                );
    }

    public function update(Request $request) {

        $inputData = $request->input();
        $inputData['eyecatch'] = null;
        if($request->file("eyecatch")){
            $inputData['eyecatch'] = $request->file("eyecatch")->getClientOriginalName();
            $path = $request -> file("eyecatch")->storeAs("admin/article/eyecatch", $inputData['eyecatch']);
        }

        if($request->input("status") < 3){
            $this->validate($request, [
                'auther' => 'required',
                'category' => 'required',
            ]);
        }

        $inputData['releaseDate'] = $request->input('release_year')."-".$request->input('release_month')."-".$request->input('release_day')." ".$request->input('release_hour').":".$request->input('release_minute');
        if($request->input('endstatus') == "on"){
            $inputData['endDate'] = $request->input('end_year')."-".$request->input('end_month')."-".$request->input('end_day')." ".$request->input('end_hour').":".$request->input('end_minute');
        }else{
            $inputData['endDate'] = "9999-12-31 23:59";
        }

        $inputTags = $request->input("tag");
        $inputData['tag'] = null;
        if(isset($inputTags) && $inputTags != null){
            $inputData['tag'] = join(",",$request->input("tag"));
        }

        $mdArticle = new Article();
        $mdArticle->editArticleData($inputData);
        return redirect('admin/article/list');
    }

    public function delete(Request $request) {

        $inputData = $request->input();

        $mdArticle = new Article();
        $mdArticle->deleteArticleData($inputData);

        return redirect('admin/article/list');
    }
}
