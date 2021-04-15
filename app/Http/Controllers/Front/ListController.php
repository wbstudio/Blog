<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //
    public function onlyAuther($auther_id) {
        $dispData = array();
        return view('front.'.USER_AGENT.'.auther',$dispData);

    }

    public function onlyCategory($category_id) {
        $dispData = array();
        return view('front.'.USER_AGENT.'.category',$dispData);

    }

    public function categoryList() {
        $dispData = array();
        return view('front.'.USER_AGENT.'.categorylist',$dispData);
    }

    public function autherList() {
        $dispData = array();
        return view('front.'.USER_AGENT.'.autherlist',$dispData);
    }

    public function bothAutherAndCategory($auther_id,$category_id) {
        $dispData = array();
        return view('front.'.USER_AGENT.'.articlelist',$dispData);

    }

    public function searchBox(Request $request) {
        $dispData = array();
        $search_word = $request->input('search_word');
        return view('front.'.USER_AGENT.'.articlelist',$dispData);

    }

}
