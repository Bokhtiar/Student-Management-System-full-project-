<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function edit($id)
    {
        $edit = Student::find($id);
        return view('user.edit', compact('edit'));
    }

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
        return redirect()->route('user.dashboard');
    }
}
