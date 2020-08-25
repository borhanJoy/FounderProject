<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Homeslider extends Model
{
    public static function saveSlideImage($request)
    {
        $image = $request->file('photo');
        $imageName= time().'.'.$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);

        $homeslider         =  new Homeslider();
        $homeslider->photo  = 'upload/'.$imageName;
        $homeslider->title = $request->title;
        $homeslider->slug = $request->slug;
        $homeslider->status = $request->status;
        $homeslider->save();

    }
    public static function updateSliderImage($request)
    {
        $homeslider         =   Homeslider::find($request->id);
        $image = $request->file('photo');


        if($image)
        {
            unlink($homeslider->photo);
            $imageName= time().'.'.$image->getClientOriginalName();
            $image->move(public_path('upload'),$imageName);
            $homeslider->photo  = 'upload/'.$imageName;
            $homeslider->save();
        }

        $homeslider->title = $request->title;
        $homeslider->slug = $request->slug;
        $homeslider->status = $request->status;
        $homeslider->save();

    }
}
