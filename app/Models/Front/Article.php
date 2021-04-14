<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        ];

        $dispData =$this::from("articles")
                    ->where($whereList)
                    ->orderBy('count', 'desc')
                    ->limit(5)
                    ->get($columnList);

        return $dispData;
    }


}
