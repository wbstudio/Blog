<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Front\Pickup;
use \App\Models\Front\Article;
use Illuminate\Support\Facades\Config;
use \App\Http\Controllers\Front\Configure;

class AvailController extends Controller
{
    //
    public static function fillInLayout($auther=null,$category=null){

        $layoutObj =  new \stdClass();
        $pickupArticleData =  new \stdClass();
        //最大5個
        $newsData =  new \stdClass();
        //最大5個
        $newArticlesArticleData =  new \stdClass();
        //最大5個
        $rankingArticleData =  new \stdClass();

        //DAO
        $mdPickup = new Pickup();
        $pickupsData = $mdPickup->getPickupDataByPageInfo($auther,$category);

        //DAO
        $mdArticle = new Article();
        //pickup
        if(isset($pickupsData->article_id)){
            $pickupArticleData = $mdArticle->getArticlesListByPickupInfo($pickupsData->article_id);
        }
        //更新情報
        $newArticlesArticleData = $mdArticle->getArticlesListNewArticles();
        //News（config的な役割←configでobject使えないから）
        $newsData = $mdArticle->getArticlesListNews();
        //Ranking
        $rankingArticleData = $mdArticle->getArticlesListRanking();

        $layoutObj ->pickup = $pickupArticleData;
        $layoutObj ->news = $newsData;
        $layoutObj ->newArticles = $newArticlesArticleData;
        $layoutObj ->ranking = $rankingArticleData;

        return $layoutObj;

    }

    /**
    *$dArray=>データ
    *$c_page=>現在のページ
    *$per_page=>ページ内の表示数
    *で動くページネーター
    */
    public static function purepagenator($all_cnt,$c_page,$per_page){
        $link = new \stdClass();
        $pagenator =  new \stdClass(); 
        $totalData = $all_cnt;
        $totalPageCount = ceil($totalData/$per_page);
        $linkArray = array();
        if($c_page > 1){
            $link->prePageNum = $c_page - 1;
        }
        if($c_page < $totalPageCount){
            $link ->nextPageNum = $c_page + 1;
        }
        if($c_page > 4){
            $link ->firstPageNum   = 1;
        }
        if($c_page < $totalPageCount - 3){
            $link ->lastPageNum    = $totalPageCount;
        }
        $start = 1;
        $end = $totalPageCount;
        if($c_page > 3){
            $start = $c_page - 3; 
        }
        if($c_page < $totalPageCount - 3){
            $end = $c_page + 3; 
        }
        for($i = $start;$i < $end + 1;$i++){
            $linkArray[$i-$start] = $i;
        }

        $link ->linkNum = $linkArray;
        $pagenator ->link = $link;
        return $pagenator;
    }



}
