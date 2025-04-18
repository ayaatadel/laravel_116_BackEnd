<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // myStudents ==> table
    // protected $table="myStudents";
    // protected $primaryKey="myID";
    public $timestamps = false;
   protected $fillable=['name','email','address','gender','age','image','phone'];

}
