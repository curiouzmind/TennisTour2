@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Title</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.matches.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('player1_id', 'Player 1', ['class' => 'control-label']) !!}
                    {!! Form::select('player1_id', $player1, old('player1_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('player1_id'))
                        <p class="help-block">
                            {{ $errors->first('player1_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('player2_id', 'Player 2', ['class' => 'control-label']) !!}
                    {!! Form::select('player2_id', $player2, old('player2_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('player2_id'))
                        <p class="help-block">
                            {{ $errors->first('player2_id') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('schedule_id', 'Schedule', ['class' => 'control-label']) !!}
                    {!! Form::select('schedule_id', $schedule, old('schedule_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('schedule_id'))
                        <p class="help-block">
                            {{ $errors->first('schedule_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('team2_id', 'Team2', ['class' => 'control-label']) !!}
                    {!! Form::select('team2_id', $team2s, old('team2_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('team2_id'))
                        <p class="help-block">
                            {{ $errors->first('team2_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('start_time', 'Start time', ['class' => 'control-label']) !!}
                    {!! Form::text('start_time', old('start_time'), ['class' => 'form-control datetime', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('start_time'))
                        <p class="help-block">
                            {{ $errors->first('start_time') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('result1', 'Result1', ['class' => 'control-label']) !!}
                    {!! Form::number('result1', old('result1'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('result1'))
                        <p class="help-block">
                            {{ $errors->first('result1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('result2', 'Result2', ['class' => 'control-label']) !!}
                    {!! Form::number('result2', old('result2'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('result2'))
                        <p class="help-block">
                            {{ $errors->first('result2') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "HH:mm:ss"
        });
    </script>

@stop