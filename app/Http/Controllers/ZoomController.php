<?php

namespace App\Http\Controllers;

use App\Category;
use App\zoom;
use Illuminate\Http\Request;

class ZoomController extends Controller
{
    function ZoomList(){
        return view('backend.zoom.zoom_list', [
            'zoom_one' => zoom::where('category_id', 1)->latest()->paginate(),
            'zoom_two' => zoom::where('category_id', 2)->latest()->paginate(),
            'zoom_three' => zoom::where('category_id', 3)->latest()->paginate(),
            'zoom_four' => zoom::where('category_id', 4)->latest()->paginate(),
            'zoom_five' => zoom::where('category_id', 5)->latest()->paginate(),
        ]);
    }

    function ZoomAdd(){
        $category = Category::all();

        return view('backend.zoom.zoom_add', [
            'category' => $category,
        ]);
    }


    function ZoomPost(Request $request){


        $topic = $request->topic;
        $start_date = $request->start_date;
        $start_time = $request->start_time;
        $time = $request->start_date.$request->start_time;
        $category_id = $request->category_id;

        // print_r($time);

        return view('backend.zoom.zoom_post', [
            'topic' => $topic,
            'start_date' => $start_date,
            'start_time' => $start_time,
            'time' => $time,
            'category_id' => $category_id
        ]);

    }

    function ZoomDelete($id){
        $zoom_delete = zoom::findOrFail($id);
        $zoom_delete->delete();
        return back();
    }
}