<?php

namespace App\Http\Controllers\front;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Logoone;
use App\Logotwo;
use App\Signup;
use App\Sociallink;
use Illuminate\Http\Request;
use Session;
use Exception;

class SignupPagesController extends Controller
{
    public function userSignUp()
    {
        return view('front.user.sign-up',[
            'logoones'=>Logoone::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'logotwos'=>Logotwo::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get()
        ]);
    }

    public function userRegistration(Request $request)
    {
        try{
            Signup::saveUser($request);
            return redirect('/');
        }catch(Exception $e){
            //if email or phone exist before in db redirect with error messages
            return back()->withSuccess('This Email Already Exists');
        }


    }
    public function userLogout(Request $request)
    {
        Session::forget('userId');
        Session::forget('userName');

        return back();

    }
//    user login
    public function userLogin()
    {
         return view('front.user.login',[
             'logoones'=>Logoone::orderBy('id','desc')->where('status',1)->take(1)->get(),
             'logotwos'=>Logotwo::orderBy('id','desc')->where('status',1)->take(1)->get(),
             'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
             'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get()
         ]);
    }
    public function userLoginPage(Request $request)
    {
        $users = Signup::where('email',$request->email)->first();
        if($users)
        {
            if (password_verify($request->password, $users->password))
            {
                Session::put('userId', $users->id);
                Session::put('userName', $users->username);
                 return redirect('/');

            }
            else
            {
                return redirect('login/user')->withSuccess('Password Invalid.');
            }

        }
        else
        {
            return redirect('login/user')->withSuccess('Email Address  Invalid.');

        }


}
}
