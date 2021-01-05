<?php
/****************
 * //admin-article用//
 * auther:Keisuke_Iwasada
 * date:2020/12/20 
 * [pager-paramater]
 * page:
 * auther:著者
 * auther_category:著者特有のカテゴリー
 * main_category:全体のカテゴリー
 * tag:該当タグ
 * [pager-paramater]
 * ****************** */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\Admin\Avail;
use \App\Models\Admin\Article;

class ArticleController extends Controller
{
    //
    public function getList(Request $request) {

        $param = null;
        $baseurl = null;
        $param["page"] = 1; //
        $param["per_page"] = 20; //
        $param["auther"] = null; //
        $param["auther_category"] = null; //
        $param["main_category"] = null; //
        $param["tag"] = null; //

        $auther = $request->auther; //
        $auther_category = $request->auther_category; //
        $main_category = $request->main_category; //
        $tag = $request->tag; //

        //POST時
        if($request->method() == "POST"){
            //著者
            if($auther != null){
                $param["auther"] = $auther;
                $baseurl[] = "auther=".$param["auther"];
                if($auther_category != null){
                    $param["auther_category"] = $auther_category;
                    $baseurl[] = "auther_category=".$param["auther_category"];
                }
            }
            //カテゴリー
            if($main_category != null){
                $param["main_category"] = $main_category;
                $baseurl[] = "main_category=".$param["main_category"];
            }
            //タグ
            if($tag != null){
                $param["tag"] = $tag;
                $baseurl[] = "tag=".$param["tag"];
            }
        }

        //GETの時(初期表示（検索なしの1ページ目も）)
        if($request->method() == "GET"){
            if(isset($_GET["auther"]) && $_GET["auther"] != ""){
                $param["auther"] = $_GET["auther"];
                $baseurl[] = "auther=".$param["auther"];
            }
            if(isset($_GET["auther_category"]) && $_GET["auther_category"] != ""){
                $param["auther_category"] = $_GET["auther_category"];
                $baseurl[] = "auther_category=".$param["auther_category"];
            }
            if(isset($_GET["main_category"]) && $_GET["main_category"] != ""){
                $param["main_category"] = $_GET["main_category"];
                $baseurl[] = "main_category=".$param["main_category"];
            }
            if(isset($_GET["tag"]) && $_GET["tag"] != ""){
                $param["tag"] = $_GET["tag"];
                $baseurl[] = "tag=".$param["tag"];
            }
            if(isset($_GET["page"]) && $_GET["page"] != null){
                $param["page"] = $_GET["page"];
            }
        }

        //DAO
        $mdArticle = new Article();
        $articlesData = $mdArticle->getArticlesList($param);
        $articles = $articlesData["data"];
        
        //url
        if(isset($baseurl) && $baseurl != null){
            $baseurl = join("&",$baseurl);
            $baseurl = "?".$baseurl."&page=";
        }else{
            $baseurl = "?page=";
        }

        //pagenator
        if(isset($articles) && $articles != null){
            $page = $param["page"];
            $per_page = $param["per_page"];
            $all_cnt = $articlesData["AllCnt"];
            $data = AvailController::purepagenator($all_cnt,$page,$per_page);
        }

        $dispData = [];
        if(isset($articles) && count($articles) > 0){
            $dispData = [
                'articles' => $articles,
                'pagenator' => $data ->link,
                'page' => $page,
                'baseurl' => $baseurl,
                'autherhidden' => $param["auther"],
                'authercategoryhidden' => $param["auther_category"],
                'main_category' => $param["main_category"],
                'tag' => $param["tag"],
            ];
        }else{
            $dispData = [
                'autherhidden' => $param["auther"],
                'authercategoryhidden' => $param["auther_category"],
            ];
        }

        return view('admin.article.list', $dispData);

    }


    public function regist() {
        return view('admin.article.regist');
    }

    public function insert(Request $request) {

        $upload_image = null;
        if($request->file("eyecatch")){
            $upload_image = $request->file("eyecatch")->getClientOriginalName();
            $path = $request -> file("eyecatch")->storeAs("admin/article/eyecatch",$upload_image);
        }

        /*
        * バリデーション
        */
        $this->validate($request, [
            'auther' => 'required',
            ]);

        $article = new Article();
        $releaseDate = $request->input('release_year')."-".$request->input('release_month')."-".$request->input('release_day')." ".$request->input('release_hour').":".$request->input('release_minute');
        if($request->input('endstatus') == "on"){
            $endDate = $request->input('end_year')."-".$request->input('end_month')."-".$request->input('end_day')." ".$request->input('end_hour').":".$request->input('end_minute');
        }else{
            $endDate = "9999-12-31 23:59";
        }
        // #Greetingモデルクラスのプロパティに値を代入
        $article->auther = $request->input('auther');
        $article->auther_category = $request->input('auther_category');
        $article->main_category = $request->input('main_category');
        $article->title = $request->input('title');
        $article->heading = $request->input('heading');
        $article->eyecatch = $upload_image;
        $article->main = $request->input('main');
        $article->channel = $request->input('channel');
        $article->tag = $request->input('tag');
        $article->release_at = $releaseDate;
        $article->end_at = $endDate;
        $article->count = 371;
        $article->good = 0;
        $article->delete_flag = 0;
        $article->status = $request->input('status');
            
        // #Greetingモデルクラスのsaveメソッドを実行
        $article->save();
        return redirect('admin/article/list');

    }

    public function edit($id) {
        //DAO
        $mdArticle = new Article();
        $articlesData = $mdArticle->getArticleDataByid($id);
        $articles = $articlesData[0];
        $articles->editEndFlag = 0;
        if($articles->end_at != "9999-12-31 23:59:00"){
            $articles->editEndFlag = 1;
        }
        $dispData = [
            'article' => $articles,
            'autherhidden' => $articles["auther"],
            'authercategoryhidden' => $articles["auther_category"],
            'maincategoryhidden' => $articles["main_category"],
            'statushidden' => $articles["status"],
        ];
    return view('admin.article.edit',$dispData);
    }


    public function update(Request $request) {

        $upload_image = null;
        if($request->file("eyecatch")){
            $upload_image = $request->file("eyecatch")->getClientOriginalName();
            $path = $request -> file("eyecatch")->storeAs("admin/article/eyecatch",$upload_image);
        }

        /*
        * バリデーション
        */
        // $this->validate($request, [
        //     'auther' => 'required',
        //     ]);

        $article = new Article();
        $releaseDate = $request->input('release_year')."-".$request->input('release_month')."-".$request->input('release_day')." ".$request->input('release_hour').":".$request->input('release_minute');
        if($request->input('endstatus') == "on"){
            $endDate = $request->input('end_year')."-".$request->input('end_month')."-".$request->input('end_day')." ".$request->input('end_hour').":".$request->input('end_minute');
        }else{
            $endDate = "9999-12-31 23:59";
        }
        // #Greetingモデルクラスのプロパティに値を代入
        $article = Article::where("id",$request->input('id'))->first();
        $article->auther = $request->input('auther');
        $article->auther_category = $request->input('auther_category');
        $article->main_category = $request->input('main_category');
        $article->title = $request->input('title');
        $article->heading = $request->input('heading');
        if($upload_image != null){
            $article->eyecatch = $upload_image;
        }
        $article->main = $request->input('main');
        $article->channel = $request->input('channel');
        $article->tag = $request->input('tag');
        $article->release_at = $releaseDate;
        $article->end_at = $endDate;
        $article->status = $request->input('status');
            
        // #Greetingモデルクラスのsaveメソッドを実行
        $article->save();
        return redirect('admin/article/list');

    }


}
