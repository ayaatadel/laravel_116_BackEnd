<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;
    protected $fillable=['name','image','track_id'];

    function track()
    {
                return $this->belongsTo(Track::class);

    }
    public function students()
{
    return $this->belongsToMany(Student::class);
}
}
