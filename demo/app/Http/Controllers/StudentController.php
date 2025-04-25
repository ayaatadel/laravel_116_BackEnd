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

    //  $students=Student::all();
     $students=Student::orderBy('created_at','desc')->paginate(3);
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

   function destroy($id){
    $student=Student::findOrFail($id);
    // dump($student);
    $student->delete();
    // $students=Student::all();
    // return view('students',compact("students"));

    return to_route('students.index'); // route name


   }
   function create()
   {
    return view('create');

   }
   function store()
   {
    // dump(request()->all());
    $requestDate=request()->all();
    // dd($requestDate);
    Student::create($requestDate);
    return to_route('students.index');
   }

   function update($id)
   {
    $student=Student::findOrFail($id);

     return view('update',compact('student'));
   }

   function edit($id)
   {
    $student=Student::findOrFail($id);
    // dump($student);
    $requestedDate=request()->all();
    // dd($requestedDate);
    $student->update($requestedDate);
    return to_route('students.index');

   }
}
