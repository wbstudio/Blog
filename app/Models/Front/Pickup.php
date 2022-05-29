<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

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

        $query = DB::table('pickups');
        $query->select($columnList);
        $query->where('delete_flag', config('const.DELETE_FLG_OFF'));

        //auther_idの9999は該当なしの設定
        if(isset($auther)){
            $query->where('auther_id', $auther);
        }else{
            $query->where('auther_id', config('const.PICKUP_NO_AUTHER'));
        }

        //auther_idの9999は該当なしの設定
        if(isset($category)){
            $query->where('category_id', $category);
        }else{
            $query->where('category_id', config('const.PICKUP_NO_CATEGORY'));
        }

        $pickupList = $query->first();

        if(isset($pickupList)){
            return $pickupList;
        }else{
            //該当のpickupがない時は
            $query = DB::table('pickups');
            $query->select($columnList);
            $query->where('delete_flag', config('const.DELETE_FLG_OFF'))
                ->where('auther_id', config('const.PICKUP_NO_AUTHER'))
                ->where('category_id', config('const.PICKUP_NO_CATEGORY'));    
            $pickupList = $query->first();

            if(isset($pickupList)){
                return $pickupList;
            }else{
                return null;
            }
        }
    }

}
