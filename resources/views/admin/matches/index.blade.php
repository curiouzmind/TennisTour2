@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Title</h3>
    <p>
        <a href="{{ route('admin.matches.create') }}" class="btn btn-success">Add New</a>
        
    </p>


    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($matches) > 0 ? 'datatable' : '' }} dt-select ">
                <thead>
                    <tr>
                      
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                

                        <th>Player 1</th>
                        <th>Player 2</th>
                        <th> Scheculed Match</th>                       
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($matches) > 0)
                        @foreach ($matches as $match)
                            <tr data-entry-id="{{ $match->id }}">
                              
                                    <td></td>
                            

                                <td>{{ $match->player1_id or '' }}</td>
                                <td>{{ $match->player2_id or '' }}</td>
                                <td>{{ $match->match_schedule_id or '' }}</td>
                                
                                <td>
                                    
                                    <a href="{{ route('admin.matches.show',[$match->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    
                                    <a href="{{ route('admin.matches.edit',[$match->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('Are you sure');",
                                        'route' => ['admin.matches.destroy', $match->id])) !!}
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
       
            window.route_mass_crud_entries_destroy = '{{ route('admin.matches.mass_destroy') }}';
    

    </script>
@endsection