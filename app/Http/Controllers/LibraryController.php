<?php

namespace App\Http\Controllers;

use App\Category;
use App\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Image;
use Illuminate\Support\Str;

class LibraryController extends Controller
{
    function AddBooks(){

        $category = Category::all();
        return view('backend.books.add-books', [
            'category' => $category
        ]);
    }


    function StoreBooks(Request $request){

        $request->validate([
            'thumbnail' => ['required', 'image']
        ]);

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');

            $new_location = public_path('books/')
        . Carbon::now()->format('Y/m/')
         . '/';

            File::makeDirectory($new_location, $mode = 0777, true, true);
        

            $img_ext = Str::random(10).'.'.$thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(218, 345)->save($new_location. $img_ext);

            

            Library::insert([
                    'title' => $request->title,
                    'summary' => $request->summary,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'link' => $request->link,
                    'thumbnail' => $img_ext,
                    'user_id' => Auth::id(),    
                    'created_at' => Carbon::now()
                ]);

                
                return back();   
        }
    }


    function AllBooks(){

        return view('backend.books.all_books', [
            'category_one' => Library::where('category_id', 1)->latest()->get(),
            'category_two' => Library::where('category_id', 2)->latest()->get(),
            'category_three' => Library::where('category_id', 3)->latest()->get(),
        ]);
    }


}
