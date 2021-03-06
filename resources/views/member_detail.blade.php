@extends('layouts.app')

@section('content')
@include('layouts.dbgroup')

<style>
  td#bt {
      text-align: center;
      width: 3em;
  }

  th#action {
      text-align: center;
  }

</style>

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
          <th id="action" colspan="2">Action</th>
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
          <td id="bt">
            <button class="btn" style="padding:0">
                <a href="editdata/{{$data->id}}"><i class="fas fa-cog" style="color: #0068ad;" aria-hidden="true"></i></a>
    </td>
    <td id="bt">
        <form method="POST" action="{{ route('member.destroy', [$data->id]) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn" style="padding:0">
                <i class="fas fa-trash-alt" style="color: #e33b3b;" aria-hidden="true"></i>
            </button>
        </form>
    </td>
        </tr>
        @endforeach
      </tbody>
  </div>
</div>

@endsection
