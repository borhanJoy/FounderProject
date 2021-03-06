<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Logotwo extends Model
{
    public  static function saveLogoTwo($request)
    {
        $image = $request->file('photo');
        $imageName= time().'.'.$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);

        $partnerImage         =  new Logotwo();
        $partnerImage->photo  = 'upload/'.$imageName;
        $partnerImage->status = $request->status;
        $partnerImage->save();

    }

    public static function updateLogoTwo($request)
    {
        $partnerImage         =   Logotwo::find($request->id);
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
