<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Contact extends Model
{
    public static function saveContact($request)
    {

        $contact         =  new Contact();
        $contact->title = $request->title;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->status = $request->status;
        $contact->save();

    }

    public static function updateContact($request)
    {
        $contact         =   Contact::find($request->id);
        $contact->title = $request->title;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->status = $request->status;
        $contact->save();

    }

}
