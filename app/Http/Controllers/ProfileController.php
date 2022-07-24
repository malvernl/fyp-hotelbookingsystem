<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\User;

class ProfileController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        $User = Auth::user();
        return view('user.profile', compact('User'));
    }

    public function changeprofile()
    {
        $User = Auth::user();
        $name = $User->name;
        $id = $User->id;
        return view('user.changeprofile', compact('User','name', 'id'));
    }

    public function store(Request $req)
    {
        $User = User::find($req->id);
        $User->name = $req->name;
        $User->gender = $req->gender;
        $User->password = bcrypt($req->password);
        $User->save();

        $Username = Auth::user();
        $name = $Username->name;
        return redirect()->route("profile", compact('User', 'name'))->with('success', 'Profile Updated Successfully');
    }
}
