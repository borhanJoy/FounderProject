<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Blogtitle;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class BlogPagesController extends Controller
{
//    admin home blog headline
   public function createBlogtitle()
   {
       return view('admin.blog.title.create',[
           'blogtitles'=>Blogtitle::all()
       ]);
   }
   public function addBlogtitle(Request $request)
   {
       Blogtitle::saveBlogtitle($request);
       return back()->withSuccess('Save Successfully.');
   }
   public function updateBlogtitle(Request $request)
   {
       Blogtitle::updateBlogtitle($request);
       return back()->withSuccess('Update Successfully.');

   }
   public function deleteBlogtitle(Request $request)
   {
       $blogtitle = Blogtitle::find($request->id);
       $blogtitle->delete();
       return back()->withSuccess('Delete Successfully.');
   }
//   admin add blog

    public function createBlog()
    {
        return view('admin.blog.blog.create',[
            'blogs'=>Blog::all()
        ]);
    }
    public function addBlog(Request $request)
    {
        Blog::saveBlog($request);
        return back()->withSuccess('Save Successfully.');
    }
    public function updateBlog(Request $request)
    {
        Blog::updateBlog($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteBlog(Request $request)
    {
        $blog = Blog::find($request->id);
        $blog->delete();
        return back()->withSuccess('Delete Successfully.');
    }
//    admin manage blog comments
    public function manageComments()
    {
        return view('admin.blog.manage.create',[
            'comments'=>DB::table('comments')
                ->join('signups','comments.user_id','=','signups.id')
                ->join('blogs','comments.blog_id','=','blogs.id')
                ->select('comments.*','signups.username','signups.photo','blogs.title')
                ->orderBy('comments.id','desc')
                ->get(),
        ]);
    }
//    admin delete blog comments
    public function deleteComments(Request $request)
    {
        $delete_comments = Comment::find($request->id);
        $delete_comments->delete();
        return back()->withSuccess('Delete Successfully.');
    }

}
