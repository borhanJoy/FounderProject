<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Impacttitle extends Model
{
    public static function saveImpacttitle($request)
    {
        $blogtitle = new Impacttitle();
        $blogtitle->title1 = $request->title1;
        $blogtitle->title2 = $request->title2;
        $blogtitle->save();
    }
    public static function updateImpacttitle($request)
    {
        $blogtitle =  Impacttitle::find($request->id);
        $blogtitle->title1 = $request->title1;
        $blogtitle->title2 = $request->title2;
        $blogtitle->save();

    }
}
