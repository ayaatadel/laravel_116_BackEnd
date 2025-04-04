<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
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

// Route::get('/students',[StudentController::class,'getStudents'])->name('students');
// Route::get('/students/{id}',[StudentController::class,'getStudentData'])->name('studentData');
Route::get('/students',[StudentController::class,'index'])->name('students.index');
Route::get('/students/{id}',[StudentController::class,'view'])->name('students.view');
