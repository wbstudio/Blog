<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Library\Common;

class Auther extends Model
{
    use HasFactory;

    public function getAutherList()
    {
        $columnList = [
            'id',
            'name',	
            'category',	
            'image',	
            'explain',	
            'category',	
            'status',
            'delete_flg',
            'created_at',	
            'updated_at',	
        ];

        $query = DB::table('authers');
        $query->select($columnList);
        $query->where('delete_flg', 0);
        $query->orderByDesc('id');
        $aList = $query->get();

        if (isset($aList)) {
            foreach ($aList as $aData) {
                $aData->category = Common::separateVerticalBar($aData->category);
            }
        }

        return $aList;
    }

    public function insertAuther($inputData)
    {

        $query = DB::table('authers');
        $value =             [
            'name' => $inputData['name'],
            'explain' => $inputData['explain'],
            'image' => $inputData['image'],
            'delete_flg' => config('const.DELETE_FLG_OFF'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        if (isset($inputData['category'])) {
            $value['category'] = join('|', $inputData['category']);
        } 
        $query->insert($value);
    }
    
    public function getAutherDataById($id)
    {
        $columnList = [
            'id',
            'name',	
            'category',	
            'explain',	
            'image',	
            'status',
            'delete_flg',
            'created_at',	
            'updated_at',	
        ];

        $query = DB::table('authers');
        $query->select($columnList);
        $query->where('delete_flg', 0);
        $query->where('id', $id);
        $aData = $query->first();
        $aData->category = Common::separateVerticalBar($aData->category);

        return $aData;
    }

    public function updateAuther($inputData)
    {

        $value = [
            'name' => $inputData['name'],
            'explain' => $inputData['explain'],
            'image' => $inputData['image'],
            'delete_flg' => config('const.DELETE_FLG_OFF'),
            'updated_at' => now(),
        ];

        if (isset($inputData['category'])) {
            $value['category'] = join('|', $inputData['category']);
        } else {
            $value['category'] = null;
        }

        $query = DB::table('authers');
        $query->where('id', $inputData['id']);
        $query->update($value);
    }

    public function deleteAuther($deleteIds)
    {
        if (isset($deleteIds)) {
            foreach ($deleteIds as $id) {
                $query = DB::table('authers');
                $query->where('id', $id);
                $query->update(
                    [
                        'delete_flg' => config('const.DELETE_FLG_ON'),
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }

    public function getAutherNameList()
    {
        $columnList = [
            'id',
            'name',	
            'category',
            'status',
            'delete_flg',
            'created_at',	
            'updated_at',	
        ];
        $return = [];

        $query = DB::table('authers');
        $query->select($columnList);
        $query->where('delete_flg', 0);
        $aList = $query->get();

        if (isset($aList)) {
            foreach ($aList as $aData) {
                $return[$aData->id] = $aData->name;
            }
        }

        return $return;
    }

    public function getAutherDataList()
    {
        $columnList = [
            'au.id',
            'au.name',	
            'au.category',
        ];
        $return = [];
        $query = DB::table('authers as au');
        $query->select($columnList);
        $query->where('delete_flg', 0);
        $aList = $query->get();

        if (isset($aList)) {
            foreach ($aList as $aData) {
                $return[$aData->id]['name'] = $aData->name;
                $return[$aData->id]['category'] = $aData->category;
            }
        }
        return $return;
    }

    public function chkExistAutherListByImage($image)
    {
        $query = DB::table('authers');
        $query->where('delete_flg', 0);
        $query->where('image', $image);
        $return = $query->count();

        return $return;
    }
}
