@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Title</h3>
    {!! Form::open(['method' => 'POST','enctype'=> 'multipart/form-data', 'route' => ['admin.players.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('first_name', 'First Name', ['class' => 'control-label']) !!}
                    {!! Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('first_name'))
                        <p class="help-block">
                            {{ $errors->first('first_name') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('last_name', 'Last Name', ['class' => 'control-label']) !!}
                    {!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('last_name'))
                        <p class="help-block">
                            {{ $errors->first('last_name') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('avatar', 'Upload Image/Avatar', ['class' => 'control-label']) !!}
                    {!! Form::file('avatar', old('avatar'), ['id'=>'file-0','class' => 'file', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('avatar'))
                        <p class="help-block">
                            {{ $errors->first('avatar') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('dob', 'Birth date', ['class' => 'control-label']) !!}
                    {!! Form::text('dob', old('dob'), ['class' => 'form-control date', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('dob'))
                        <p class="help-block">
                            {{ $errors->first('dob') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('birth_place', 'Birth Place', ['class' => 'control-label']) !!}
                    {!! Form::text('birth_place', old('birth_place'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('birth_plave'))
                        <p class="help-block">
                            {{ $errors->first('birth_place') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('residence', 'Residence', ['class' => 'control-label']) !!}
                    {!! Form::text('residence', old('residence'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('residence'))
                        <p class="help-block">
                            {{ $errors->first('residence') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hand_type', 'Hand Type', ['class' => 'control-label']) !!}
                    {!! Form::text('hand-type', old('hand_type'), ['class' => 'form-control', 'placeholder' => 'specify either left or right']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hand_type'))
                        <p class="help-block">
                            {{ $errors->first('hand_type') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('height', 'Height', ['class' => 'control-label']) !!}
                    {!! Form::text('height', old('height'), ['class' => 'form-control', 'placeholder' => 'Enter height']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('height'))
                        <p class="help-block">
                            {{ $errors->first('height') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('weight', 'Weight', ['class' => 'control-label']) !!}
                    {!! Form::text('weight', old('weight'), ['class' => 'form-control', 'placeholder' => 'Enter weight']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('weight'))
                        <p class="help-block">
                            {{ $errors->first('weight') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('singles-ranking', 'Singles Ranking', ['class' => 'control-label']) !!}
                    {!! Form::text('singles_ranking', old('singles_ranking'), ['class' => 'form-control', 'placeholder' => 'Enter singles ranking']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('singles_ranking'))
                        <p class="help-block">
                            {{ $errors->first('singles_ranking') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('doubles_ranking', 'Double Ranking', ['class' => 'control-label']) !!}
                    {!! Form::text('doubles_ranking', old('doubles_ranking'), ['class' => 'form-control', 'placeholder' => 'Enter doubles ranking']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('doubles_ranking'))
                        <p class="help-block">
                            {{ $errors->first('doubles_ranking') }}
                        </p>
                    @endif
                </div>         
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('year_turned_pro', 'Year turned Pro', ['class' => 'control-label']) !!}
                    {!! Form::text('year_turned_pro', old('year_turned_pro'), ['class' => 'form-control', 'placeholder' => 'Year turned Pro']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('year_turned_pro'))
                        <p class="help-block">
                            {{ $errors->first('year_turned_pro') }}
                        </p>
                    @endif
                </div>         
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('matches_won', 'Matches won', ['class' => 'control-label']) !!}
                    {!! Form::text('matches_won', old('matches_won'), ['class' => 'form-control', 'placeholder' => 'matches won']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('matches_won'))
                        <p class="help-block">
                            {{ $errors->first('matches_won') }}
                        </p>
                    @endif
                </div>         
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('matches_lost', 'Matches lost', ['class' => 'control-label']) !!}
                    {!! Form::text('matches_lost', old('matches_lost'), ['class' => 'form-control', 'placeholder' => 'Matches lost']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('matches_lost'))
                        <p class="help-block">
                            {{ $errors->first('matches_lost') }}
                        </p>
                    @endif
                </div>         
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('aces', 'Aces', ['class' => 'control-label']) !!}
                    {!! Form::text('aces', old('aces'), ['class' => 'form-control', 'placeholder' => 'Total Aces']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('aces'))
                        <p class="help-block">
                            {{ $errors->first('aces') }}
                        </p>
                    @endif
                </div>         
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('double_faults', 'Double Faults', ['class' => 'control-label']) !!}
                    {!! Form::text('double_faults', old('double_faults'), ['class' => 'form-control', 'placeholder' => 'Double Faults']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('double_faults'))
                        <p class="help-block">
                            {{ $errors->first('double_faults') }}
                        </p>
                    @endif
                </div>         
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('unforced_errors', 'Unforced Errors', ['class' => 'control-label']) !!}
                    {!! Form::text('unforced_errors', old('unforced_errors'), ['class' => 'form-control', 'placeholder' => 'Unforced Errors']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('unforced_errors'))
                        <p class="help-block">
                            {{ $errors->first('unforced_errors') }}
                        </p>
                    @endif
                </div>         
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('total_points_won', 'Total Points Won', ['class' => 'control-label']) !!}
                    {!! Form::text('total_points_won', old('total_points_won'), ['class' => 'form-control', 'placeholder' => 'Total Points Won']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('total_points_won'))
                        <p class="help-block">
                            {{ $errors->first('total_points_won') }}
                        </p>
                    @endif
                </div>         
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('break_points_won', 'Break Points Won', ['class' => 'control-label']) !!}
                    {!! Form::text('break_points_won', old('break_points_won'), ['class' => 'form-control', 'placeholder' => 'Break Points Won']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('break_points_won'))
                        <p class="help-block">
                            {{ $errors->first('break_points_won') }}
                        </p>
                    @endif
                </div>         
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('distance_covered', 'Distance Covered', ['class' => 'control-label']) !!}
                    {!! Form::text('distance_covered', old('distance_covered'), ['class' => 'form-control', 'placeholder' => 'Distance Covered']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('double_faults'))
                        <p class="help-block">
                            {{ $errors->first('double_faults') }}
                        </p>
                    @endif
                </div>         
            </div>
            
        </div>
    </div>

    {!! Form::submit('save', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

@stop