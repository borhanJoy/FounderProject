<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WhatwedoImage extends Model
{
    public static function saveWhatwedoImage($request)
    {
        $image = $request->file('photo');
        $imageName= time().'.'.$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);

        $partnerImage         =  new WhatwedoImage();
        $partnerImage->photo  = 'upload/'.$imageName;
        $partnerImage->title = $request->title;
        $partnerImage->status = $request->status;
        $partnerImage->save();

    }
    public static function updateWhatwedoImage($request)
    {
        $partnerImage         =   WhatwedoImage::find($request->id);
        $image = $request->file('photo');


        if($image)
        {
            unlink($partnerImage->photo);
            $imageName= time().'.'.$image->getClientOriginalName();
            $image->move(public_path('upload'),$imageName);
            $partnerImage->photo  = 'upload/'.$imageName;
            $partnerImage->save();
        }

        $partnerImage->title = $request->title;
        $partnerImage->status = $request->status;
        $partnerImage->save();

    }
}
