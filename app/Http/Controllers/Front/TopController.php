<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\Front\Avail;
use DateTime;

class TopController extends Controller
{

    public function index() {
        $dispData = array();
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

        return view('front.'.USER_AGENT.'.top',$dispData);

    }

}
