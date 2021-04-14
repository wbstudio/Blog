<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;
    public function getPickUpList()
    {
        $columnList = [
            "id",
            "name",
            "auther_id",
            "category_id",
            "article_id",
            "created_at",
            "updated_at",
        ];


        $whereList = [
            ["delete_flag","=",0],
        ];

        $dispData =$this::from("pickups")
                    ->where($whereList)
                    ->orderby("updated_at","desc")
                    ->get($columnList);

        return $dispData;
    }

    public function getPickUpDataById($pickup_id)
    {
        $columnList = [
            "id",
            "name",
            "auther_id",
            "category_id",
            "article_id",
            "created_at",
            "updated_at",
        ];


        $whereList = [
            ["id","=",$pickup_id],
            ["delete_flag","=",0],
        ];

        $dispData =$this::from("pickups")
                    ->where($whereList)
                    ->get($columnList);

        return $dispData[0];
    }

}
