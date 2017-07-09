@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Role</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.roles.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Create
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter the Role name here', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('display_name', 'Display*', ['class' => 'control-label']) !!}
                    {!! Form::text('display_name', old('display_name'), ['class' => 'form-control', 'placeholder' => 'Enter the display here', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('display_name'))
                        <p class="help-block">
                            {{ $errors->first('display_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
                    {!! Form::text('description', old('description'), ['class' => 'form-control', 'placeholder' => 'Enter description here']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('permissions', 'Permissions', ['class' => 'control-label']) !!}
                    {!! Form::select('permissions', $permissions, old('permissions'), ['class' => 'form-control select2','multiple']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('player1_id'))
                        <p class="help-block">
                            {{ $errors->first('player1_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

