<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Admin\Article;
use \App\Models\Admin\Pickup;

class PickupController extends Controller
{
    //
    public function getList() {

        //DAO-selectArticle
        $articles = null;
        $mdArticle = new Article();
        $articles = $mdArticle->getPureArticlesList();
        
        //DAO-pickup
        $pickUps = null;
        $mdPickUp = new Pickup();
        $pickUps = $mdPickUp->getPickUpList();

        $dispData = [
            'articles' => $articles,
            'pickups' => $pickUps,
        ];

        return view('admin.pickup.list', $dispData);

    }

    public function registShowForm($status) {

        //DAO-selectArticle
        $articles = null;
        $mdArticle = new Article();
        $articles = $mdArticle->getPureArticlesList();
        
        $dispData = [
            'articles' => $articles,
            'status' => $status,
        ];

        return view('admin.pickup.registForm', $dispData);

    }

    public function editShowForm($pickup_id,$status) {

        //DAO-selectArticle
        $articles = null;
        $mdArticle = new Article();
        $articles = $mdArticle->getPureArticlesList();
        
        //DAO-pickup
        $pickUps = null;
        $mdPickUp = new Pickup();
        $pickUps = $mdPickUp->getPickUpDataById($pickup_id);

        $pickUps -> articles = explode(",",$pickUps->article_id);

        $dispData = [
            'articles' => $articles,
            'pickups' => $pickUps,
            'status' => $status,
        ];

        return view('admin.pickup.editForm', $dispData);

    }

    public function delete(Request $request) {

        $deletePickupArray = $request->input("delete_id");
        //DAO
        $Pickup = new Pickup();
        if(isset($deletePickupArray) && count($deletePickupArray) > 0){
            foreach($deletePickupArray as $deletePickup){
                $Pickup = Pickup::where("id",$deletePickup)->first();
                $Pickup->delete_flag = 1;
                $Pickup->save();
            }
        }

        return redirect(route('admin.pickup.list'));

    }

    public function registInsert(Request $request) {

        //DAO-pickup
        $pickUps = null;
        $mdPickUp = new Pickup();
        $pickUps = $mdPickUp->getPickUpList();

        if(isset($pickUps) && is_countable($pickUps)){
            foreach($pickUps as $pickup){
                if($pickup->auther_id == $request->input('auther_id') && $pickup->category_id == $request->input('category_id')){
                    return redirect(route('admin.pickup.registShowForm',['status' =>'duplicate']))->withInput();
                }                
            }
        }
        
        $unique = array_unique($request->article);
        $articlesArray = null;
        $article_id = null;
        if(isset($unique) && count($unique) > 0){
            foreach($unique as $val){
                if(isset($val) && $val != null){
                    $articlesArray[] = $val;
                }
            }
            if(isset($articlesArray) && count($articlesArray) > 0){
                $article_id = join(",",$articlesArray);
            }
        }

        #Greetingモデルクラスのプロパティに値を代入
        $mdPickUp->name = $request->input('name');
        $mdPickUp->auther_id = $request->input('auther_id');
        $mdPickUp->category_id = $request->input('category_id');
        $mdPickUp->article_id = $article_id;
        $mdPickUp->delete_flag = 0;
        $mdPickUp->save();

        return redirect(route('admin.pickup.list'));
        
    }

    public function editUpdate(Request $request,$id) {

        //DAO-pickup
        $pickUps = null;
        $mdPickUp = new Pickup();
        $pickUps = $mdPickUp->getPickUpList();

        if(!($request->input('hidden_auther') == $request->input('auther_id') && $request->input('hidden_category') == $request->input('category_id'))){
            if(isset($pickUps) && is_countable($pickUps)){
                foreach($pickUps as $pickup){
                    if($pickup->auther_id == $request->input('auther_id') && $pickup->category_id == $request->input('category_id')){
                        return redirect(route('admin.pickup.editShowForm',['pickup_id' =>$id,'status' =>'duplicate']))->withInput();
                    }                
                }
            }
        }
        
        $unique = array_unique($request->article);
        $articlesArray = null;
        $article_id = null;
        if(isset($unique) && count($unique) > 0){
            foreach($unique as $val){
                if(isset($val) && $val != null){
                    $articlesArray[] = $val;
                }
            }
            if(isset($articlesArray) && count($articlesArray) > 0){
                $article_id = join(",",$articlesArray);
            }
        }

        $mdPickUp = Pickup::where("id",$id)->first();
        $mdPickUp->name = $request->input('name');
        $mdPickUp->auther_id = $request->input('auther_id');
        $mdPickUp->category_id = $request->input('category_id');
        $mdPickUp->article_id = $article_id;
        $mdPickUp->save();

        return redirect(route('admin.pickup.list'));
        
    }


}
