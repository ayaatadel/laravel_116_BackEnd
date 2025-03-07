<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users', function () {
    $users = [
        [
            "name" => "mec",
            "id" => 1,
            "age"=>24
        ],
        [
            "name" => "yousef",
            "id" => 2,
            "age"=>24
        ],

    ];
    // return $users;
    return view('allusers',["users"=>$users]);// view==> key
});

Route::get('/users/{id}', function ($id) {
    $users = [
        [
            "name" => "mec",
            "id" => 1
        ],
        [
            "name" => "yousef",
            "id" => 2
        ],
        [
            "name" => "test",
            "id" => 3
        ],

    ];
    if ($id < count($users)) {
        // var_dump($id+1);
        // exit;
        return $users[$id];
        // return $users[$id];
    } else {
        // return "404 NotFound";
        // return abort(404,"NOT FOUND USER");
        return view('error');
    }
})->where('id','[0-9]+');
