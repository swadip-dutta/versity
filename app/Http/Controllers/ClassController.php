<?php

namespace App\Http\Controllers;

use App\AllClass;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Image;
use Illuminate\Support\Str;
use Intervention\Image\File as ImageFile;

class ClassController extends Controller
{
    function AllClasses(){

        $all_class = AllClass::latest()->paginate();
        $category = Category::all();
        $category_one = AllClass::where('category_id', 1)->latest()->get();
        $category_two = AllClass::where('category_id', 2)->latest()->get();
        $category_three = AllClass::where('category_id', 3)->latest()->get();

        if(Auth::user()->role_name == 1 || Auth::user()->role_name == 3 || Auth::user()->category_id == 1){
            $category_one = AllClass::where('category_id', 1)->latest()->get();
        }
        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3 || Auth::user()->category_id == 2){
            $category_two = AllClass::where('category_id', 2)->latest()->get();
        }
        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3 || Auth::user()->category_id == 3){
            $category_three = AllClass::where('category_id', 3)->latest()->get();
        }
        
        

        return view('backend.all_Class.all_class', [
            'all_class' => $all_class,
            'category' => $category,
            'category_one' => $category_one,
            'category_two' => $category_two,
            'category_three' => $category_three,
            
        ]);
    }


    function AddClasses(){
        $category = Category::all();
        return view('backend.all_Class.add_class', [
            'category' => $category
        ]);
        
    }

    function StoreClasses(Request $request){

        $request->validate([
            'thumbnail' => ['required', 'image']
        ]);

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');

            $new_location = public_path('images/')
        . Carbon::now()->format('Y/m/')
         . '/';

            File::makeDirectory($new_location, $mode = 0777, true, true);
        

            $img_ext = Str::random(10).'.'.$thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(350, 180)->save($new_location. $img_ext);

            

            AllClass::insert([
                    'title' => $request->title,
                    'summary' => $request->summary,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'link' => $request->link,
                    'thumbnail' =>$img_ext,
                    'user_id' => Auth::id(),        
                    'created_at' => Carbon::now()
                ]);

                
                return back();   
        }

       
    }
}