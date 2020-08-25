<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Logoone;
use App\Logotwo;
use Illuminate\Http\Request;

class LogoPagesController extends Controller
{
//    admin logo one
    public function createLogoOne()
    {
        return view('admin.logo_one.create',[
            'logoones'=>Logoone::all()
        ]);

    }
    public function addLogoOne(Request $request)
    {
        Logoone::saveLogoOne($request);
        return back()->withSuccess('Upload Successfully.');

    }
    public function updateLogoOne(Request $request)
    {
        Logoone::updateLogoOne($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteLogoOne(Request $request)
    {
        $image = Logoone::find($request->id);
        if($image->photo)
        {
            unlink($image->photo);
        }
        $image->delete();
        return back()->withSuccess('Delete Successful.');


    }
//    admin logo two
    public function createLogoTwo()
    {
        return view('admin.logo_two.create',[
            'logoones'=>Logotwo::all()
        ]);

    }
    public function addLogoTwo(Request $request)
    {
        Logotwo::saveLogoTwo($request);
        return back()->withSuccess('Upload Successfully.');

    }
    public function updateLogoTwo(Request $request)
    {
        Logotwo::updateLogoTwo($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteLogoTwo(Request $request)
    {
        $image = Logotwo::find($request->id);
        if($image->photo)
        {
            unlink($image->photo);
        }
        $image->delete();
        return back()->withSuccess('Delete Successful.');


    }
}
