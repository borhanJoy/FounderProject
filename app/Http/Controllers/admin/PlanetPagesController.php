<?php

namespace App\Http\Controllers\admin;

use App\Categoryname;
use App\Http\Controllers\Controller;
use App\Planet;
use App\question;
use Illuminate\Http\Request;
use DB;
class PlanetPagesController extends Controller
{
    //admin my planet
    public function createPlanet()
    {
        return view('admin.planet.create',[
            'planets'=>Planet::all()
        ]);
    }
    public function addPlanet(Request $request)
    {
        Planet::savePlanet($request);
        return back()->withSuccess('Save Successfully.');

    }
    public function updatePlanet(Request $request)
    {
        Planet::updatePlanet($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deletePlanet(Request $request)
    {
        $planet = Planet::find($request->id);
        if ($planet->photo)
        {
            unlink($planet->photo);
        }
        $planet->delete();
        return back()->withSuccess('Delete Successfully.');

    }
//    admin add category
    public function createCategory()
    {
        return view('admin.planet.category.create',[
            'categories'=>Categoryname::all()
        ]);
    }
    public function addCategory(Request $request)
    {
        Categoryname::saveCategoryName($request);
        return back()->withSuccess('Save Successfully.');

    }
    public function updateCategory(Request $request)
    {
        Categoryname::updateCategoryName($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteCategory(Request $request)
    {
        $category = Categoryname::find($request->id);
        $category->delete();
        return back()->withSuccess('Delete Successfully.');

    }
//    create question
    public function createQuestion()
    {
        $question = DB::table('questions')
            ->join('categorynames','questions.category_id','=','categorynames.id')
            ->select('questions.*','categorynames.category')
            ->get();
        return view('admin.planet.question.create',[
//            'categories'=>Categoryname::all(),
            'categorynames'=>Categoryname::where('status',1)->get(),
            'questions'=>$question
        ]);
    }
    public function addQuestion(Request $request)
    {
        question::saveQuestion($request);
        return back()->withSuccess('Save Successfully.');

    }
    public function updateQuestion(Request $request)
    {
        question::updateQuestion($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteQuestion(Request $request)
    {
        $question = question::find($request->id);
        if($question->photo)
        {
            unlink($question->photo);
        }
        $question->delete();
        return back()->withSuccess('Delete Successfully.');

    }

}
