<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\WhatwedoImage;
use App\Whatwedotitle;
use Illuminate\Http\Request;

class WhatwedoPagesController extends Controller
{
//    admin what we do title
   public function createWhatwedoTitle()
   {
       return view('admin.whatwedo.title.create',[
           'whats'=>Whatwedotitle::all()
       ]);
   }

    public function addWhatwedoTitle(Request $request)
    {
        Whatwedotitle::saveWhatwedoTitle($request);
        return back()->withSuccess('Save Successful.');

    }
    public function updateWhatwedoTitle(Request $request)
    {
        Whatwedotitle::updateWhatwedoTitle($request);
        return back()->withSuccess('Update Successful.');
    }
    public function deleteWhatwedoTitle(Request $request)
    {
        $what = Whatwedotitle::find($request->id);
        $what->delete();
        return back()->withSuccess('Delete Successful.');
    }
//    admin what we do image
    public function createWhatwedoImage()
    {
        return view('admin.whatwedo.image.create',[
            'images'=>WhatwedoImage::all()
        ]);
    }
    public function addWhatwedoImage(Request $request)
    {
        WhatwedoImage::saveWhatwedoImage($request);
        return back()->withSuccess('Upload Successful.');


    }

    public function updateWhatwedoImage(Request $request)
    {
        WhatwedoImage::updateWhatwedoImage($request);
        return back()->withSuccess('Update Successful.');

    }

    public function deleteWhatwedoImage(Request $request)
    {
        $image = WhatwedoImage::find($request->id);
        if($image->photo)
        {
            unlink($image->photo);
        }
        $image->delete();
        return back()->withSuccess('Delete Successful.');

    }
}
