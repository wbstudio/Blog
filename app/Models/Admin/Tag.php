<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Tag extends Model
{
    use HasFactory;

    public function getTagList()
    {

        $columnList = [
            "id",
            "name",
            "status",
            "delete_flag",
            "created_at",
            "updated_at",
        ];

        $query = DB::table('tags');
        $query->select($columnList);

        $query->where('delete_flag', config('const.DELETE_FLG_OFF'));

        $tagList = $query->get();

        return $tagList;
    }

}
