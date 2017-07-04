@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Results</h3>
    
    <p>
        <a href="{{ route('admin.results.create') }}" class="btn btn-success">Add new</a>        
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }} dt-select ">
                <thead>
                    <tr>
                        
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                       

                        <th>result Name</th>
                        <th>Date of Birth</th>
                        <th>Birth Place</th>
                        <th>Hand Type</th>
                        <th>result Height</th>
                        <th>Singles Ranking</th>
                        <th>Double  Ranking</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($results) > 0)
                        @foreach ($results as $result)
                            <tr data-entry-id="{{ $result -> id }}">
                                
                                    <td></td>
                               

                                <td>{{ $result->first_name or '' }} {{$result->last_name or '' }}</td>
                                <td>{{ $result->dob }}</td>
                                <td>{{ $result->birth_place }}</td>
                                <td>{{ $result->hand_type }}</td>
                                <td>{{ $result->height }}</td>
                                <td>{{ $result->single_ranking }}</td>
                                <td>{{ $result->doble_ranking }}</td>
                                <td>
                                    
                                    <a href="{{ route('admin.results.show',[$result->id]) }}" class="btn btn-xs btn-primary">View</a>
                                    
                                    <a href="{{ route('admin.results.edit',[$result->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                  
                                   
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('Are you sure');",
                                        'route' => ['admin.results.destroy', $result->id])) !!}
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
        
            window.route_mass_crud_entries_destroy = '{{ route('admin.results.mass_destroy') }}';
       

    </script>
@endsection