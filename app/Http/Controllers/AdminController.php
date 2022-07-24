<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Role_user;

class AdminController extends Controller
{
    
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $Admin = Auth::user();
        return view('admin.adminhome', compact('Admin'));
    }

    public function checkuser()
    {
        $Admin = Auth::user();
        $User = User::all();
        return view('admin.checkuser', compact('Admin', 'User'));
    }

    public function removeUser($id)
    {
        $Admin = Auth::user();
        Role_user::where('user_id', $id)->delete();
        User::find($id)->delete();
        $User = User::all();
        return redirect()->route('checkuser', compact('User', 'User'))->with('success', 'Staff/User Removed');
    }
}
