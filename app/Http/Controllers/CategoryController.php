<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function ViewCategory(){

        return view('backend.category.view-category', [
            'categories' => Category::paginate()
        ]);
    }


    function AddCategory(){
        
        return view('backend.category.add-category');
    }

    function PostCategory(Request $request){

        Category::insert([
            'category_name' => $request->category_name,
            'slug' => $request->slug,
            'created_at' => Carbon::now()
        ]);

        // $category = Category::findOrFail($request->category_id);
        return back();
    }

    function EditCategory($id){
        $category_edit = Category::findOrFail($id);
        return view('backend.category.edit_category', [
            'category_edit' => $category_edit
        ]);
    }

    function UpdateCategory(Request $request){
        $category_up = Category::findOrFail($request->category_id);
        $category_up->category_name = $request->category_name;
        $category_up->slug = $request->slug;
        $category_up->save();
        return back();

    }
}
