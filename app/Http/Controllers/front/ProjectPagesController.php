<?php

namespace App\Http\Controllers\front;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Project;
use App\Sociallink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProjectPagesController extends Controller
{
    public function index()
    {
        return view('front.project.create1',[
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),

        ]);
    }

    public function SubmitNext()
    {
        return view('front.project.create1',[
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
        ]);

    }

    public function SubmitNext1()
    {
        return view('front.project.create2',[
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'projects'=>Project::orderBy('id','desc')->take(1)->get(),


        ]);

    }
    public function SubmitNext2()
    {
        return view('front.project.create3',[
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'projects'=>Project::orderBy('id','desc')->take(1)->get(),


        ]);
    }
//    final sumbmission
    public function FinalSubmission(Request $request)
    {
        $image = $request->file('project_image');
        $imageName= time().'.'.$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);

        $project = new Project();
        $project->project_name = $request->project_name;
        $project->project_category = $request->project_category;
        $project->location = $request->location;
        $project->project_image = 'upload/'.$imageName;
        $project->save();

        return view('front.project.create2',[
           'projects'=>Project::orderBy('id','desc')->take(1)->get(),
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
        ]);




    }
    public function FinalSubmission2(Request $request)
    {

        $projects2 = Project::find($request->id);
         $projects2->short_details =  $request->short_details;
         $projects2->full_details =  $request->full_details;
         $projects2->save();
        return view('front.project.create3',[
            'projects'=>Project::orderBy('id','desc')->take(1)->get(),
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
        ]);
    }
    public function FinalSubmission3(Request $request)
    {
        $image = $request->file('details_file');
        $imageName= time().'.'.$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);

        $projects3 = Project::find($request->id);
        $projects3->project_budget = $request->project_budget;
        $projects3->details_file = 'upload/'.$imageName;
        $projects3->save();
        return redirect('/')->withSuccess('Submission Successfully!');

    }
//    admin project view
    public function ViewProject()
    {
        return view('admin.project.view',[
            'projects'=>Project::orderBy('id','desc')->get()
        ]);
    }
    public function FileDownload($id)
    {
        $fl = Project::find($id);
        return Storage::download($fl->details_file);
    }
//    admin project accept
    public function Accept($id)
    {
        $project =Project::find($id);
        $project->is_accepted=1;
        $project->save();
        return back()->withSuccess('Project Accepted!');
    }
}
