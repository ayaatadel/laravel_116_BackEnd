<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $subjects=Subject::all();
        return view('subjects.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $requetedData=$request->all();
           Subject::create($requetedData);
    return to_route('subjects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
        return to_route('subjects.show',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
        //   $subject=Subject::findOrFail($id);
//
     return view('update',compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        //
         $requestedData=$request->all();
        $subject->update($requestedData);
        return to_route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
        $subject->delete();
        return to_route('subjects.index');
    }

    
}
