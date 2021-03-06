@extends('layouts.admin')

@section('content')
    <h3 class="page-title">User</h3>

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
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Role(s)</th>
                            <td>@foreach ($user->roles as $role) 
                            <span class="btn btn-xs btn-primary">{{ $role->display_name or '' }} </span> @endforeach</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">Back to list</a>
        </div>
    </div>
@stop