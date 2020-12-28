<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function showLoginForm() {

        // return view('Admin.Index.login');
        return view('admin.auth.login');

    }

    public function login(Request $request) {

        $credentials = $request->only(['email', 'password']);
        if(\Auth::guard("admin")->attempt($credentials)) {
            return redirect('admin/top'); // ログインしたらリダイレクト
        }

        return back()->withErrors([
            'auth' => ['認証に失敗しました']
        ]);
    }

    public function displayTop() {
        return view('admin.auth.top');
    }
}
