@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Users</h3>
   
    <p>
        <a href="{{ route('admin.users.create') }}" class="btn btn-success">Add New</a>
        
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($users) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                      

                        <th> Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr data-entry-id="{{ $user->id }}">
                                
                                    <td></td>
                              

                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td> @foreach($user->roles as $role)
                                <span class="btn btn-xs btn-primary">{{$role->display_name or '' }}</span> @endforeach</td>
                                <td>
                                    
                                    <a href="{{ route('admin.users.show',[$user->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    
                                    
                                    <a href="{{ route('admin.users.edit',[$user->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    
                                    
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('Are you sure');",
                                        'route' => ['admin.users.destroy', $user->id])) !!}
                                    {!! Form::submit('delete', array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        
            window.route_mass_crud_entries_destroy = '{{ route('admin.users.mass_destroy') }}';
        

    </script>
@endsection