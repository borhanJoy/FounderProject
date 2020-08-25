<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Logoone extends Model
{
    public  static function saveLogoOne($request)
    {
        $image = $request->file('photo');
        $imageName= time().'.'.$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);

        $partnerImage         =  new Logoone();
        $partnerImage->photo  = 'upload/'.$imageName;
        $partnerImage->status = $request->status;
        $partnerImage->save();

    }

    public static function updateLogoOne($request)
    {
        $partnerImage         =   Logoone::find($request->id);
        $image = $request->file('photo');


        if($image)
        {
            unlink($partnerImage->photo);
            $imageName= time().'.'.$image->getClientOriginalName();
            $image->move(public_path('upload'),$imageName);
            $partnerImage->photo  = 'upload/'.$imageName;
            $partnerImage->save();
        }

        $partnerImage->status = $request->status;
        $partnerImage->save();

    }
}
