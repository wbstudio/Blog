<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;

    public function getPickupDataByPageInfo($auther=null,$category=null)
    {
        $columnList = [
            "id",
            "name",
            "auther_id",
            "category_id",
            "article_id",
            "delete_flag",
            "created_at",
            "updated_at",
        ];

        $whereList = [
            ["delete_flag","=",0],
        ];

        //auther_idの9999は該当なしの設定
        if(isset($auther)){
            $whereList[] = ["auther_id","=",$auther];
        }else{
            $whereList[] = ["auther_id","=",9999];
        }

        //category_idの9999は該当なしの設定
        if(isset($category)){
            $whereList[] = ["category_id","=",$category];
        }else{
            $whereList[] = ["category_id","=",9999];
        }

        $dispData =$this::from("pickups")
                    ->where($whereList)
                    ->get($columnList);


        if(isset($dispData[0])){
            return $dispData[0];
        }else{
            //該当のpickupがない時は
            $whereList = [
                ["delete_flag","=",0],
                ["auther_id","=",9999],
                ["category_id","=",9999],
            ];
        
            $dispData =$this::from("pickups")
                        ->where($whereList)
                        ->get($columnList);

            if(isset($dispData[0])){
                return $dispData[0];
            }else{
                return null;
            }
        }
    }

}
