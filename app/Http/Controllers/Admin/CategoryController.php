<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Auther;
use \App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    //
    public function getList(Request $request) {

        $mdCategory = new Category;
        $categoryList = $mdCategory->getCategoryList();
        $mdAuther = new Auther;
        $autherList = $mdAuther->getAutherNameList();

        $dispData = [
            'autherList' => $autherList,
            'categoryList' => $categoryList,
        ];

        return view('admin.category.list', $dispData);
    }

    public function registForm(Request $request) {


        $dispData = [
        ];

        return view('admin.category.regist', $dispData);
    }
    
    public function registConfirm(Request $request) {

        $validated  = $request->validate([
            'name' => 'required|unique:categories',
        ],
        [
            'name.required' => '名前を入力してください。',
            'name.unique' => 'この名前は既に登録されています。',
        ]);

        $inputData = $request->input();

        $dispData = [
            'inputData' => $inputData,
        ];

        return view('admin.category.confirm', $dispData);
    }
    
    public function registInsert(Request $request) {

        $inputData = $request->input();
        $action = $request->input('action');

        if ($action !== 'submit') {
            return redirect()->route('category.regist.form')->withInput($inputData);
        } else {
            $request->session()->regenerateToken();
            $mdCategory = new Category;
            $mdCategory->insertCategory($inputData);
        }
        return redirect()->route('category.list');
    }
    
    public function editForm(Request $request) {
        $editIUd = $request->id;
        $mdCategory = new Category;
        $categoryData = $mdCategory->getCategoryDataById($editIUd);
        $mdAuther = new Auther;
        $autherList = $mdAuther->getAutherNameList();

        $dispData = [
            'categoryData' => $categoryData,
            'autherList' => $autherList,
        ];

        return view('admin.category.edit', $dispData);
    }
    
    public function editConfirm(Request $request) {

        $validated  = $request->validate([
            'name' => ['required',Rule::unique('categories', 'name')->whereNot('id', $request->input('id'))],
            'id' => 'required',
        ],
        [
            'name.required' => '名前を入力してください。',
            'name.unique' => 'この名前は既に登録されています。',
        ]);

        $inputData = $request->input();

        $dispData = [
            'inputData' => $inputData,
        ];

        return view('admin.category.confirm', $dispData);
    }
    
    public function editUpdate(Request $request) {

        $inputData = $request->input();
        $action = $request->input('action');

        if ($action !== 'submit') {
            return redirect()->route('category.edit.form', ['id'=>$inputData['id']])->withInput($inputData);
        } else {
            $request->session()->regenerateToken();
            $mdCategory = new Category;
            $mdCategory->updateCategory($inputData);
        }
        return redirect()->route('category.list');
    }
    
    public function categoryDelete(Request $request) {

        $deleteIds = $request->input('delete_id');

        $request->session()->regenerateToken();
        $mdCategory = new Category;
        $mdCategory->deleteCategory($deleteIds);
        return redirect()->route('category.list');
    }
}
