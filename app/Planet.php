<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Planet extends Model
{
    public static function savePlanet($request)
    {
        $image = $request->file('photo');
        $imageName= time().'.'.$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);

        $planet         =  new Planet();
        $planet->title = $request->title;
        $planet->subtitle = $request->subtitle;
        $planet->photo  = 'upload/'.$imageName;
        $planet->icon = $request->icon;
        $planet->button_txt = $request->button_txt;
        $planet->status = $request->status;
        $planet->save();

    }
    public static function updatePlanet($request)
    {
        $planet         =   Planet::find($request->id);
        $image = $request->file('photo');


        if($image)
        {
            unlink($planet->photo);
            $imageName= time().'.'.$image->getClientOriginalName();
            $image->move(public_path('upload'),$imageName);
            $planet->photo  = 'upload/'.$imageName;
            $planet->save();
        }

        $planet->title = $request->title;
        $planet->subtitle = $request->subtitle;
        $planet->icon = $request->icon;
        $planet->button_txt = $request->button_txt;
        $planet->status = $request->status;
        $planet->save();

    }
}
