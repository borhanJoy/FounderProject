<?php

namespace App\Http\Controllers\admin;

use App\Helptitle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelpPagesController extends Controller
{
//    admin how can help
    public function createHelpTitle()
    {
        return view('admin.help.title.create',[
            'helptitles'=>Helptitle::all()
        ]);
    }
    public function addHelpTitle(Request $request)
    {
        Helptitle::saveHelptitle($request);
        return back()->withSuccess('Save Successfully.');
    }
    public function updateHelpTitle(Request $request)
    {
        Helptitle::updateHelptitle($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteHelpTitle(Request $request)
    {
        $helptitle = Helptitle::find($request->id);
        $helptitle->delete();
        return back()->withSuccess('Delete Successfully.');
    }
}
