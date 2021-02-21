<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function articleDetail($article_id) {
        $dispData = array();
        return view('front.'.USER_AGENT.'.article',$dispData);

    }


}
