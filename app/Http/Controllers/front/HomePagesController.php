<?php

namespace App\Http\Controllers\front;

use App\Answer;
use App\Blog;
use App\Blogtitle;
use App\Categoryname;
use App\Contact;
use App\Helptitle;
use App\Homeslider;
use App\Impactimage;
use App\Impacttitle;
use App\Impactvalue;
use App\Logoone;
use App\Logotwo;
use App\Partnerimage;
use App\Partnertitle;
use App\Planet;
use App\question;
use App\Quiz;
use App\Sociallink;
use App\Weare;
use App\WhatwedoImage;
use App\Whatwedotitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePagesController extends Controller
{
    public function index()
    {
        return view('front.home.home',[
            'homeslides'=>Homeslider::where('status',1)->get(),
            'whatwetitles'=>Whatwedotitle::orderBy('id','desc')->take(1)->get(),
            'whatwedoimages'=>WhatwedoImage::orderBy('id','desc')->where('status',1)->take(5)->get(),
            'partnertitles'=>Partnertitle::orderBy('id','desc')->take(1)->get(),
            'partnerimages'=>Partnerimage::orderBy('id','desc')->where('status',1)->get(),
            'blogtitles'=>Blogtitle::orderBy('id','desc')->take(1)->get(),
            'blogs'=>Blog::orderBy('id','desc')->where('status',1)->take(3)->get(),
            'logoones'=>Logoone::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'logotwos'=>Logotwo::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'impacttitles'=>Impacttitle::orderBy('id','desc')->take(1)->get(),
            'impactimages'=>Impactimage::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'impactvalues'=>Impactvalue::orderBy('id','desc')->where('status',1)->take(4)->get(),
            'helptitles'=>Helptitle::orderBy('id','desc')->take(1)->get(),
            'planets'=>Planet::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'weares'=>Weare::orderBy('id','desc')->where('status',1)->take(1)->get()

        ]);
    }
    public function PlanetPage()
    {
        return view('front.planet.page',[
            'logoones'=>Logoone::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'logotwos'=>Logotwo::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
        ]);
    }

//    planet quiz page
    public function PlanetQuizPage()
    {
        // Create an entry in quiz table
        $quiz = new Quiz();
        $quiz->save();

        // store in session
        session()->put('quiz_id', $quiz->id);


        return view('front.planet.quiz.page',[
            'logoones'=>Logoone::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'logotwos'=>Logotwo::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'categories'=>Categoryname::orderBy('id','desc')->where('status',1)->get(),
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
        ]);
    }
    public function QuizStart($id)
    {
        // Get session value
        $quiz_id = session()->get('quiz_id');
        $quiz = Quiz::find($quiz_id);

        // Fetch the questions now where questions not in answers table
        $questions = $quiz->questions;
        $question_ids = [];
        foreach ($questions as $q){
            array_push($question_ids, $q->question_id);
        }

        $questionAvailable  = question::where('category_id', $id)
                ->whereNotIn('id', $question_ids)
                ->first();

        if(is_null($questionAvailable)){
            return view('front.planet.finished',[
                'logoones'=>Logoone::orderBy('id','desc')->where('status',1)->take(1)->get(),
                'logotwos'=>Logotwo::orderBy('id','desc')->where('status',1)->take(1)->get(),
                'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
                'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
            ]);
        }

        $single_question = question::where('category_id', $id)
            ->whereNotIn('id', $question_ids)
            ->get()
            ->random();

        return view('front.planet.quiz_start.page',[
            'logoones'=>Logoone::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'logotwos'=>Logotwo::orderBy('id','desc')->where('status',1)->take(1)->get(),
//            'quiz' => question::where('category_id',$id)->orderBy('id', 'asc')->get()->random(),
            'quiz' => $single_question,
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
        ]);

    }
    public function Quiz(Request $request)
    {

        $check = question::find($request->id);

        $answer = new Answer();
        $answer->question_id = $request->id2;
        $answer->quiz_id = session()->get('quiz_id');
        $answer->submit_ans = $request->answer;
//        dd($check->answer == $request->answer);
        if($check->answer == $request->answer  ){
            $answer->right_wrong = 1;
        } else {
            $answer->right_wrong = 0;
        }
        $answer->save();

        if($answer->right_wrong == 1)
        {
            return view('front.planet.right_ans.right',[
                'logoones'=>Logoone::orderBy('id','desc')->where('status',1)->take(1)->get(),
                'logotwos'=>Logotwo::orderBy('id','desc')->where('status',1)->take(1)->get(),
                'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
                'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
                'categories'=> $check
            ]);
        }
        else if($answer->right_wrong == 0)
        {
            return view('front.planet.wrong_ans.wrong',[
                'logoones'=>Logoone::orderBy('id','desc')->where('status',1)->take(1)->get(),
                'logotwos'=>Logotwo::orderBy('id','desc')->where('status',1)->take(1)->get(),
                'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
                'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
                'categories'=> $check
            ]);

        }


    }


}
