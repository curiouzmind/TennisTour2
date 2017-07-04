@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Schedules</h3>
    
    <p>
        <a href="{{ route('admin.schedules.create') }}" class="btn btn-success">Add new</a>        
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($schedules) > 0 ? 'datatable' : '' }} dt-select ">
                <thead>
                    <tr>
                        
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>                      

                        <th>Match Venue</th>
                        <th>Match Name</th>
                        <th>Match Stage</th>
                        <th>Match Date</th>
                        <th>Player 1</th>
                        <th>Player 2</th>
                        <th>Tournament</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($schedules) > 0)
                        @foreach ($schedules as $schedule)
                            <tr data-entry-id="{{ $schedule -> id }}">
                                
                                    <td></td>
                               

                                <td>{{ $schedule->match_venue or '' }}</td>
                                <td>{{ $schedule->match_name }}</td>
                                <td>{{ $schedule->match_stage }}</td>
                                <td>{{ $schedule->match_date }}</td>
                                <td>{{ $schedule->player1_id }}</td>
                                <td>{{ $schedule->player2_id }}</td>
                                <td>{{ $schedule->tournament_id }}</td>
                                <td>
                                    
                                    <a href="{{ route('admin.schedules.show',[$schedule->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    
                                    <a href="{{ route('admin.schedules.edit',[$schedule->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                  
                                   
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('Are you sure');",
                                        'route' => ['admin.schedules.destroy', $schedule->id])) !!}
                                    {!! Form::submit('delete', array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                   
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">'No entries in table'</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        
            window.route_mass_crud_entries_destroy = '{{ route('admin.schedules.mass_destroy') }}';
       

    </script>
@endsection