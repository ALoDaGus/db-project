@extends('layouts.app')

@section('content')
@include('layouts.dbgroup')

<div class="container">
    <h2>Booking Table</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Member ID</th>
          <th>Booking ID</th>
          <th>Room ID</th>
          <th>Booking Date</th>
          <th>Check In</th>
          <th>Check Out</th>
        </tr>
      </thead>
      <tbody>
        @foreach($booking as $key => $data)
        <tr>
          <td>{{$data->member_id}}</td>
          <td>{{$data->booking_id}}</td>
          <td>{{$data->room_id}}</td>
          <td>{{$data->booking_date}}</td>
          <td>{{$data->check_in}}</td>
          <td>{{$data->check_out}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
