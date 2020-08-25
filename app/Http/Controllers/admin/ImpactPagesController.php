<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Impactimage;
use App\Impacttitle;
use App\Impactvalue;
use Illuminate\Http\Request;

class ImpactPagesController extends Controller
{
//    admin impact title
    public function createImpacttitle()
    {
        return view('admin.impact.title.create',[
            'impacttitles'=>Impacttitle::all()
        ]);
    }
    public function addImpacttitle(Request $request)
    {
        Impacttitle::saveImpacttitle($request);
        return back()->withSuccess('Save Successfully.');
    }
    public function updateImpacttitle(Request $request)
    {
        Impacttitle::updateImpacttitle($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteImpacttitle(Request $request)
    {
        $impacttitle = Impacttitle::find($request->id);
        $impacttitle->delete();
        return back()->withSuccess('Delete Successfully.');
    }
//    admin impact bg img
    public function createImpactImage()
    {
        return view('admin.impact.image.create',[
            'impactimages'=>Impactimage::all()
        ]);
    }
    public function addImpactImage(Request $request)
    {
        Impactimage::saveImpactImage($request);
        return back()->withSuccess('Save Successfully.');
    }
    public function updateImpactImage(Request $request)
    {
        Impactimage::updateImpactImage($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteImpactImage(Request $request)
    {
        $impacttitle = Impactimage::find($request->id);
        if ($impacttitle->photo)
        {
            unlink($impacttitle->photo);
        }
        $impacttitle->delete();
        return back()->withSuccess('Delete Successfully.');
    }
//    admin impact value
    public function createImpactValue()
    {
        return view('admin.impact.value.create',[
            'impactvalues'=>Impactvalue::all()
        ]);
    }
    public function addImpactValue(Request $request)
    {
        Impactvalue::saveImpactValue($request);
        return back()->withSuccess('Save Successfully.');
    }
    public function updateImpactValue(Request $request)
    {
        Impactvalue::updateImpactValue($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteImpactValue(Request $request)
    {
        $impacttitle = Impactvalue::find($request->id);

        $impacttitle->delete();
        return back()->withSuccess('Delete Successfully.');
    }
}
