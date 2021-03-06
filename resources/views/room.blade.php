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

        .head {
            display: flex;
            position: relative;
        }

        #create {
            position: absolute;
            bottom: 0;
            right: 0;
            color: cornflowerblue;
        }

    </style>

    <div class="container">
        <div class="head">
            <h2>Room Table</h2>
            <div class="create">
                {{-- <a href="#" {{ route('create.room') }}> --}}
                    <form method="POST" action="{{ route('create.room') }}">
                        {{ csrf_field() }}
                        <button class="btn">
                            <i id="create" class="fas fa-plus-square" aria-hidden="true"><span> create new room</span></i>
                        </button>
                    </form>
                    {{-- <i class="fas fa-plus-square"><span> create room</span></i></a> --}}
                {{-- </a> --}}
            </div>
        </div>
        <div class="container" style="display: flex; padding:0;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Room ID</th>
                        <th>Room Price</th>
                        <th>Rental status</th>
                        <th id="action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($room as $key => $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->room_price }}</td>
                            <td>{{ $data->rental_status }}</td>
                            {{-- <td id="bt">
                                <button class="btn" style="padding:0">
                                    <a href="#"><i class="fas fa-cog" style="color: #0068ad;"
                                            aria-hidden="true"></i></a>
                            </td> --}}
                            <td id="bt">
                                <form method="POST" action="{{route('destroy.room', [$data->id])}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn" style="padding: 0;">
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
