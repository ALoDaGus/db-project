<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Booking;
use App\Models\Member;
use App\Models\MemberDetail;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DormitoryController extends Controller
{
    public function create_member(Request $request)
    {
        return Member::create($request->all());
    }

    public function store()
    {
        $member_detail = new MemberDetail;
        $member_detail->gender = '123';
        $member_detail->tel_no = request('tel_no');
        $member_detail->address = request('address');
        $member_detail->first_name = request('first_name');
        $member_detail->last_name = request('last_name');
        $member_detail->email = request('email');
        $member_detail->save();
        
        $member = new Member;
        $member->room_id = request('room_id');
        $member->save();
        
        $booking = new Booking;
        $booking->member_id = '123';
        $booking->room_id = request('room_id');
        $ldate = date('Y-m-d H:i:s');
        $booking->booking_date = $ldate;
        $booking->check_in = Carbon::createFromFormat('m/d/Y', request('check_in'))->format('Y-m-d');
        $booking->check_out = Carbon::createFromFormat('m/d/Y', request('check_out'))->format('Y-m-d');
        $booking->save();

        return view('home');
    }

    public function create_member_detail(Request $request)
    {
        return MemberDetail::create($request->all());
    }

    public function create_booking(Request $request)
    {
        return Booking::create($request->all());
    }

    public function create_room(Request $request)
    {
        return Room::create($request->all());
    }

    public function create_bill(Request $request)
    {
        return Bill::create($request->all());
    }
}
