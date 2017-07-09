@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Permissions</h3>

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
                            <td>{{ $permission->name }}</td>
                        </tr>
                        <tr>
                            <th>Display Name</th>
                            <td>{{ $permission->display_name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $permission->description }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

            <p>&nbsp;</p>

            <a href="{{ route('admin.permissions.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop