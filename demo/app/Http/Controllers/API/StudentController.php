<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Error;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            // all data
            $students = Student::orderBy('id', 'desc')->get();
            //  return $students;
            //  return response()->json($students);
            return response()->json([
                'message' => 'all Student retrieved successfully',
                // 'data' => $students,
                'students' => $students
            ]);
        } catch (Error $e) {
            return response()->json([
                'message' => 'Error retrieving students',
                'error' => $e->getMessage()
            ], 500);
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          //
        // dd( $request);
        $request->validate([
           'name'=>'required|unique:tracks,name|min:2',
        ],[
            'name.required'=>'track name is required',
            'name.min'=>'track name at least two characters',

        ]);
        $requestedData=$request->all();
        Student::create($requestedData);
        return response()->json([
            "message" => "Student created successfully",


            // "student" => [
            //     "name" => $requestedData['name'],
            //     "email" => $requestedData['email'] ?? null,
            //     "address" => $requestedData['address']
            // ],
            // student : all data in database  // with all  track data of this
            "data" => Student::with('track')->orderBy('id', 'desc')->first()
            // "data" => $requestedData,
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $student = Student::findOrFail($id);
    //     return response()->json($student);
    // }
    public function show(Student $student)
    {
        // dd($student);
        try {
            return response()->json([
                'message' => 'Student retrieved successfully',
                // "student" => [
                //     "name" => $student['name'],
                //     "email" => $student['email'],
                //     "address" => $student['address'],
                //     "track_name" => optional($student->track)->name
                // ],
                "data"=>$student
            ]);
        } catch (Error $e) {
            return response()->json([
                'message' => 'Error retrieving student',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'min:3|sometimes',
            'email' => 'email|unique:students,email,' . $student->id,
            'address' => 'sometimes|required',
        ], [
            'name.min' => 'Student name must be at least 2 characters',
            'email.email' => 'Email must be a valid email address',
            'address.required' => 'Address is required',
        ]);

        $student->update($request->all());

        return response()->json([
            'message' => 'Student updated successfully',
            'data' => $student
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        if (!$student) {
            return response()->json([
                'message' => 'Student not found',
            ], 404);
        }

        $student->delete();
        return response()->json([
            'message' => 'Student deleted successfully',
            'deleted_student' => $student
        ]);
    }
}
