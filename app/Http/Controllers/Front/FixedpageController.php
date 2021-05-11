<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\Front\Avail;
use DateTime;

class FixedpageController extends Controller
{
    //
    public function thisblogis() {
        $dispData = array();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];

        return view('front.'.USER_AGENT.'.thisblogis',$dispData);

    }

    public function howtouse() {
        $dispData = array();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];

        return view('front.'.USER_AGENT.'.howtouse',$dispData);

    }

    public function operation() {
        $dispData = array();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];

        return view('front.'.USER_AGENT.'.operation',$dispData);

    }

    public function terms() {
        $dispData = array();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];

        return view('front.'.USER_AGENT.'.terms',$dispData);

    }

    public function privacy() {
        $dispData = array();
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
        ];

        return view('front.'.USER_AGENT.'.privacy',$dispData);

    }

}
