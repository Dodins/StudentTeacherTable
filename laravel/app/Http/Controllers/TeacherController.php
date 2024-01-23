<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('teachers.index', ['Teachers'=>Teacher::all()]);
        Teacher::all();
    }

    public function create(){
        return view('teachers.create');
    }

    public function store(Request $request){
        
        $data = $request->validate([
            'name'=>'required',
            'age'=>'required',
            'address'=>'required',
            'department'=>'required',
        ]);

        Teacher::create($data);
        return redirect(route('teacher.index'));
    }

    public function edit(Teacher $id){
        return view('teachers.edit', ['teacher'=>$id]);
    }

    public function update(Teacher $id, Request $request){

        $data = $request->validate([
            'name'=>'required',
            'age'=>'required',
            'address'=>'required',
            'department'=>'required',
        ]);

        $id->update($data);

        return redirect(route('teacher.index'));
    }
    
    public function delete(Teacher $id){

        $id->delete();

        return redirect(route('teacher.index'));

    }
}
