@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Players</h3>
    
    <p>
        <a href="{{ route('admin.players.create') }}" class="btn btn-success">Add new</a>        
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($players) > 0 ? 'datatable' : '' }} dt-select ">
                <thead>
                    <tr>
                        
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                       

                        <th>Player Name</th>
                        <th>Date of Birth</th>
                        <th>Birth Place</th>
                        <th>Hand Type</th>
                        <th>Player Height</th>
                        <th>Singles Ranking</th>
                        <th>Double  Ranking</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($players) > 0)
                        @foreach ($players as $player)
                            <tr data-entry-id="{{ $player -> id }}">
                                
                                    <td></td>
                               

                                <td>{{ $player->first_name or '' }} {{$player->last_name or '' }}</td>
                                <td>{{ $player->dob }}</td>
                                <td>{{ $player->birth_place }}</td>
                                <td>{{ $player->hand_type }}</td>
                                <td>{{ $player->height }}</td>
                                <td>{{ $player->singles_ranking }}</td>
                                <td>{{ $player->doubles_ranking }}</td>
                                <td>
                                    
                                    <a href="{{ route('admin.players.show',[$player->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    
                                    <a href="{{ route('admin.players.edit',[$player->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                  
                                   
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('Are you sure');",
                                        'route' => ['admin.players.destroy', $player->id])) !!}
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
        
            window.route_mass_crud_entries_destroy = '{{ route('admin.players.mass_destroy') }}';
       

    </script>
@endsection