<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tag extends Model
{
    use HasFactory;
    public function getArticleTagsList($tag_id)
    {
        $columnList = [
            "id",
            "name",
            "status",
            "delete_flag",
            "created_at",
            "updated_at",
        ];

        $whereList = [
            ["delete_flag","=",0],
        ];

        $dispData =$this::from("tags")
                    ->where($whereList)
                    ->whereIn("id",$tag_id)
                    ->orderby("id","desc")
                    ->get($columnList);

        $aList = $dispData;

        return $aList;
    }
}
