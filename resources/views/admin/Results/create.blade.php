@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Title</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.results.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rnd1_score', 'Round 1 score', ['class' => 'control-label']) !!}
                    {!! Form::text('rnd1_score', old('rnd1_score'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rnd1_score'))
                        <p class="help-block">
                            {{ $errors->first('rnd1_score') }}
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
                    {!! Form::text('doubles_ranking', old('doubles_ranking'), ['class' => 'form-control', 'placeholder' => 'Enter double ranking']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('doubles_ranking'))
                        <p class="help-block">
                            {{ $errors->first('doubles_ranking') }}
                        </p>
                    @endif
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