@extends('layouts.app')

@section('content')
@include('layouts.dbgroup')

<div class="container">
    <h2>Member Detail Table</h2>
    <div class="container" style="display: flex; padding:0;">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Member ID</th>
          <th>Fitst Name</th>
          <th>Last Name</th>
          <th>Gender</th>
          <th>TelNo.</th>
          <th>Email</th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>
        @foreach($member_detail as $key => $data)
        <tr>
          <td>{{$data->member_id}}</td>
          <td>{{$data->first_name}}</td>
          <td>{{$data->last_name}}</td>
          <td>{{$data->gender}}</td>
          <td>{{$data->tel_no}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->address}}</td>
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
        @foreach ($member_detail as $item)
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
