<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\UserRequest;
use App\Models\Roomsdetails;

class StaffController extends Controller
{
    
    use AuthenticatesUsers;
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $User = Auth::user();
        return view('staff.staffhome', compact('User'));
    }

    public function managerequest() 
    {
        $User = Auth::user();
        $Ureq = UserRequest::where('active', 0)->get();
        return view('staff.managerequest', compact('User','Ureq'));
    }

    public function manageroom() 
    {
        $User = Auth::user();
        $Room = Roomsdetails::all();
        return view('staff.manageroom', compact('User', 'Room'));
    }

    public function managereq($id)
    {
        $User = Auth::user();
        $Request = UserRequest::find($id);
        $Request->active = 1;
        $Request->save();
        return redirect()->route('managerequest', compact('User'))->with('success', 'Request Accepted');
    }

    public function managereqref($id)
    {
        $User = Auth::user();
        $Request = UserRequest::find($id);
        $Request->active = 2;
        $Request->save();
        return redirect()->route('managerequest', compact('User'))->with('error', 'Request Refused');
    }
}
