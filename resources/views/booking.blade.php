@extends('layouts.app')

@section('content')
@include('layouts.dbgroup')

<div class="container">
  <h2>Booking Table</h2>
  <div class="container" style="display: flex; padding:0;">
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
          <td>{{$data->id}}</td>
          <td>{{$data->member_id}}</td>
          <td>{{$data->room_id}}</td>
          <td>{{$data->booking_date}}</td>
          <td>{{$data->check_in}}</td>
          <td>{{$data->check_out}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <table class="table table-bordered" style="margin:0 1rem; max-width:50px">
      <thead>
        <tr>
          <th colspan="2" style="text-align: center;">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($booking as $item)
        <tr>
            <td><a href="#"><i class="fas fa-cog" style="color: #0068ad"></i></a></td>
            <td><a href="#"><i class="fas fa-trash-alt" style="color: #e33b3b"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
