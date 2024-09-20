<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index () 
    {
        $student = Student ::all();

            return $student;
    }

    function show($nis)
    {
        $Student = Student ::where('nis', $nis)->first();

        return $Student;
    }

    function create(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'nis' => ['required', 'numeric'],
            'grade' => ['required'],
            'gender' => ['required'],
            'age' => ['requires'],
        ]);
        $student = new Student;
        $student->name = $validated['name'];
        $student->nis = $validated['nis'];
        $student->grade = $validated['grade'];
        $student->gender = $validated['gender'];
        $student->age = $validated['age'];
        $student->save();

        return $student;
    }

    function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'nis' => ['required', 'numeric'],
            'grade' => ['required'],
            'gender' => ['required'],
            'age' => ['requires'],
        ]);
       $student = Student::find($id);
       $student->update($validated);
       $student->save();

       return $student;
    }

    function destroy($id);
    $student = Student::find($id);
    $student->delete();
    return $student;
}
