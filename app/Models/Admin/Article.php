<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Article extends Model
{
    use HasFactory;

    public function getArticlesList($param=null)
    {
        $columnList = [
            "id",
            "auther",
            "auther_category",
            "main_category",
            "tag",
            "title",
            "heading",
            "status",
            "created_at",
            "updated_at",
        ];


        $whereList = [
            ["delete_flag","=",0],
        ];
        if(isset($param["auther"]) && $param["auther"] != null){
            $whereList[] = ["auther","=",$param["auther"]];
        }
        if(isset($param["auther_category"]) && $param["auther_category"] != null){
            $whereList[] = ["auther_category","=",$param["auther_category"]];
        }
        if(isset($param["main_category"]) && $param["main_category"] != null){
            $whereList[] = ["main_category","=",$param["main_category"]];
        }
        if(isset($param["tag"]) && $param["tag"] != null){
            $whereList[] = ["tag","=",$param["tag"]];
        }


        $offset = 0;
        $limit = $param["per_page"];
        if(isset($param["page"]) && $param["page"] != 1){
            $offset = ($param["page"] - 1) * $param["per_page"];
        }


        $dispData =$this::from("articles")
                    ->where($whereList)
                    ->orderby("id","desc")
                    ->offset($offset)
                    ->limit($limit)
                    ->get($columnList);

        $aList["data"] = $dispData;


        $Cnt = DB::table('articles')->where($whereList)->count();

        
        $aList["AllCnt"] = $Cnt;
        return $aList;
    }


    public function getArticleData($id)
    {
        $columnList = [
            "id",
            "course",
            "classification",
            "order",
            "title",
            "heading",
            "explanation",
            "movie_link",
            "question",
            "commentary",
            "status",
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



}
