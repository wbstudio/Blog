<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Article extends Model
{
    use HasFactory;

    public function getArticlesList($arrayRequest)
    {
        $columnList = [
            "ar.id",
            "ar.auther",
            "ar.category",
            "ar.tag",
            "ar.title",
            "ar.heading",
            "ar.status",
            "ar.created_at",
            "ar.updated_at",
            "au.name as auther_name",
            "ca.name as category_name",
        ];

        $query = DB::table('articles as ar');

        $query->select($columnList);

        $query->join('authers as au', 'au.id', '=', 'ar.auther');
        $query->join('categories as ca', 'ca.id', '=', 'ar.category');

        $query->where('ar.delete_flag', config('const.DELETE_FLG_OFF'))
            ->where('au.delete_flg', config('const.DELETE_FLG_OFF'))
            ->where('ca.delete_flg', config('const.DELETE_FLG_OFF'));

        if (isset($arrayRequest['auther'])) {
            $query->where('ar.auther', $arrayRequest['auther']);
        }

        if (isset($arrayRequest['category'])) {
            $query->where('ar.category', $arrayRequest['category']);
        }
        $query->orderByDesc('ar.updated_at');

        $articleList = $query->paginate(config('const.ADMIN.ARTICLE_PER_PAGE'));

        return $articleList;
    }


    public function getArticleDataById($requestId)
    {
        $columnList = [
            "id",
            "auther",
            "category",
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


        $query = DB::table('articles as ar');

        $query->select($columnList);

        $query->where('ar.delete_flag', config('const.DELETE_FLG_OFF'))
            ->where('ar.id', $requestId);

        $articleData = $query->first();

        return $articleData;
    }

    public function getPureArticlesList()
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
            ["status","=",2],
        ];

        $dispData =$this::from("articles")
                    ->where($whereList)
                    ->get($columnList);

        return $dispData;
    }

    public function insertArticleData($inputData)
    {
        $query = DB::table('articles');

        $insertDataArray = [
            'auther' => $inputData['auther'],
            'category' => $inputData['category'],
            'title' => $inputData['title'],
            'heading' => $inputData['heading'],
            'eyecatch' => $inputData['eyecatch'],
            'main' => $inputData['main'],
            'tag' => $inputData['tag'],
            'release_at' => $inputData['releaseDate'],
            'end_at' => $inputData['endDate'],
            'count' => 370,
            'good' => 201,
            'delete_flag' => config('const.DELETE_FLG_OFF'),
            'status' => $inputData['status'],
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $query->insert($insertDataArray);
    }

    public function editArticleData($inputData)
    {
        $query = DB::table('articles');
        $query->where('id', $inputData['id']);
        $editDataArray = [
            'auther' => $inputData['auther'],
            'category' => $inputData['category'],
            'title' => $inputData['title'],
            'heading' => $inputData['heading'],
            'eyecatch' => $inputData['eyecatch'],
            'main' => $inputData['main'],
            'tag' => $inputData['tag'],
            'release_at' => $inputData['releaseDate'],
            'end_at' => $inputData['endDate'],
            'delete_flag' => config('const.DELETE_FLG_OFF'),
            'status' => $inputData['status'],
            'updated_at' => now(),
        ];

        $query->update($editDataArray);
    }

    public function deleteArticleData($inputData)
    {
        $query = DB::table('articles');
        $query->whereIn('id', $inputData['delete']);
        $editDataArray = [
            'delete_flag' => config('const.DELETE_FLG_ON'),
        ];

        $query->update($editDataArray);
    }

}
