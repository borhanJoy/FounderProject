<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class Signup extends Model
{
   public static function saveUser($request)
   {
       $users = new Signup();
       if ($image = $request->file('photo')){
       $imageName=time().'.'.$image->getClientOriginalName();
       $image->move(public_path('upload'),$imageName);
           $users->photo = 'upload/'.$imageName;
       }

       $users->username = $request->username;
       $users->email = $request->email;
       $users->password = bcrypt($request->password);

       $users->save();

       Session::put('userId', $users->id);
       Session::put('userName', $users->username);
   }
}
