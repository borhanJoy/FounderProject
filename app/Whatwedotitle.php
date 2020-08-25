<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use DB;

class Whatwedotitle extends Model
{
    public static function saveWhatwedoTitle($request)
    {
        $whatwedo = new Whatwedotitle();
        $whatwedo->title= $request->title;
        $whatwedo->description = $request->description;
        $whatwedo->save();
    }
    public static function updateWhatwedoTitle($request)
    {
        $whatwedo = Whatwedotitle::find($request->id);
        $whatwedo->title= $request->title;
        $whatwedo->description = $request->description;
        $whatwedo->save();

    }
}
