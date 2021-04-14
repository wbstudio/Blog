<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigureController extends Controller
{
    //
    public static function getNewsObj() {

        $obj = [
            (object)[
                        "id" => 1,
                        "name" => "configからのリンクtest01,configからのリンクtest01,configからのリンクtest01,configからのリンクtest01,configからのリンクtest01",
                        "auther" => 3,
                        "update_date" => "2021/04/011",
                        "new_icon" => 0,
                    ], 
            (object)[
                        "id" => 4,
                        "name" => "configからのリンクtest03,configからのリンクtest03,configからのリンクtest03,configからのリンクtest03,configからのリンクtest03",
                        "auther" => 1,
                        "update_date" => "2021/04/09",
                        "new_icon" => 1,
                    ], 
            (object)[
                        "id" => 2,
                        "name" => "configからのnewsリンクtest02,configからのnewsリンクtest02,configからのnewsリンクtest02,configからのnewsリンクtest02,configからのnewsリンクtest02",
                        "auther" => 2,
                        "update_date" => "2021/04/12",
                        "new_icon" => 0,
                    ], 
            (object)[
                        "id" => 3,
                        "name" => "configからのnewsリンクtest03,configからのnewsリンクtest03,configからのnewsリンクtest03,configからのnewsリンクtest03,configからのnewsリンクtest03",
                        "auther" => 2,
                        "update_date" => "2021/04/12",
                        "new_icon" => 1,
                    ], 
            (object)[
                        "id" => 8,
                        "name" => "configからのnewsリンクtest05,configからのnewsリンクtest05,configからのnewsリンクtest05,configからのnewsリンクtest05,configからのnewsリンクtest05",
                        "auther" => 2,
                        "update_date" => "2021/04/02",
                        "new_icon" => 1,
                    ], 
        ];

        return $obj;

    }
}
