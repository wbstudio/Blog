<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class Article extends Model
{
    use HasFactory;
    protected $dates = [
        'release_at', //追加する。
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function getArticleDataByid($id)
    {
        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "main",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];


        $whereList = [
            ["delete_flag","=",0],
            ["id","=",$id],
        ];



        $dispData =$this::from("articles")
                    ->where($whereList)
                    ->get($columnList);

        return $dispData;
    }

    public function getArticlesListByPickupInfo($pickupsData)
    {

        $articleIdArray = explode(",",$pickupsData);

        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];


        $whereList = [
            ["delete_flag","=",0],
            ["status","=",2],
        ];

        $dispData =$this::from("articles")
                    ->where($whereList)
                    ->whereIn('id', $articleIdArray)
                    ->get($columnList);

        $returnData = [];
        //順番の並び替え
        if(isset($articleIdArray) && count($articleIdArray) > 0){
            foreach($articleIdArray as $pickup){        
                if(isset($dispData) && is_countable($dispData)){
                    foreach($dispData as $articleData){
                        if($articleData->id == $pickup){
                            $returnData[] = $articleData;
                        }
                    }
                }
            }
        }

        return $returnData;
    }


    public function getArticlesListNewArticles()
    {
        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];


        $whereList = [
            ["delete_flag","=",0],
            ["status","=",2],
        ];

        $dispData =$this::from("articles")
                    ->where($whereList)
                    ->orderBy('release_at', 'desc')
                    ->limit(5)
                    ->get($columnList);

        return $dispData;
    }

    public function getArticlesListRanking()
    {
        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];

        $whereList = [
            ["delete_flag","=",0],
            ["status","=",2],
        ];

        $dispData =$this::from("articles")
                    ->where($whereList)
                    ->orderBy('count', 'desc')
                    ->limit(5)
                    ->get($columnList);

        return $dispData;
    }

    public function getArticlesListNews()
    {
        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];

        $whereList = [
            ["delete_flag","=",0],
            ["status","=",4],
        ];

        $dispData =$this::from("articles")
                    ->where($whereList)
                    ->orderBy('count', 'desc')
                    ->limit(5)
                    ->get($columnList);

        return $dispData;
    }

    public function getCategoryArticlesListByPageInfo($auther=null,$category=null)
    {

        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];


        $whereList = [
            ["delete_flag","=",0],
            ["status","=",2],
        ];

        if(isset($auther) && $auther != null){
            $whereList[] = ["auther","=",$auther];
            $orderelement = "auther_category";
        }

        if(isset($category) && $category != null){
            $whereList[] = ["auther_category","=",$category];
            $orderelement = "auther";
        }

        $dispData =$this::from("articles")
                    ->where($whereList)
                    ->orderby($orderelement)
                    ->get($columnList);

        $returnData = [];
        if(isset($dispData)){
            foreach($dispData as $val){
                $returnData[$val[$orderelement]][] = $val;
            }            
        }

        return $returnData;
    }

    public function getDisplyArticleList($auther=null,$category=null,$searchWord=null,$page,$per_page)
    {

        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];



        $whereList = [
            ["delete_flag","=",0],
            ["status","=",2],
        ];

        if(isset($auther) && $auther != null && isset($category) && $category != null){
            $whereList[] = ["auther","=",$auther];
            $whereList[] = ["auther_category","=",$category];
        }

        if(isset($searchWord) && $searchWord != null){
            $searchWordList = explode(" ",$searchWord);
            foreach($searchWordList as $searchWordmass){
                $whereList[] = ["main","like","%$searchWordmass%"];
            }
        }

        $offset = 0;
        $limit = $per_page;
        if(isset($page) && $page != 1){
            $offset = ($page - 1) * $per_page;
        }


        $dispData["data"] =$this::from("articles")
                    ->where($whereList)
                    ->orderby("release_at","desc")
                    ->offset($offset)
                    ->limit($limit)
                    ->get($columnList);

        $dispData["AllCnt"] = DB::table('articles')->where($whereList)->count();
            
        return $dispData;
    }

    public function getDisplyArticleListByTagId($tagId=null,$page,$per_page)
    {

        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];


        $whereList = [
            ["delete_flag","=",0],
            ["status","=",2],
        ];

        $offset = 0;
        $limit = $per_page;
        if(isset($page) && $page != 1){
            $offset = ($page - 1) * $per_page;
        }


        $dispData["data"] =$this::from("articles")
                    ->where($whereList)
                    ->whereRaw('FIND_IN_SET('.$tagId.',tag)')
                    ->orderby("release_at","desc")
                    ->offset($offset)
                    ->limit($limit)
                    ->get($columnList);

        $dispData["AllCnt"] = DB::table('articles')->where($whereList)->whereRaw('FIND_IN_SET('.$tagId.',tag)')->count();

        return $dispData;
    }


    public function getArticlesListPerAuther()
    {

        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];



        $confAuther= config('auther');
        foreach($confAuther as $key => $val){
            $whereList = null;
            $whereList = [
                ["delete_flag","=",0],
                ["status","=",2],
                ["auther","=",$key]
            ];
            $dispData[$key] =$this::from("articles")
                            ->where($whereList)
                            ->orderby("release_at","desc")
                            ->get($columnList);
        }

        return $dispData;
    }

    public function getArticlesListPerCategory()
    {

        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];



        $confAuther= config('category');
        foreach($confAuther as $key => $val){
            $whereList = null;
            $whereList = [
                ["delete_flag","=",0],
                ["status","=",2],
                ["auther_category","=",$key]
            ];
            $dispData[$key] =$this::from("articles")
                            ->where($whereList)
                            ->orderby("release_at","desc")
                            ->get($columnList);
        }

        return $dispData;
    }
    

    public function getArticlesListByCategoryId($category_id)
    {

        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];

        $whereList = null;
        $whereList = [
            ["delete_flag","=",0],
            ["status","=",2],
            ["auther_category","=",$category_id]
        ];

        $dispData =$this::from("articles")
                        ->where($whereList)
                        ->orderby("release_at","desc")
                        ->get($columnList);

        foreach($dispData as $val){
            $aList[$val["auther"]][] = $val;
        }

        return $aList;
    }


}
