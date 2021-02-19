<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    public function onlyAuther($auther_id) {
        $dispData = array();
        // return view('front.'.USER_AGENT.'.top',$dispData);
        var_dump("autherId".$auther_id);

    }

    public function onlyCategory($category_id) {
        $dispData = array();
        // return view('front.'.USER_AGENT.'.top',$dispData);
        var_dump("categoryId".$category_id);

    }

    public function bothAutherAndCategory($auther_id,$category_id) {
        $dispData = array();
        // return view('front.'.USER_AGENT.'.top',$dispData);
        var_dump("autherId".$auther_id."category".$category_id);

    }

}
