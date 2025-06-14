<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;


// Route::get('/users', function () {
//     $users = [
//         [
//             "name" => "mec",
//             "id" => 1,
//             "age"=>24
//         ],
//         [
//             "name" => "yousef",
//             "id" => 2,
//             "age"=>24
//         ],

//     ];
//     // return $users;
//     return view('allusers',["users"=>$users]);// view==> key
// });

// Route::get('/users/{id}', function ($id) {
//     $users = [
//         [
//             "name" => "mec",
//             "id" => 1
//         ],
//         [
//             "name" => "yousef",
//             "id" => 2
//         ],
//         [
//             "name" => "test",
//             "id" => 3
//         ],

//     ];
//     if ($id < count($users)) {
//         // var_dump($id+1);
//         // exit;
//         return $users[$id];
//         // return $users[$id];
//     } else {
//         // return "404 NotFound";
//         // return abort(404,"NOT FOUND USER");
//         return view('error');
//     }
// })->where('id','[0-9]+');


/**
 * laravel ==> mvc ==> model view controller
 * model ==> database==> handle connection ==>.env ==> carditioals
 * craditionalias ==> dbname , host , user , password
 *
 *
 * connection DB ==> table ==> user ==> run
 * php artisan migrate
 *
 * logic ==> get all users ==> controller ==> app => http=> controller
 *
 * ===> php artisan make:controller StudentController
 * DB ==> table , relation ==> model
 * =============> php artisan make model Student
 * Front ==> View  ==> resources ==> view
 * Migrations ==> Structure
 *
 *=====> https://laravel.com/docs/12.x/controllers#main-content
 * Name==> Controller ==> StudentController
 * model ==> singular ==> Student
 * table ==> Pluralr ==> students
 */
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome')->name('home');

// Route::get('/students',[StudentController::class,'getStudents'])->name('students');
// Route::get('/students/{id}',[StudentController::class,'getStudentData'])->name('studentData');
Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
Route::post('/students/store',[StudentController::class,'store'])->name('students.store');
Route::get('/students',[StudentController::class,'index'])->name('students.index');
Route::get('/students/{id}',[StudentController::class,'view'])->name('students.view');
Route::delete('/students/{id}',[StudentController::class,'destroy'])->name('students.destroy');
Route::get('/students/update/{id}',[StudentController::class,'update'])->name('students.update');
Route::put('/student/edit/{id}',[StudentController::class,'edit'])->name('students.edit');


Route::resource('/tracks',TrackController::class);


/**
 *
 *
*  method in route     url                      route name        method in controller
  PUT             student/edit/{id} ............ students.edit › StudentController@edit
  GET|HEAD        students ...................  students.index › StudentController@index
  GET|HEAD        students/create ...........   students.create › StudentController@create
  POST            students/store .............  students.store › StudentController@store
  GET|HEAD        students/update/{id} .............. students.update › StudentController@update
  GET|HEAD        students/{id} ................ students.view › StudentController@view
  DELETE          students/{id} ................ students.destroy › StudentController@destroy
  GET|HEAD        tracks .................        tracks.index › StudentController@index
  POST            tracks ....................... tracks.store › StudentController@store
  GET|HEAD        tracks/create .............. tracks.create › StudentController@create
  GET|HEAD        tracks/{track} ................. tracks.show › StudentController@show
  PUT|PATCH       tracks/{track} ............. tracks.update › StudentController@update
  DELETE          tracks/{track} ............. tracks.destroy › StudentController@destroy
  GET|HEAD        tracks/{track}/edit ............ tracks.edit › StudentController@edit

 */
