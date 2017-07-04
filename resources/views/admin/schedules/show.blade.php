@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Title</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Player First name</th>
                            <td>{{ $player->first_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>Player Last name</th>
                            <td>{{ $player->last_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>{{ $player->dob }}</td>
                        </tr>
                        <tr>
                            <th>birth place</th>
                            <td>{{ $player->birth_place }}</td>
                        </tr>
                        <tr>
                            <th>Residence</th>
                            <td>{{ $player->residence }}</td>
                        </tr>
                        <tr>
                            <th>Hand type</th>
                            <td>{{ $player->hand_type }}</td>
                        </tr>
                        <tr>
                            <th>Height</th>
                            <td>{{ $player->height }}</td>
                        </tr>
                        <tr>
                            <th>Weight</th>
                            <td>{{ $player->weight }}</td>
                        </tr>
                        <tr>
                            <th>Singles Raking</th>
                            <td>{{ $player -> singles_ranking }}</td>
                        </tr>
                        <tr>
                            <th>Double ranking</th>
                            <td>{{ $player->doubles_ranking }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.players.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop