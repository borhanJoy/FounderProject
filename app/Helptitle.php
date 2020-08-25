<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Helptitle extends Model
{
    public static function saveHelptitle($request)
    {
        $helptitle = new Helptitle();
        $helptitle->title = $request->title;
        $helptitle->description = $request->description;
        $helptitle->save();
    }
    public static function updateHelptitle($request)
    {
        $helptitle =  Helptitle::find($request->id);
        $helptitle->title = $request->title;
        $helptitle->description = $request->description;
        $helptitle->save();

    }
}
