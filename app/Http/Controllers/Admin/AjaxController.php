<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Auther;

class AjaxController extends Controller
{
    //
    public function deleteProfileImage($image) {
        if ($image == null) {
            return false;
        }
        $mdAuther = new Auther;
        $autherList = $mdAuther->chkExistAutherListByImage($image);
        return $autherList;
    }
}
