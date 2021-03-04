@extends('layouts.app')

@section('content')
@include('layouts.dbgroup')

<div class="container">
    <h2>Room Table</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Room ID</th>
          <th>Room Price</th>
          <th>Rental status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($room as $key => $data)
        <tr>
          <td>{{$data->room_id}}</td>
          <td>{{$data->room_price}}</td>
          <td>{{$data->rental_status}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
