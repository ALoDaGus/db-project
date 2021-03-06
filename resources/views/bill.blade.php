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
        <h2>Bill Table</h2>
        <div class="container" style="display: flex; padding:0;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Room ID</th>
                        <th>Month Routine</th>
                        <th>Net summary</th>
                        <th id="action" colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bill as $key => $data)
                        <tr>
                            <td>{{ $data->room_id }}</td>
                            <td>{{ $data->month_routine }}</td>
                            <td>{{ $data->net_summary }}</td>
                            <td id="bt">
                                <button class="btn" style="padding:0">
                                    <a href="editdata/{{ $data->member_id }}"><i class="fas fa-cog" style="color: #0068ad;"
                                            aria-hidden="true"></i></a>
                            </td>
                            <td id="bt">
                                <form method="POST" action="{{ route('member.destroy', [$data->member_id]) }}">
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
