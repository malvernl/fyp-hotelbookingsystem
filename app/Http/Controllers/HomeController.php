<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\Room;
use App\Models\Booking;
use App\Models\UserRequest;

class HomeController extends Controller
{

    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $User = Auth::user();
        $Room = Room::all();
        return view('user.home', compact('User', 'Room'));
    }

    public function request()
    {
        $User = Auth::user();
        $Booking = Booking::where('userid', $User->id)->where('status', 1)->first();
        if($Booking == null)
        {
            return redirect()->route('home', compact('User'))->with('error', 'No Record Found, Please check in first.');
        }
        else
        {
            $Ureq = UserRequest::where('bookingid', $Booking->id)->get();
            return view('user.makerequest', compact('User', 'Ureq'));
        }

    }

    public function checkin()
    {
        $User = Auth::user();
        $Booked = Booking::where('userid', $User->id)->where('status', 0)->get();
        return view('user.check-in', compact('User', 'Booked'));
    }

    public function checking($id)
    {
        $User = Auth::user();
        $Booking = Booking::find($id);
        $Booking->status = 1;
        $Booking->save();
        return redirect()->route('home', compact('User'))->with('success', 'Check-in Successfully');
    }

    public function checkout()
    {
        $User = Auth::user();
        $Booked = Booking::where('userid', $User->id)->where('status', 1)->get();
        return view('user.check-out', compact('User', 'Booked'));
    }

    public function checkouting($id)
    {
        $User = Auth::user();
        $Booking = Booking::find($id);
        $Booking->roomsDetails->update([
            'userid' => null,
            'name' => null,
            'active' => 0,
        ]);
        $Booking->status = 2;
        $Booking->save();
        return redirect()->route('home', compact('User'))->with('success', 'Check-out Successfully');
    }

    public function createrequest(Request $req)
    {
        $User = Auth::user();
        if($User->checkin())
        {
            $req->merge([
                'active' => 0,
            ]);
            $User->checkin()->request()->create($req->all());
        }
        return redirect()->route('home', compact('User'))->with('success', 'Make Request Success');
    }
}
