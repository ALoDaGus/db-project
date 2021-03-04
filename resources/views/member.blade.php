@extends('layouts.app')

@section('content')
@include('layouts.dbgroup')

<div class="container">
    <h2>Member Table</h2>
    @if (!Route::has('login'))
    {{ route('login') }}
@endif
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Member ID</th>
          <th>Member Room</th>
        </tr>
      </thead>
      <tbody>
        @foreach($member as $key => $data)
        <tr>
          <td>{{$data->member_id}}</td>
          <td>{{$data->room_id}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
