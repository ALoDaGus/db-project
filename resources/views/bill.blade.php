@extends('layouts.app')

@section('content')
@include('layouts.dbgroup')

<div class="container">
    <h2>Bill Table</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Room ID</th>
          <th>Month Routine</th>
          <th>Net summary</th>
        </tr>
      </thead>
      <tbody>
        @foreach($bill as $key => $data)
        <tr>
          <td>{{$data->room_id}}</td>
          <td>{{$data->month_routine}}</td>
          <td>{{$data->net_summary}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
