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
        //layout+pickup
        $layoutData = AvailController::fillInLayout(NULL,NULL);
        $threeDaysAgo = new DateTime();
        $threeDaysAgo->modify('-3 days');//1日後

        $linkNum = rand(1,2);
        // $linkNum = 1;

        $dispData = [
            'pickupList' => $layoutData ->pickup,
            'newsList' => $layoutData ->news,
            'newArticlesList' => $layoutData ->newArticles,
            'rankingList' => $layoutData ->ranking,
            'threeDaysAgo' => $threeDaysAgo,
            'linkNum' => $linkNum,
        ];

        return view('front.'.USER_AGENT.'.top',$dispData);

    }

    public function test($test_id) {

        $dispData = [
            'test_id' => $test_id
        ];

        // return view('front.'.USER_AGENT.'.toptest_'.$test_id);
        return view('front.pc.toptest_'.$test_id);

    }

}
