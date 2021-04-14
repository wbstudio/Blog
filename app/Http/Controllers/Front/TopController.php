<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Http\Controllers\Front\Avail;

class TopController extends Controller
{

    public function index() {
        $dispData = array();
        $layoutData = AvailController::fillInLayout(NULL,NULL);

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
        ];

        return view('front.'.USER_AGENT.'.top',$dispData);

    }

}
