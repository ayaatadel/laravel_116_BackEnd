<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // myStudents ==> table
    // protected $table="myStudents";
    // protected $primaryKey="myID";
    public $timestamps = false;
   protected $fillable=['name','email','address','gender','age'];

}
