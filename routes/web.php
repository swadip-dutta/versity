<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'FrontendController@front')->name('front');
// Route::get('/register', 'FrontendController@Register')->name('Register');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// Zoom

Route::get('zoom', 'ZoomController@ZoomList')->name('ZoomList');
Route::get('zoom-add', 'ZoomController@ZoomAdd')->name('ZoomAdd');
Route::post('zoom-post', 'ZoomController@ZoomPost')->name('ZoomPost');
Route::get('zoom-delete/{id}', 'ZoomController@ZoomDelete')->name('ZoomDelete');

// Faculty

Route::get('Faculty-list', 'HomeController@FacultyList')->name('FacultyList');
Route::get('Faculty-user-delete/{id}', 'HomeController@UserDelete')->name('UserDelete');
Route::get('Faculty-user-edit/{id}', 'HomeController@UserEdit')->name('UserEdit');
Route::post('Faculty-user-update', 'HomeController@UserUpdate')->name('UserUpdate');

// Role

Route::get('role-manager', 'RoleController@Role')->name('Role');

Route::post('role-add-to-permission', 'RoleController@RolePermission')->name('RolePermission');

Route::post('user-add-role', 'RoleController@RoleToUser')->name('RoleToUser');

Route::get('permission-change-to-user/{id}', 'RoleController@PermissionChangeToUser')->name('PermissionChangeToUser');

Route::post('permission-update-to-user', 'RoleController@PermissionUpdateToUser')->name('PermissionUpdateToUser');

// Route::get('role-manager', 'RoleController@Role')->name('Role');

// All Class Category
Route::get('view-class-category', 'CategoryController@ViewCategory')->name('ViewCategory');
Route::get('add-class-category', 'CategoryController@AddCategory')->name('AddCategory');
Route::post('Post-class-category', 'CategoryController@PostCategory')->name('PostCategory');
Route::get('edit-class-category/{id}', 'CategoryController@EditCategory')->name('EditCategory');
Route::post('update-class-category', 'CategoryController@UpdateCategory')->name('UpdateCategory');


// All Exam
Route::get('create-exam', 'ExamController@CreateExam')->name('CreateExam');
Route::post('post-exam', 'ExamController@PostExam')->name('PostExam');
Route::get('class-one-exam', 'ExamController@ClassOne')->name('ClassOne');
Route::get('class-two-exam', 'ExamController@ClassTwo')->name('ClassTwo');
Route::get('class-three-exam', 'ExamController@ClassThree')->name('ClassThree');
Route::get('class-four-exam', 'ExamController@ClassFour')->name('ClassFour');
Route::get('class-five-exam', 'ExamController@ClassFive')->name('ClassFive');


// All Class

Route::get('all-class', 'ClassController@AllClasses')->name('AllClasses');
Route::get('add-class', 'ClassController@AddClasses')->name('AddClasses');
Route::post('store-class', 'ClassController@StoreClasses')->name('StoreClasses');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
\UniSharp\LaravelFilemanager\Lfm::routes();
});

// Add Books

Route::get('add-book', 'LibraryController@AddBooks')->name('AddBooks');
Route::post('store-book', 'LibraryController@StoreBooks')->name('StoreBooks');
Route::get('all-books', 'LibraryController@AllBooks')->name('AllBooks');


// Notice

Route::get('all-notice', 'HomeController@AllNotice')->name('AllNotice');
Route::get('add-notice', 'HomeController@AddNotice')->name('AddNotice');
Route::get('edit-notice/{id}', 'HomeController@EditNotice')->name('EditNotice');
Route::post('store-notice', 'HomeController@StoreNotice')->name('StoreNotice');
Route::post('update-notice', 'HomeController@UpdateNotice')->name('UpdateNotice');