<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Auther;
use \App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Common;

class AutherController extends Controller
{
    //
    public function getList(Request $request) {

        $mdAuther = new Auther;
        $autherList = $mdAuther->getAutherList();
        $mdCategory = new Category;
        $categoryList = $mdCategory->getCategoryNameList();

        $dispData = [
            'autherList' => $autherList,
            'categoryList' => $categoryList,
        ];

        return view('admin.auther.list', $dispData);

    }
    //
    public function registForm(Request $request) {

        // $mdAuther = new Auther;
        // $autherList = $mdAuther->getAutherList();
        $mdCategory = new Category;
        $categoryList = $mdCategory->getCategoryNameList();

        $dispData = [
            // 'autherList' => $autherList,
            'categoryList' => $categoryList,
        ];

        return view('admin.auther.regist', $dispData);
    }
    //
    public function registConfirm(Request $request) {

        $validated  = $request->validate([
            'name' => 'required|unique:authers',
            'image' => 'mimes:jpg,jpeg,png,gif|unique:authers',
        ],
        [
            'name.required' => '名前を入力してください。',
            'name.unique' => 'この名前は既に登録されています。',
            'image.mimes' => '画像を設置してください。',
        ]);

        $inputData = $request->input();
        $inputData['image'] = null;

        if ($request->file('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('profile', $name);
            $inputData['image'] = $name;
            if ($request->input('profile_old') !== null 
            && $request->input('profile_old') !== $name) {
                $deleteImagePath = public_path('images/profile/');
                $deleteImageName = $request->input('profile_old');
                Common::unlinkImage($deleteImagePath,$deleteImageName);
            }

        } else if ($request->input('profile_old')) {
            $inputData['image'] = $request->input('profile_old');
        }
            
        $mdCategory = new Category;
        $categoryList = $mdCategory->getCategoryNameList();

        $dispData = [
            'inputData' => $inputData,
            'categoryList' => $categoryList,
        ];

        return view('admin.auther.confirm', $dispData);
    }
    //
    public function registInsert(Request $request) {

        $inputData = $request->input();
        $action = $request->input('action');

        if ($action !== 'submit') {
            return redirect()->route('auther.regist.form')->withInput($inputData);
        } else {
            $request->session()->regenerateToken();
            $mdAuther = new Auther;
            $mdAuther->insertAuther($inputData);
        }
        return redirect()->route('auther.list');
    }
    //
    public function editForm(Request $request) {
        $editIUd = $request->id;
        $mdAuther = new Auther;
        $autherData = $mdAuther->getAutherDataById($editIUd);
        $mdCategory = new Category;
        $categoryList = $mdCategory->getCategoryNameList();

        $dispData = [
            'autherData' => $autherData,
            'categoryList' => $categoryList,
        ];

        return view('admin.auther.edit', $dispData);
    }
    //
    public function editConfirm(Request $request) {

        $validated  = $request->validate([
            'name' => ['required',Rule::unique('authers', 'name')->whereNot('id', $request->input('id'))],
            'id' => 'required',
            'image' => ['mimes:jpg,jpeg,png,gif',Rule::unique('authers', 'image')->whereNot('id', $request->input('id'))],

        ],
        [
            'name.required' => '名前を入力してください。',
            'name.unique' => 'この名前は既に登録されています。',
            'image.mimes' => '画像を設置してください。',
        ]);

        $inputData = $request->input();
        $inputData['image'] = null;

        if ($request->file('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('profile', $name);
            $inputData['image'] = $name;

            $editIUd = $request->id;
            $mdAuther = new Auther;
            $autherData = $mdAuther->getAutherDataById($editIUd);
            
            if ($request->input('profile_old') !== null 
            && $request->input('profile_old') !== $name 
            && $request->input('profile_old') !== $autherData->image) {
                $deleteImagePath = public_path('images/profile/');
                $deleteImageName = $request->input('profile_old');
                Common::unlinkImage($deleteImagePath,$deleteImageName);
            }
        } else if ($request->input('profile_old')) {
            $inputData['image'] = $request->input('profile_old');
        }

        $mdCategory = new Category;
        $categoryList = $mdCategory->getCategoryNameList();

        $dispData = [
            'inputData' => $inputData,
            'categoryList' => $categoryList,
        ];

        return view('admin.auther.confirm', $dispData);
    }
    // //
    public function editUpdate(Request $request) {

        $inputData = $request->input();
        $action = $request->input('action');

        if ($action !== 'submit') {
            return redirect()->route('auther.edit.form', ['id'=>$inputData['id']])->withInput($inputData);
        } else {
            $request->session()->regenerateToken();
            $mdAuther = new Auther;            
            $editIUd = $inputData['id'];
            $autherData = $mdAuther->getAutherDataById($editIUd);

            if ($request->input('image') !== null 
            && $request->input('image') !== $autherData->image) {
                $deleteImagePath = public_path('images/profile/');
                $deleteImageName = $autherData->image;
                Common::unlinkImage($deleteImagePath,$deleteImageName);
            }
            $mdAuther->updateAuther($inputData);
        }
        return redirect()->route('auther.list');
    }
    // //
    public function autherDelete(Request $request) {

        $deleteIds = $request->input('delete_id');

        $request->session()->regenerateToken();
        $mdAuther = new Auther;
        $mdAuther->deleteAuther($deleteIds);
        return redirect()->route('auther.list');
    }
}
