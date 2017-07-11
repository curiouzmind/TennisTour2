@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Tournaments</h3>
    
    <p>
        <a href="{{ route('admin.tournaments.create') }}" class="btn btn-success">Add New</a>
        
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($tournaments) > 0 ? 'datatable' : '' }}  dt-select">
                <thead>
                    <tr>
                        
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        

                        <th>Name</th>
                        <th>Location</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($tournaments) > 0)
                        @foreach ($tournaments as $tournament)
                            <tr data-entry-id="{{ $tournament->id }}">
                                
                                    <td></td>
                                

                                <td>{{ $tournament->name }}</td>
                                <td>{{ $tournament->location }}</td>
                                <td>                                  
                                    <a href="{{ route('admin.tournaments.show',[$tournament->id]) }}" class="btn btn-xs btn-primary">View</a>
                                                                      
                                    <a href="{{ route('admin.tournaments.edit',[$tournament->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    
                                    
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('Are you sure');",
                                        'route' => ['admin.tournaments.destroy', $tournament->id])) !!}
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
        
            window.route_mass_crud_entries_destroy = '{{ route('admin.tournaments.mass_destroy') }}';
        

    </script>
@endsection