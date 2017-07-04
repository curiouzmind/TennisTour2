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
                            <th>Player 1</th>
                            <td>{{ $match->player->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>Player 2</th>
                            <td>{{ $match->player->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.matchs.fields.start-time')</th>
                            <td>{{ $match->start_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.matchs.fields.result1')</th>
                            <td>{{ $match->result1 }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.matchs.fields.result2')</th>
                            <td>{{ $match->result2 }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.matchs.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop