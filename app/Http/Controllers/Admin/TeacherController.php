<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::all();
        return view('admin.teacher.index', compact('teachers'));
    }

    public function create(){
        return view('admin.teacher.create');
    }

    public function save(Teacher $teacher, Request $request){
        $teacher->f_name = $request->f_name;
        $teacher->l_name = $request->l_name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->designation = $request->designation;
        $teacher->location = $request->location;
        $teacher->save();
    }

    public function store($id = NULL, Request $request){
        $validatedData = $request->validate([
            'f_name' => ['required'],
            'l_name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'designation' => ['required'],
            'location' => ['required'],
        ]);

        if(isset($id)){
            $teacher = Teacher::find($id);
            $this->save($teacher, $request);
            return redirect('admin/teacher/list');
        }else{
            $teacher = new Teacher;
            $this->save($teacher, $request);
            return back();
        }

    }

    public function edit($id){
        $edit = Teacher::find($id);
        return view('admin.teacher.create', compact('edit'));
    }

    public function destroy($id){
        Teacher::find($id)->delete();
        return back();
    }
}
