<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function getUserInfo($email)
    {
        $columnList = [
            "id",
            "email",
        ];

        $whereList = [
            ["email","=",$email],
        ];

        $dispData =$this::from("users")
                    ->where($whereList)
                    ->get($columnList);

        $aList = $dispData[0];

        return $aList;
    }

}
