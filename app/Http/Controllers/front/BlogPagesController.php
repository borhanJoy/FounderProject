<?php

namespace App\Http\Controllers\front;

use App\Blog;
use App\Comment;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Logoone;
use App\Logotwo;
use App\Sociallink;
use Illuminate\Http\Request;
use DB;

class BlogPagesController extends Controller
{
    public function index()
    {
        return view('front.blog.blog');
    }
    public function blogDetails($id,$title)
    {
        $blogs = Blog::find($id);
        return view('front.blog.blog',[

            'blogs'=>$blogs,
            'comments'=>DB::table('comments')
                        ->join('signups','comments.user_id','=','signups.id')
                        ->select('comments.*','signups.username','signups.photo')
                        ->where('comments.blog_id',$id)
                        ->orderBy('comments.id','desc')
                        ->get(),
            'logoones'=>Logoone::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'logotwos'=>Logotwo::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
        ]);
    }
//    blog comments
    public function blogComment(Request $request)
    {
        $comment = new Comment();
        $comment->user_id = $request->id;
        $comment->blog_id = $request->blog_id;
        $comment->comment = $request->comment;
        $comment->save();
        return back()->withSuccess('Your Comment Successful.');


    }
//    all blog
    public function BlogPage()
    {
        return view('front.blog.all_blog',[
            'logoones'=>Logoone::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'logotwos'=>Logotwo::orderBy('id','desc')->where('status',1)->take(1)->get(),
            'blogs'=>Blog::orderBy('id','desc')->where('status',1)->get(),
            'socials'=>Sociallink::orderBy('id','asc')->where('status',1)->get(),
            'contacts'=>Contact::orderBy('id','desc')->where('status',1)->take(1)->get(),
        ]);
    }
}
