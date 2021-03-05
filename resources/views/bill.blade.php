@extends('layouts.app')

@section('content')
@include('layouts.dbgroup')

<div class="container">
  <h2>Bill Table</h2>
   <div class="container" style="display: flex; padding:0;">
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
    
    <table class="table table-bordered" style="margin:0 1rem; max-width:50px">
      <thead>
        <tr>
          <th colspan="2" style="text-align: center;">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($bill as $item)
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
