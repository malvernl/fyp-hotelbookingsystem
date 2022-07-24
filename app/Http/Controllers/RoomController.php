<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Room;
use App\Models\Roomsdetails;
use App\Models\Booking;
use App\Models\UserRequest;


class RoomController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewbook()
    {
        $User = Auth::user();
        $Room = Room::all();
        return view('user.viewbook', compact('User', 'Room'));
    }
    
    public function book($roomid)
    {
        $User = Auth::user();
        $Room = Room::find($roomid);
        return view('user.bookroom', compact('User', 'Room'));
    }

    public function managebook()
    {
        $User = Auth::user();
        $Booked = Booking::where('userid', $User->id)->get();
        return view('user.managebook', compact('User', 'Booked'));
    }

    public function upgrade()
    {
        $User = Auth::user();
        $Room = Room::all();
        return view('user.upgraderoom', compact('User', 'Room'));
    }

    public function booking_room_update(Request $req, $id)
    {
        $RoomAvailable = Roomsdetails::where('roomtypeid', $id)->where('active', 0)->first();
        if($RoomAvailable)
        {
            $RoomAvailable->userid = $req->userid;
            $RoomAvailable->name = $req->name;
            $RoomAvailable->active = 1;
            $RoomAvailable->save();
            $User = User::find($req->userid);
            $User->roomsDetails()->attach($RoomAvailable, ['status' => 0, 'start' => $req->startdate, 'end' => $req->enddate]);
            $user = Auth::user();
            $name = $user->name;
            return redirect()->route('home', compact('user', 'name'))->with('success', 'Book Sucessfully');
        }
        else
        {
            return redirect()->back()->with('error', 'Room Full');
        }
    }

    public function cancel($id)
    {
        $User = Auth::user();
        $Booking = Booking::find($id);
        $Booking->roomsDetails->update([
            'userid' => null,
            'name' => null,
            'active' => 0,
        ]);
        $Booking->delete();
        $req = UserRequest::where('bookingid', $Booking->id)->delete();
        return redirect()->route('home', compact('User'))->with('success', 'Cancelled Booking');
    }
}
