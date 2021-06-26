<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $detail = Student::where('user_id', Auth::id())->first();
        return view('user.index', compact('detail'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
