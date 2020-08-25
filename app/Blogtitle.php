<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use DB;

class Blogtitle extends Model
{
   public static function saveBlogtitle($request)
   {
       $blogtitle = new Blogtitle();
       $blogtitle->title = $request->title;
       $blogtitle->description = $request->description;
       $blogtitle->save();
   }
   public static function updateBlogtitle($request)
   {
       $blogtitle =  Blogtitle::find($request->id);
       $blogtitle->title = $request->title;
       $blogtitle->description = $request->description;
       $blogtitle->save();

   }
}
