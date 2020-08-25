<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Weare;
use Illuminate\Http\Request;

class WePagesController extends Controller
{
    public function createWe()
    {
        return view('admin.we.create',[
            'weares'=>Weare::all()
        ]);

    }
    public function addWe(Request $request)
    {

        Weare::saveWeare($request);
        return back()->withSuccess('Save Successfully.');

    }
    public function updateWe(Request $request)
    {
        Weare::updateWeare($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteWe(Request $request)
    {
        $sociallink = Weare::find($request->id);
        $sociallink->delete();
        return back()->withSuccess('Delete Successfully.');

    }
}
