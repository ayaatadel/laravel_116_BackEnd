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
    protected $fillable = ['name', 'email', 'address', 'gender', 'age', 'image', 'phone','track_id'];
    // students , tracks (one to many ) ===> student can assign in one track , and track has many students


      //    1         1
    // student ===> track
   //      m             1


    function track()  // relation name
    {
        // return $this->belongsTo(Track::class,'track_id','myid');
        return $this->belongsTo(Track::class);
    }

    public function subjects()
{
    return $this->belongsToMany(Subject::class);
}
}
