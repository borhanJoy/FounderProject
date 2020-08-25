<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Blog extends Model
{
    public static function saveBlog($request)
    {
        $image = $request->file('photo');
        $imageName= time().'.'.$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);

        $blog         =  new Blog();
        $blog->photo  = 'upload/'.$imageName;
        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->status = $request->status;
        $blog->save();

    }
    public static function updateBlog($request)
    {
        $blog         =   Blog::find($request->id);
        $image = $request->file('photo');


        if($image)
        {
            unlink($blog->photo);
            $imageName= time().'.'.$image->getClientOriginalName();
            $image->move(public_path('upload'),$imageName);
            $blog->photo  = 'upload/'.$imageName;
            $blog->save();
        }

        $blog->title = $request->title;
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->status = $request->status;
        $blog->save();

    }
}
