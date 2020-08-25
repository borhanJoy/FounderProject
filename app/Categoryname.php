<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Categoryname extends Model
{
    public static function saveCategoryName($request)
    {
        $category = new Categoryname();
        $category->category = $request->category;
        $category->status = $request->status;
        $category->save();
    }
    public static function updateCategoryName($request)
    {
        $category  =  Categoryname::find($request->id);
        $category->category = $request->category;
        $category->status = $request->status;
        $category->save();

    }
}
