<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class question extends Model
{
    public static function saveQuestion($request)
    {
        $image = $request->file('photo');
        $imageName= time().'.'.$image->getClientOriginalName();
        $image->move(public_path('upload'),$imageName);

        $question = new question();
        $question->category_id= $request->category_id;
        $question->question_name= $request->question_name;
        $question->option_one= $request->option_one;
        $question->option_two= $request->option_two;
        $question->option_three= $request->option_three;
        $question->answer= $request->answer;
        $question->suggestion= $request->suggestion;
        $question->photo= 'upload/'.$imageName;
        $question->status= $request->status;
        $question->save();
    }
    public static function updateQuestion($request)
    {
        $question         =   question::find($request->id);
        $image = $request->file('photo');


        if($image)
        {
            unlink($question->photo);
            $imageName= time().'.'.$image->getClientOriginalName();
            $image->move(public_path('upload'),$imageName);
            $question->photo  = 'upload/'.$imageName;
            $question->save();
        }

        $question->category_id= $request->category_id;
        $question->question_name= $request->question_name;
        $question->option_one= $request->option_one;
        $question->option_two= $request->option_two;
        $question->option_three= $request->option_three;
        $question->answer= $request->answer;
        $question->suggestion= $request->suggestion;
        $question->status= $request->status;
        $question->save();;

    }
}
