@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Tournaments</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            View
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Name</th>
                            <td>{{ $tournament->name }}</td>
                        </tr>
                        <tr>
                            <th>Display Name</th>
                            <td>{{ $tournament->location }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

            <p>&nbsp;</p>

            <a href="{{ route('admin.tournaments.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop