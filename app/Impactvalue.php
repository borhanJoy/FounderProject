<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Impactvalue extends Model
{
    public static function saveImpactValue($request)
    {
        $value = new Impactvalue();
        $value->icon = $request->icon;
        $value->color = $request->color;
        $value->title = $request->title;
        $value->value = $request->value;
        $value->status = $request->status;
        $value->save();

    }
    public static function updateImpactValue($request)
    {
        $value      =  Impactvalue::find($request->id);
        $value->icon = $request->icon;
        $value->color = $request->color;
        $value->title = $request->title;
        $value->value = $request->value;
        $value->status = $request->status;
        $value->save();

    }
}
