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
                'auther' => $param["auther"],
                'auther_category' => $param["auther_category"],
                'main_category' => $param["main_category"],
                'tag' => $param["tag"],
            ];
        }

        return view('admin.article.list', $dispData);

    }


    public function regist() {
        return view('admin.article.regist');
    }

    public function insert(Request $request) {

        $upload_image = $request->file("eyecatch")->getClientOriginalName();
        $path = $request -> file("eyecatch")->storeAs("admin/article/eyecatch",$upload_image);
        var_dump($upload_image);
        // return view('admin.article.regist');
    }

}
