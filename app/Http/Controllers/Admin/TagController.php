<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Admin\Tag;

class TagController extends Controller
{
    //
    public function getList() {
        //DAO
        $mdTag = new Tag();
        $tagList = $mdTag->getTagList();

        return view('admin.tag.list', 
                    compact(
                        'tagList',
                    )
                );
    }

    public function regist(Request $request) {

        /*
        * バリデーション
        */
        $this->validate($request, [
            'name' => 'required',
            ]);
        //DAO
        $Tag = new Tag();

        $Tag->name = $request->input('name');
        $Tag->delete_flag = 0;
        $Tag->status = 0;

        $Tag->save();

        return redirect('admin/tag/list');
    }

    public function delete(Request $request) {


        $deleteTagArray = $request->input("delete");
        //DAO
        $Tag = new Tag();
        if(isset($deleteTagArray) && count($deleteTagArray) > 0){
            foreach($deleteTagArray as $deleteTag){
                $Tag = Tag::where("id",$deleteTag)->first();
                $Tag->delete_flag = 1;
                $Tag->save();
            }
        }

        return redirect('admin/tag/list');
    }
    public function edit($id,$name) {

        //DAO
        $Tag = new Tag();
        $Tag = Tag::where("id",$id)->first();
        $Tag->name = $name;
        $Tag->save();

         // メールを送信する
         return response()->json([
            'result' => true
        ]);
    }

}
