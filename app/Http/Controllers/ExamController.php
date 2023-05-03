<?php

namespace App\Http\Controllers;

use App\Category;
use App\create_exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    function CreateExam(){

        return view('backend.exam.create-exam', [
            'category' => Category::all(),
        ]);
    }


    function PostExam(Request $request){
        $exm = new create_exam;
        $exm->title = $request->title;
        $exm->description = $request->description;
        $exm->user_id = Auth::id();
        $exm->role_id = $request->role_id;
        $exm->category_id = $request->category_id;
        $exm->youtube_link = $request->youtube_link;
        $exm->exam_link = $request->exam_link;
        $exm->google_class_join_code = $request->google_class_join_code;
        $exm->save();
        return back()->with('exam', "Exam Post Successfull");
    }


    function ClassOne(){
        if(Auth::user()->role_name == 1 || Auth::user()->category_id == 1){
            $class_one = create_exam::where('category_id', 1)->get();
            return view('backend.exam.class-one', [
            'class_one' => $class_one,
        ]);
        }
        else{
            return back();
        }
    }

    function ClassTwo(){
        if(Auth::user()->role_name == 1 || Auth::user()->category_id == 2){
            $class_two = create_exam::where('category_id', 2)->get();
            return view('backend.exam.class-two', [
            'class_two' => $class_two,
        ]);
        }
        else{
            return back();
        }
    }

    function ClassThree(){
        if(Auth::user()->role_name == 1 || Auth::user()->category_id == 3){
            $class_three = create_exam::where('category_id', 3)->get();
            return view('backend.exam.class-three', [
            'class_three' => $class_three,
        ]);
        }
        else{
            return back();
        }
    }

    function ClassFour(){
        if(Auth::user()->role_name == 1 || Auth::user()->category_id == 4){
        $class_four = create_exam::where('category_id', 4)->get();
        return view('backend.exam.class-four', [
            'class_four' => $class_four,
        ]);
        }
        else{
            return back();
        }
    }

    function ClassFive(){
        if(Auth::user()->role_name == 1 || Auth::user()->category_id == 5){
        $class_five = create_exam::where('category_id', 5)->get();
        return view('backend.exam.class-five', [
            'class_five' => $class_five,
        ]);
    }
    else{
        return back();
    }
    }
}
