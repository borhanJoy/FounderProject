<?php

namespace App\Http\Controllers\admin;

use App\Partnerimage;
use App\Partnertitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerPagesController extends Controller
{
//    admin partner Title
    public function index()
    {
        return view('admin.partner.create',[
            'titles' => Partnertitle::all()
        ]);

    }
    public function addParterTitle(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        $title = new Partnertitle();
        $title->title = $request->title;
        $title->save();
        return back()->withSuccess('Save Successful.');

    }
    public function updateParterTitle(Request $request)
    {
        $title = Partnertitle::find($request->id);
        $title->title = $request->title;
        $title->save();
        return back()->withSuccess('Update Successful.');

    }

    public function deleteParterTitle(Request $request)
    {
        $title = Partnertitle::find($request->id);
        $title->delete();
        return back()->withSuccess('Delete Successful.');

    }
//   admin  partner Image
    public function createPartnerImage()
    {
        return view('admin.partner.image.create',[
            'images'=>Partnerimage::all()
        ]);
    }
    public function addPartnerImage(Request $request)
    {
        Partnerimage::savePartnerImage($request);
        return back()->withSuccess('Upload Successful.');


    }

    public function updatePartnerImage(Request $request)
    {
        Partnerimage::updatePartnerImage($request);
        return back()->withSuccess('Update Successful.');

    }

    public function deletePartnerImage(Request $request)
    {
        $image = Partnerimage::find($request->id);
        if($image->photo)
        {
            unlink($image->photo);
        }
        $image->delete();
        return back()->withSuccess('Delete Successful.');

    }
}
