<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // function getStudents(){
    //        // Data base ==> Class==> DB==> function ==> static(tb name)-> get()
    //     //    $students=DB::table('students')->get();
    //     $students=Student::all();
    //     //    dd($students); ==> dump and die ==> show output => stop exection
    //     // dump  ==> show output
    //                // viewName     key=> variable
    //     // return view('students',['students'=>$students]);
    //     return view('students',compact("students"));
    // }

    function index(){

     $students=Student::all();
     return view('students',compact("students"));
 }

    /**
     * table ==> جمع
     * model ==> مفرد
     * model ==> refer to table
     */

    // function getStudentData($id)
    // {
    // //    $student=Student::find($id);
    //    $student=Student::findOrFail($id);
    // //    dd($student);
    // return view('studentData',compact('student'));

    // }

    function view($id)
    {
       $student=Student::findOrFail($id);
    return view('studentData',compact('student'));

    }
}
