<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    use HasFactory;

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


}
