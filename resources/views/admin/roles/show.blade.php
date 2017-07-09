@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Roles</h3>

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
                            <td>{{ $role->name }}</td>
                        </tr>
                        <tr>
                            <th>Display Name</th>
                            <td>{{ $role->display_name }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $role->description }}</td>
                        </tr>
                        <tr>
                            <th>Permissions</th>
                            <td>@foreach($role ->perms as $permission) 
                            <span class="btn btn-xs btn-primary">{{ $role->display_name }} </span> @endforeach</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->

            <p>&nbsp;</p>

            <a href="{{ route('admin.roles.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop