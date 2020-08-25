<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Weare extends Model
{
    public static function saveWeare($request)
    {
        $sociallink = new Weare();
        $sociallink->title = $request->title;
        $sociallink->short_description = $request->short_description;
        $sociallink->description = $request->description;
        $sociallink->status = $request->status;
        $sociallink->save();
    }

    public static function updateWeare($request)
    {
        $sociallink =  Weare::find($request->id);

        $sociallink->title = $request->title;
        $sociallink->short_description = $request->short_description;
        $sociallink->description = $request->description;
        $sociallink->status = $request->status;
        $sociallink->save();

    }
}
