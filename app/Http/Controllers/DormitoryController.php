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
        $member = new Member;
        $member->room_id = request('room_id');
        $member->save();
        
        $member_detail = new MemberDetail;
        $member_detail->gender = '123'; //////////////////////////////////////////
        $member_detail->member_id = $member->id;
        $member_detail->tel_no = request('tel_no');
        $member_detail->address = request('address');
        $member_detail->first_name = request('first_name');
        $member_detail->last_name = request('last_name');
        $member_detail->email = request('email');
        $member_detail->save();
        
        $booking = new Booking;
        $booking->member_id = $member->id;
        $booking->room_id = request('room_id');
        $ldate = date('Y-m-d H:i:s');
        $booking->booking_date = $ldate;
        $booking->check_in = Carbon::createFromFormat('m/d/Y', request('check_in'))->format('Y/m/d');
        $booking->check_out = Carbon::createFromFormat('m/d/Y', request('check_out'))->format('Y/m/d');
        $booking->save();

        $room = new Room;
        $date1 = $booking->check_in;
        $date2 = $booking->check_out;
        $diff = abs(strtotime($date2) - strtotime($date1));
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $room->room_price = $days*500;
        $room->rental_status = '0';////////////////////////////////////////////////////////
        $room->save();

        $bill = new Bill;
        $bill->room_id = $room->id;
        $bill->month_routine = 'test';/////////////////////////////////////
        $bill->net_summary = 1233;///////////////////////////////////////
        $bill->save();

        return redirect('member');
    }

    public function update($id)
    {
        DB::table('member')->where('id', $id)->update(['room_id'=>request('room_id')]);
        DB::table('member_detail')->where('member_id', $id)->update(['first_name'=>request('first_name'),
                                                                     'last_name'=>request('last_name'),
                                                                     'gender'=>'213',
                                                                     'tel_no'=>request('tel_no'),
                                                                     'email'=>request('email'),
                                                                     'address'=>request('address')]);

        $ldate = date('Y-m-d H:i:s');
        // $date1 =Carbon::createFromFormat('m/d/Y', request('check_in'))->format('Y-m-d');

        DB::table('booking')->where('member_id', $id)->update(['room_id'=>request('room_id'),
                                                               'booking_date'=>$ldate,
                                                               'check_in'=>date('Y/m/d', strtotime(request('check_in'))),
                                                               'check_out'=>date('Y/m/d', strtotime(request('check_out')))]);
        return redirect('member');

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

    public function member_destroy($id)
    {
        DB::table('member')->where('id', $id)->delete();
        return redirect('/member');
    }

    public function edit_data($id)
    {
        $data = Member::find($id);
        return view('editdata', ['data' => $data]);
    }


}
