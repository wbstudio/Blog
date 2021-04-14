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
        if(isset($pickupsData["article_id"])){
            $pickupArticleData = $mdArticle->getArticlesListByPickupInfo($pickupsData["article_id"]);
        }
        //更新情報
        $newArticlesArticleData = $mdArticle->getArticlesListNewArticles();
        //News（config的な役割←configでobject使えないから）
        $newsData = ConfigureController::getNewsObj();
        //Ranking
        $rankingArticleData = $mdArticle->getArticlesListRanking();

        $layoutObj ->pickup = $pickupArticleData;
        $layoutObj ->news = $newsData;
        $layoutObj ->newArticles = $newArticlesArticleData;
        $layoutObj ->ranking = $rankingArticleData;

        return $layoutObj;

    }


}
