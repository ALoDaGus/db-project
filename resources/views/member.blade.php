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
        <h2>Member Table</h2>
        <div class="container" style="display: flex; padding:0;">
            {{-- @if (!Route::has('login'))
    {{ route('login') }}
@endif --}}
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Member ID</th>
                        <th>Member Room</th>
                        <th id="action" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($member as $key => $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->room_id }}</td>
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
            </table>
        </div>
    </div>

@endsection
