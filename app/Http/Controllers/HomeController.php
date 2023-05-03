<?php

namespace App\Http\Controllers;

use App\AllClass;
use App\Category;
use App\notice;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Library;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $notice = notice::all();
        $all_class = AllClass::limit(3)->get();
        $all_books = Library::limit(3)->get();

        $all_exam_class = AllClass::limit(4)->get();
        $category = Category::all();
        if(Auth::user()->role_name == 1 || Auth::user()->role_name == 3 || Auth::user()->category_id == 1){
             AllClass::where('category_id', 1)->latest()->get();
        }
        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3 || Auth::user()->category_id == 1){
            AllClass::where('category_id', 2)->latest()->get();
        }
        if (Auth::user()->role_name == 1 || Auth::user()->role_name == 3 || Auth::user()->category_id == 1){
            AllClass::where('category_id', 3)->latest()->get();
        }




        return view('backend.dashboard', [
            'notice' => $notice,
            'all_exam_class' => $all_exam_class,
            'category' => $category,
            'all_class' => $all_class,
            'all_books' => $all_books,
        ]);
    }

    
    function FacultyList(){

        $member = User::paginate();

        return view('backend.faculty.faculty_member', [
            'member' => $member
        ]);
    }


    function UserDelete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }

    function UserEdit($id){

        $users = User::where('id', $id)->first();

        return view('backend.faculty.user_edit', [
            'users' => $users
        ]);
    }


    function UserUpdate(Request $request){
        $user = User::findOrFail($request->user_id);

        if ($request->hasFile('images')) {
            $image = $request->file('images');
            
            $ext = Str::random(10).'.'.$image->getClientOriginalExtension();

            $old_img_location = public_path('Pro_images/'. $user->id . '/'. $user->images);
            if (file_exists($old_img_location)) {
                unlink($old_img_location);
            }

            $new_location = public_path('Pro_images/')
            . $user->id . '/';

                File::makeDirectory($new_location, $mode = 0777, true, true);

                Image::make($image)->resize(80, 80)->save($new_location. $ext);

        

            $user->images = $ext;
        }




            $user->name = $request->name;
            $user->email = $request->email;

            $user->save();

            return "User Update Successfull";
    }

    function AllNotice(){

        return view('backend.notice.notice', [
            'notice' => notice::paginate()
        ]);
    }


    function AddNotice(){

        return view('backend.notice.add-notice', [
            'category' => Category::all()
        ]);
    }

    function StoreNotice(Request $request){

        

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');

            $thumbnail = $request->file('thumbnail');
            $img_ext = Str::random(10).'.'.$thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(1004, 342)->save(public_path('images/'. $img_ext));
            

            notice::insert([
                    'title' => $request->title,
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

    function EditNotice($id){

        $notice = notice::where('id', $id)->first();
        $category = Category::all();

        return view('backend.notice.edit-notice', [
            'notice' => $notice,
            'category' => $category
        ]);
    }

    function UpdateNotice(Request $request){
        $notice_u = notice::findOrFail($request->notice_id);

        if ($request->hasFile('thumbnail')) {
            

            $old_img_location = public_path('images/' . $notice_u->thumbnail);

            if (file_exists($old_img_location)) {
                unlink($old_img_location);
            }

            $thumbnail = $request->file('thumbnail');

            $thumbnail = $request->file('thumbnail');
            $img_ext = Str::random(10).'.'.$thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->resize(1004, 342)->save(public_path('images/'. $img_ext));

        

            $notice_u->thumbnail = $img_ext;
        }


        $notice_u->title = $request->title;
        $notice_u->description = $request->description;
        $notice_u->category_id = $request->category_id;
        $notice_u->link = $request->link;
        $notice_u->thumbnail =$img_ext;
        $notice_u->user_id = Auth::id();
        $notice_u->save();


        return back()->with('n_update', "Update Successfull");
    

    }
}
