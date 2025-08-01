<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    //
    use HasFactory;
    public $timestamps = false;
    protected $fillable=["name","logo"];

    // students , tracks (one to many ) ===> student can assign in one track , and track has many students



          //    1         1
    // student ===> track
   //      m             1


    function students()  // realation
    {
        return $this->hasMany(Student::class);
    }
     function subjects()  // realation
    {
        return $this->hasMany(Student::class);
    }

}
