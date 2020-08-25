<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Sociallink extends Model
{
    public static function saveSocialLink($request)
    {
        $sociallink = new Sociallink();
        $sociallink->title = $request->title;
        $sociallink->link = $request->link;
        $sociallink->icon = $request->icon;
        $sociallink->status = $request->status;
        $sociallink->save();
    }

    public static function updateSocialLink($request)
    {
        $sociallink =  Sociallink::find($request->id);

        $sociallink->title = $request->title;
        $sociallink->link = $request->link;
        $sociallink->icon = $request->icon;
        $sociallink->status = $request->status;
        $sociallink->save();

    }
}
