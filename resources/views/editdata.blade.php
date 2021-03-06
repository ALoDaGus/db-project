@extends('layouts.app')

@section('content')
@include('layouts.dbgroup')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Check In') }}</div>
                <div class="card-body">
                    <form method="post" action="/update/{{$data->id}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="first_name" class="col-form-label">First Name</label>
                                <input name="first_name" type="text" class="form-control" id="first_name" placeholder="First Name" value="{{$data->member_detail->first_name}}" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="last_name" class="col-form-label">Last Name</label>
                                <input name="last_name" type="text" class="form-control" id="last_name"
                                       placeholder="Last Name" value="{{$data->member_detail->last_name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" id="email"
                                placeholder="Email" value="{{$data->member_detail->email}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tel_no" class="col-sm-2 col-form-label">Phone No.</label>
                            <div class="col-sm-10">
                                <input name="tel_no" type="text" class="form-control" id="tel_no"
                                placeholder="Phone Number" value="{{$data->member_detail->tel_no}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input name="address" type="text" class="form-control" id="address"
                                placeholder="Address" value="{{$data->member_detail->address}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="gender" class="col-form-label">gender</label>
                                <select id="imselect" name="gender2" class="form-control" id="exampleFormControlSelect1" onchange="imselected();">
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                </select>
                                <input hidden id="gender" name="gender" type="text" class="form-control" id="gender" value="male">

                            </div>
                            <div class="col-sm-6">
                                <label for="room_id" class="col-form-label">Room No.</label>
                                <input name="room_id" type="text" class="form-control" id="room_id" placeholder="Room Number" value="{{$data->room_id}}" required>
                             </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="check_in" class="col-form-label">Check In</label>
                                <input name="check_in" type="text" class="form-control" id="datepicker" placeholder="Checkin Date" value="{{date('m/d/Y', strtotime($data->booking[0]->check_in))}}" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="check_out" class="col-form-label">Check Out</label>
                                <input name="check_out" type="text" class="form-control" id="datepicker2" placeholder="Checkout Date" value="{{date('m/d/Y', strtotime($data->booking[0]->check_out))}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">edit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
