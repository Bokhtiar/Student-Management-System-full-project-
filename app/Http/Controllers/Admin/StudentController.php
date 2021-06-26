<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'f_name' => ['required'],
            'l_name' => ['required'],
            'email' => ['required' ,'unique:students'],
            'class' => ['required'],
            'section' => ['required'],
            'student_id' => ['required'],
            'parent_phone' => ['required'],
            'student_phone' => ['required'],
            'password' => ['required', 'min:8'],
            'location' => ['required'],
        ]);
        $student = new Student;
            $student->f_name = $request->f_name;
            $student->l_name = $request->l_name;
            $student->email = $request->email;
            $student->class = $request->class;
            $student->section = $request->section;
            $student->student_id = $request->student_id;
            $student->parent_phone = $request->parent_phone;
            $student->student_phone = $request->student_phone;
            $student->password = $request->password;
            $student->location = $request->location;
            $user = User::create([
                'name'=> $request->f_name .' '. $request->l_name,
                'email'=> $request->email,
                'password' => Hash::make($request->password),
            ]);
            $student->user_id = $user->id;
        $student->save();
        return redirect('admin/student/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $class = $request->class;
        $id = $request->student_id;
        if(isset($id)){
            $search = Student::where('class', $class)->where('student_id', $id)->get();
        }else{
            $search = Student::where('class', $class)->get();
        }
        return view('admin.student.search', compact('search'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $detail = Student::where('id', $id)->first();
        return view('admin.student.detail', compact('detail'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Student::find($id);
        return view('admin.student.create', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $student = Student::find($id);
            $student->f_name = $request->f_name;
            $student->l_name = $request->l_name;
            $student->email = $request->email;
            $student->class = $request->class;
            $student->section = $request->section;
            $student->student_id = $request->student_id;
            $student->parent_phone = $request->parent_phone;
            $student->student_phone = $request->student_phone;
            $student->password = $request->password;
            $student->location = $request->location;

                $user = User::find($student->user_id);
                $user->name = $request->f_name .''. $request->l_name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->save();

            $student->user_id = $user->id;
        $student->save();
        return redirect('admin/student/list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Student::find($id);
        $user = $destroy->user_id;
        $user_destroy = User::find($user);
        $user_destroy->delete();
        $destroy->delete();
        return redirect('admin/student/list');
    }
}
