<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    //
    public function index() {
        $dispData = array();
        return view('front.'.USER_AGENT.'.top',$dispData);

    }

}
