<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Tag extends Model
{
    use HasFactory;

    public function getTagsList()
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
                    ->orderby("id","desc")
                    ->get($columnList);

        $aList = $dispData;

        return $aList;
    }

}
