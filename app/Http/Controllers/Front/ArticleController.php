<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Front\Article;
use \App\Models\Front\Tag;
use \App\Http\Controllers\Front\Avail;
use DateTime;

class ArticleController extends Controller
{
    //
    public function articleDetail($article_id) {

        $dispData = array();
        $tagsData = null;
        //DAO
        $mdArticle = new Article();
        $articlesData = $mdArticle->getArticleDataByid($article_id);
        $articles = $articlesData[0];
        $articles->editEndFlag = 0;
        $tagsData = null;
        $containTags = null;

        $confAuther = config('auther')[$articles->auther];

        //layout+pickup部分
        $layoutData = AvailController::fillInLayout($articles->id,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        if(isset($articles->tag)){
            //DAO
            $containTags = explode(",",$articles->tag);
            $mdTag = new Tag();
            $tagsData = $mdTag->getArticleTagsList($containTags);
        }

        if($articles->end_at != "9999-12-31 23:59:00"){
            $articles->editEndFlag = 1;
        }

        $linkPrevNextData = null;
        $recommendData = null;
        $categoryRelativeData = null;
        $tagsRelativeData = null;
        if($articles->status == 2){
            $linkPrevNextData = $mdArticle->getArticleLinkDataTOPrevNext($articles->auther,$articles->auther_category,$articles->release_at);
            $recommendData = $mdArticle->getArticleLinkDataReccommend($articles->auther,$articles->auther_category,$articles->tag,$articles->id);
            $categoryRelativeData = $mdArticle->getArticleLinkDataToCategory($articles->auther,$articles->auther_category,$articles->id);
            $tagsRelativeData = $mdArticle->getArticleLinkDataToTags($containTags,$articles->id);
        }

        $dispData = [
            'article' => $articles,
            'autherhidden' => $articles["auther"],
            'authercategoryhidden' => $articles["auther_category"],
            'maincategoryhidden' => $articles["main_category"],
            'statushidden' => $articles["status"],
            'tags' => $tagsData,
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
            'confAuther' => $confAuther,
            'prevData' => $linkPrevNextData["prev"],
            'nextData' => $linkPrevNextData["next"],
            'recommendData' => $recommendData,
            'categoryRelativeData' => $categoryRelativeData,
            'tagsRelativeData' => $tagsRelativeData,
        ];

        $article = Article::where("id",$article_id)->first();
        $article->count = $articles->count +1;
        $article->save();
        
        return view('front.'.USER_AGENT.'.article',$dispData);

    }


}
