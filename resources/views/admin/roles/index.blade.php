@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Roles</h3>
    
    <p>
        <a href="{{ route('admin.roles.create') }}" class="btn btn-success">Add New</a>
        
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($roles) > 0 ? 'datatable' : '' }}  dt-select">
                <thead>
                    <tr>
                        
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        

                        <th>Name</th>
                        <th>Display</th>
                        <th>Description</th>
                        <th>Permission</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($roles) > 0)
                        @foreach ($roles as $role)
                            <tr data-entry-id="{{ $role->id }}">
                                
                                    <td></td>
                                

                                <td>{{ $role->name }}</td>
                                <td>{{ $role->display_name }}</td>
                                <td>{{ $role->description }}</td>
                                <td> @foreach($role->perms as $permission)
                                      <span class="btn btn-xs btn-primary">{{ $permission->name or '' }}</span> @endforeach
                                </td>
                                <td>
                                    
                                    <a href="{{ route('admin.roles.show',[$role->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    
                                    
                                    <a href="{{ route('admin.roles.edit',[$role->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    
                                    
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('Are you sure');",
                                        'route' => ['admin.roles.destroy', $role->id])) !!}
                                    {!! Form::submit('delete', array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No entries in table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        
            window.route_mass_crud_entries_destroy = '{{ route('admin.roles.mass_destroy') }}';
        

    </script>
@endsection