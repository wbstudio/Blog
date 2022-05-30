<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class Article extends Model
{
    use HasFactory;
    protected $dates = [
        'release_at', //追加する。
        'created_at',
        'updated_at',
        'deleted_at'
    ];

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

    public function getArticlesListByPickupInfo($pickupsData)
    {

        $articleIdArray = explode(",",$pickupsData);

        $columnList = [
            "ar.id",
            "ar.auther",
            "ar.category",
            "ar.main_category",
            "ar.tag",
            "ar.channel",
            "ar.title",
            "ar.heading",
            "ar.eyecatch",
            "ar.status",
            "ar.release_at",
            "ar.end_at",
            "ar.count",
            "ar.good",
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
            ->where('ar.status', config('const.ARTICLE_STATUS.BLOG_RELEASE'))
            ->where('au.delete_flg', config('const.DELETE_FLG_OFF'))
            ->where('ca.delete_flg', config('const.DELETE_FLG_OFF'));


        $list = $query->get();

        $returnList = [];
        //順番の並び替え
        if(isset($articleIdArray) && count($articleIdArray) > 0){
            foreach($articleIdArray as $pickup){
                if(isset($list) && is_countable($list)){
                    foreach($list as $articleData){
                        if($articleData->id == $pickup){
                            $returnList[] = $articleData;
                        }
                    }
                }
            }
        }

        return $returnList;
    }


    public function getArticlesListNewArticles()
    {

        $columnList = [
            "ar.id",
            "ar.auther",
            "ar.category",
            "ar.main_category",
            "ar.tag",
            "ar.channel",
            "ar.title",
            "ar.heading",
            "ar.eyecatch",
            "ar.status",
            "ar.release_at",
            "ar.end_at",
            "ar.count",
            "ar.good",
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
            ->where('ar.status', config('const.ARTICLE_STATUS.BLOG_RELEASE'))
            ->where('au.delete_flg', config('const.DELETE_FLG_OFF'))
            ->where('ca.delete_flg', config('const.DELETE_FLG_OFF'));


        $list = $query->orderByDesc('ar.release_at')
                ->limit(5)
                ->get();

        return $list;
    }

    public function getArticlesListRanking()
    {
        $columnList = [
            "ar.id",
            "ar.auther",
            "ar.category",
            "ar.main_category",
            "ar.tag",
            "ar.channel",
            "ar.title",
            "ar.heading",
            "ar.eyecatch",
            "ar.status",
            "ar.release_at",
            "ar.end_at",
            "ar.count",
            "ar.good",
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
            ->where('ar.status', config('const.ARTICLE_STATUS.BLOG_RELEASE'))
            ->where('au.delete_flg', config('const.DELETE_FLG_OFF'))
            ->where('ca.delete_flg', config('const.DELETE_FLG_OFF'));


        $list = $query->orderByDesc('ar.count')
                ->limit(5)
                ->get();

        return $list;
    }

    public function getArticlesListNews()
    {
        $columnList = [
            "ar.id",
            "ar.auther",
            "ar.category",
            "ar.main_category",
            "ar.tag",
            "ar.channel",
            "ar.title",
            "ar.heading",
            "ar.eyecatch",
            "ar.status",
            "ar.release_at",
            "ar.end_at",
            "ar.count",
            "ar.good",
            "ar.created_at",
            "ar.updated_at",
            "au.name as auther_name",
        ];

        $query = DB::table('articles as ar');
        $query->select($columnList);

        $query->join('authers as au', 'au.id', '=', 'ar.auther');

        $query->where('ar.delete_flag', config('const.DELETE_FLG_OFF'))
            ->where('ar.status', config('const.ARTICLE_STATUS.NEWS_RELEASE'))
            ->where('au.delete_flg', config('const.DELETE_FLG_OFF'));


        $list = $query->limit(5)
                    ->get();

        return $list;
    }

    public function getCategoryArticlesListByPageInfo($auther=null,$category=null)
    {

        $columnList = [
            "id",
            "auther",
            "category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
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

        if(isset($auther) && $auther != null){
            $whereList[] = ["auther","=",$auther];
            $orderelement = "auther_category";
        }

        if(isset($category) && $category != null){
            $whereList[] = ["auther_category","=",$category];
            $orderelement = "auther";
        }

        $dispData =$this::from("articles")
                    ->where($whereList)
                    ->orderby($orderelement)
                    ->get($columnList);

        $returnData = [];
        if(isset($dispData)){
            foreach($dispData as $val){
                $returnData[$val[$orderelement]][] = $val;
            }            
        }

        return $returnData;
    }

    public function getDisplyArticleList($auther=null,$category=null,$searchWord=null,$page,$per_page)
    {

        $columnList = [
            "id",
            "auther",
            "category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
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

        if(isset($auther) && $auther != null && isset($category) && $category != null){
            $whereList[] = ["auther","=",$auther];
            $whereList[] = ["auther_category","=",$category];
        }

        if(isset($searchWord) && $searchWord != null){
            $searchWordList = explode(" ",$searchWord);
            foreach($searchWordList as $searchWordmass){
                $whereList[] = ["main","like","%$searchWordmass%"];
            }
        }

        $offset = 0;
        $limit = $per_page;
        if(isset($page) && $page != 1){
            $offset = ($page - 1) * $per_page;
        }


        $dispData["data"] =$this::from("articles")
                    ->where($whereList)
                    ->orderby("release_at","desc")
                    ->offset($offset)
                    ->limit($limit)
                    ->get($columnList);

        $dispData["AllCnt"] = DB::table('articles')->where($whereList)->count();
            
        return $dispData;
    }

    public function getDisplyArticleListByTagId($tagId=null,$page,$per_page)
    {

        $columnList = [
            "id",
            "auther",
            "category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
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

        $offset = 0;
        $limit = $per_page;
        if(isset($page) && $page != 1){
            $offset = ($page - 1) * $per_page;
        }


        $dispData["data"] =$this::from("articles")
                    ->where($whereList)
                    ->whereRaw('FIND_IN_SET('.$tagId.',tag)')
                    ->orderby("release_at","desc")
                    ->offset($offset)
                    ->limit($limit)
                    ->get($columnList);

        $dispData["AllCnt"] = DB::table('articles')->where($whereList)->whereRaw('FIND_IN_SET('.$tagId.',tag)')->count();

        return $dispData;
    }


    public function getArticlesListPerAuther()
    {

        $columnList = [
            "id",
            "auther",
            "category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];



        $confAuther= config('auther');
        foreach($confAuther as $key => $val){
            $whereList = null;
            $whereList = [
                ["delete_flag","=",0],
                ["status","=",2],
                ["auther","=",$key]
            ];
            $dispData[$key] =$this::from("articles")
                            ->where($whereList)
                            ->orderby("release_at","desc")
                            ->get($columnList);
        }

        return $dispData;
    }

    public function getArticlesListPerCategory()
    {

        $columnList = [
            "id",
            "auther",
            "category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];



        $confAuther= config('category');
        foreach($confAuther as $key => $val){
            $whereList = null;
            $whereList = [
                ["delete_flag","=",0],
                ["status","=",2],
                ["auther_category","=",$key]
            ];
            $dispData[$key] =$this::from("articles")
                            ->where($whereList)
                            ->orderby("release_at","desc")
                            ->get($columnList);
        }

        return $dispData;
    }
    

    public function getArticlesListByCategoryId($category_id)
    {

        $columnList = [
            "id",
            "auther",
            "category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];

        $aList = null;
        $whereList = [
            ["delete_flag","=",0],
            ["status","=",2],
            ["auther_category","=",$category_id]
        ];

        $dispData =$this::from("articles")
                        ->where($whereList)
                        ->orderby("release_at","desc")
                        ->get($columnList);

        foreach($dispData as $val){
            $aList[$val["auther"]][] = $val;
        }

        return $aList;
    }

    public function getArticleLinkDataTOPrevNext($auther,$category,$release)
    {

        $columnList = [
            "id",
            "auther",
            "category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
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
            ["auther","=",$auther],
            ["auther_category","=",$category],
            ["release_at",">",$release],
        ];

        $dispData["next"] =$this::from("articles")
                        ->where($whereList)
                        ->orderby("release_at","asc")
                        ->limit(1)
                        ->get($columnList);

        $whereList = [
            ["delete_flag","=",0],
            ["status","=",2],
            ["auther","=",$auther],
            ["auther_category","=",$category],
            ["release_at","<",$release],
        ];
                
        $dispData["prev"] =$this::from("articles")
                        ->where($whereList)
                        ->orderby("release_at","desc")
                        ->limit(1)
                        ->get($columnList);

        return $dispData;
    }

    public function getArticleLinkDataReccommend($auther,$category,$tags,$id)
    {

        $columnList = [
            "id",
            "auther",
            "category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
            "eyecatch",
            "status",
            "release_at",
            "end_at",
            "count",
            "good",
            "created_at",
            "updated_at",
        ];

        $returnObjBase = null;

        //autherとcategoryが同じ
        $whereListSameCategory = [
            ["delete_flag","=",0],
            ["status","=",2],
            ["auther","=",$auther],
            ["auther_category","=",$category],
            ["id","!=",$id],
        ];

        $dispData01 =$this::from("articles")
                        ->where($whereListSameCategory)
                        ->orderby("release_at","desc")
                        ->limit(8)
                        ->get($columnList);

        //Tagが同じ
        $whereListSameTag = [
            ["delete_flag","=",0],
            ["status","=",2],
            ["id","!=",$id],
        ];
        if(isset($dispData01) && count($dispData01) > 0){
            foreach($dispData01 as $disp01){
                $whereListSameCategoryOtherAuther[] = ["id","!=",$disp01->id];
                $whereListSameAutherOtherCategory[] = ["id","!=",$disp01->id];
                $returnObjBase[] = $disp01;
            }
        }

        //auther違うcategoryが同じ
        $whereListSameCategoryOtherAuther = [
            ["delete_flag","=",0],
            ["status","=",2],
            ["id","!=",$id],
            ["auther","!=",$auther],
            ["auther_category","=",$category],
        ];
        $dispData03 =$this::from("articles")
                        ->where($whereListSameCategoryOtherAuther)
                        ->orderby("release_at","desc")
                        ->limit(4)
                        ->get($columnList);

        

        //category違うがauther同じ
        $whereListSameAutherOtherCategory = [
            ["delete_flag","=",0],
            ["status","=",2],
            ["id","!=",$id],
            ["auther","=",$auther],
            ["auther_category","!=",$category],
        ];
        if(isset($dispData03) && count($dispData03) > 0){
            foreach($dispData03 as $disp03){
                $whereListSameAutherOtherCategory[] = ["id","!=",$disp03->id];
                $returnObjBase[] = $disp03;
            }
        }
        $dispData04 =$this::from("articles")
                        ->where($whereListSameAutherOtherCategory)
                        ->orderby("release_at","desc")
                        ->limit(4)
                        ->get($columnList);
        if(isset($dispData04) && count($dispData04) > 0){
            foreach($dispData04 as $disp04){
                $returnObjBase[] = $disp04;
            }
        }

        $cnt = 0;

        if(isset($returnObjBase) && count($returnObjBase)){
            shuffle($returnObjBase);
            $cnt = count($returnObjBase);
        }
        if($cnt > 8){
            for($i = 1;$i < 8;$i++){
                $returnObj[] =  $returnObjBase[$i];
            }
        }else{
            $returnObj = $returnObjBase;
        }

        return $returnObj;
    }

    public function getArticleLinkDataToCategory($auther,$category,$id)
    {

        $dispData = null;

        $columnList = [
            "id",
            "auther",
            "category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
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
            ["auther","=",$auther],
            ["auther_category","=",$category],
            ["id","!=",$id],
        ];

        $dispData =$this::from("articles")
                        ->where($whereList)
                        ->orderby("release_at","desc")
                        ->limit(8)
                        ->get($columnList);


        return $dispData;
    }

    public function getArticleLinkDataToTags($tagsArray,$id)
    {

        $columnList = [
            "id",
            "auther",
            "category",
            "main_category",
            "tag",
            "channel",
            "title",
            "heading",
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

        $returnData = null;

        if(isset($tagsArray) && $tagsArray != NULL){
            foreach($tagsArray as $key => $tag){
                $dispData = null;
                $dispData = $this::from("articles")
                ->where($whereList)
                ->whereRaw('FIND_IN_SET('.$tag.',tag)')
                ->orderby("release_at","desc")
                ->limit(8)
                ->get($columnList);
                if(isset($dispData) && count($dispData) > 0){
                    foreach($dispData as $dataBydD){
                        $returnData[] = $dataBydD;
                    }
                }
            }
        }

        $cnt = 0;
        if(isset($returnData) && count($returnData) > 0){
            shuffle($returnData);
            $cnt = count($returnData);
        }
        if($cnt > 8){
            for($i = 1;$i < 8;$i++){
                $returnObj[] =  $returnData[$i];
            }
        }else{
            $returnObj = $returnData;
        }

        return $returnObj;

    }


}
