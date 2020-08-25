<?php

namespace App\Http\Controllers\admin;

use App\Homeslider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderPagesController extends Controller
{
//    admin home slider section
    public function createSliderSction()
    {
        return view('admin.home_slider.create',[
            'homeslides'=>Homeslider::all()
        ]);
    }
    public function addSliderSction(Request $request)
    {
        Homeslider::saveSlideImage($request);
        return back()->withSuccess('Upload Successfully.');

    }
    public function updateSliderSction(Request $request)
    {
        Homeslider::updateSliderImage($request);
        return back()->withSuccess('Update Successfully.');
    }
    public function deleteSliderSction(Request $request)
    {
        $image = Homeslider::find($request->id);
        if($image->photo)
        {
            unlink($image->photo);
        }
        $image->delete();
        return back()->withSuccess('Delete Successful.');

    }
}
