<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\Front\Avail;
use DateTime;
use \App\Models\Front\Article;
use \App\Models\Front\Tag;
use Illuminate\Support\Facades\Config;

class ListController extends Controller
{

    public function onlyAuther($auther_id) {
        $dispData = array();
        //layout+pickup
        $layoutData = AvailController::fillInLayout($auther_id,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $mdArticle = new Article();
        $categoryArticlesList = $mdArticle->getCategoryArticlesListByPageInfo($auther_id,null);

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
            'autherId'=>$auther_id,
            'categoryArticlesList'=>$categoryArticlesList,
        ];

        return view('front.'.USER_AGENT.'.auther',$dispData);

    }

    public function onlyCategory($category_id) {
        $dispData = array();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,$category_id);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $mdArticle = new Article();
        $articlesListByCategoryId = $mdArticle->getArticlesListByCategoryId($category_id);

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
            'articlesListByCategoryId' => $articlesListByCategoryId,
            'categoryId' => $category_id,
        ];

        return view('front.'.USER_AGENT.'.category',$dispData);

    }

    public function categoryList() {
        $dispData = array();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $mdArticle = new Article();
        $articlesListPerCategory = $mdArticle->getArticlesListPerCategory();

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
            'articlesListPerCategory' => $articlesListPerCategory,
        ];

        return view('front.'.USER_AGENT.'.categorylist',$dispData);
    }

    public function autherList() {
        $dispData = array();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $mdArticle = new Article();
        $articlesListPerAuther = $mdArticle->getArticlesListPerAuther();

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
            'articlesListPerAuther' => $articlesListPerAuther,
        ];

        return view('front.'.USER_AGENT.'.autherlist',$dispData);
    }

    public function bothAutherAndCategory($auther_id,$category_id,$page) {
        $perPage = config('const.FRONT.ARTICLE_LIST_NUMBER');
        $dispData = array();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $confAuther = Config::get('auther');
        $addTitle = $confAuther[$auther_id]["category"][$category_id]["name"];

        //記事一覧
        $mdArticle = new Article();
        $articlesByDB = $mdArticle->getDisplyArticleList($auther_id,$category_id,null,$page,$perPage);
        $articlesList = $articlesByDB["data"];

        $mdTag = new Tag();
        $allTagData = $mdTag->getAllTagsList();

        //pagenator
        if(isset($articlesList) && $articlesList != null){
            $page = $page;
            $all_cnt = $articlesByDB["AllCnt"];
            $data = AvailController::purepagenator($all_cnt,$page,$perPage);
            foreach($articlesList as $key => $articleData){
                if($articleData->tag){
                    $articleData -> tagObj = explode(",",$articleData->tag);
                }else{
                    $articleData -> tagObj = null;
                }
                $articlesList[$key] = $articleData;
            }
        }

        $baseUrl = "auther/".$auther_id."/category/".$category_id."/page/";

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
            'threeDaysAgo' => $articlesList,
            'addTitle' => $addTitle,
            'articles' => $articlesList,
            'pagenator' => $data ->link,
            'page' => $page,
            'baseUrl' => $baseUrl,
            'allTagData' => $allTagData
        ];

        return view('front.'.USER_AGENT.'.articlelist',$dispData);

    }

    public function searchBox(Request $request) {
        $perPage = config('const.FRONT.ARTICLE_LIST_NUMBER');
        $dispData = array();
        $addTitle = $request->input('search');
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        //記事一覧
        $mdArticle = new Article();
        $articlesByDB = $mdArticle->getDisplyArticleList(null,null,$addTitle,1,$perPage);
        $articlesList = $articlesByDB["data"];
        

        $mdTag = new Tag();
        $allTagData = $mdTag->getAllTagsList();

        //pagenator
        if(isset($articlesList) && $articlesList != null){
            $page = 1;
            $all_cnt = $articlesByDB["AllCnt"];
            $data = AvailController::purepagenator($all_cnt,$page,$perPage);
            foreach($articlesList as $key => $articleData){
                if($articleData->tag){
                    $articleData -> tagObj = explode(",",$articleData->tag);
                }else{
                    $articleData -> tagObj = null;
                }
                $articlesList[$key] = $articleData;
            }
        }

        $baseUrl = "search/".$addTitle."/page/";

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
            'threeDaysAgo' => $articlesList,
            'addTitle' => $addTitle,
            'articles' => $articlesList,
            'pagenator' => $data ->link,
            'page' => $page,
            'baseUrl' => $baseUrl,
            'allTagData' => $allTagData
        ];

        return view('front.'.USER_AGENT.'.articlelist',$dispData);

    }

    public function searchPagenation($searchWord,$page) {
        $perPage = config('const.FRONT.ARTICLE_LIST_NUMBER');
        $dispData = array();
        $addTitle = $searchWord;
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        //記事一覧
        $mdArticle = new Article();
        $articlesByDB = $mdArticle->getDisplyArticleList(null,null,$addTitle,$page,$perPage);
        $articlesList = $articlesByDB["data"];
        

        $mdTag = new Tag();
        $allTagData = $mdTag->getAllTagsList();

        //pagenator
        if(isset($articlesList) && $articlesList != null){
            $page = $page;
            $all_cnt = $articlesByDB["AllCnt"];
            $data = AvailController::purepagenator($all_cnt,$page,$perPage);
            foreach($articlesList as $key => $articleData){
                if($articleData->tag){
                    $articleData -> tagObj = explode(",",$articleData->tag);
                }else{
                    $articleData -> tagObj = null;
                }
                $articlesList[$key] = $articleData;
            }
        }

        $baseUrl = "search/".$addTitle."/page/";

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
            'threeDaysAgo' => $articlesList,
            'addTitle' => $addTitle,
            'articles' => $articlesList,
            'pagenator' => $data ->link,
            'page' => $page,
            'baseUrl' => $baseUrl,
            'allTagData' => $allTagData
        ];

        return view('front.'.USER_AGENT.'.articlelist',$dispData);

    }

    public function tagArticleList($tag_id,$page) {
        $perPage = config('const.FRONT.ARTICLE_LIST_NUMBER');
        $dispData = array();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        //記事一覧
        $mdArticle = new Article();
        $articlesByDB = $mdArticle->getDisplyArticleListByTagId($tag_id,$page,$perPage);
        $articlesList = $articlesByDB["data"];

        $mdTag = new Tag();
        $allTagData = $mdTag->getAllTagsList();

        //pagenator
        if(isset($articlesList) && $articlesList != null){
            $page = $page;
            $all_cnt = $articlesByDB["AllCnt"];
            $data = AvailController::purepagenator($all_cnt,$page,$perPage);
            foreach($articlesList as $key => $articleData){
                if($articleData->tag){
                    $articleData -> tagObj = explode(",",$articleData->tag);
                }else{
                    $articleData -> tagObj = null;
                }
                $articlesList[$key] = $articleData;
            }
        }

        $baseUrl = "tag/".$tag_id."/page/";
        $addTitle = "#".$allTagData[$tag_id];

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
            'threeDaysAgo' => $articlesList,
            'addTitle' => $addTitle,
            'articles' => $articlesList,
            'pagenator' => $data ->link,
            'page' => $page,
            'baseUrl' => $baseUrl,
            'allTagData' => $allTagData
        ];

        return view('front.'.USER_AGENT.'.articlelist',$dispData);

    }

}
