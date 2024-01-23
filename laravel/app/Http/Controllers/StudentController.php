<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        return view('students.index', ['Students'=>Student::all()]);
        Student::all();
    }

    public function create(){
        return view('students.create');
    }

    public function register(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'course' => 'required',
            'subject' => 'required',
        ]);

        Student::create($data);

        return redirect(route('student.index'));
    }

    public function edit(Student $id){  
        return view('students.edit',['student' => $id]);
    }

    public function update(Student $id, Request $request){

        $data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'address' => 'required',
            'course' => 'required',
            'subject' => 'required',
        ]);

        $id->update($data);

        return redirect(route('student.index'));
    }

    public function delete(Student $id){

        $id->delete();
    return redirect(route('student.index'));
    }

}

