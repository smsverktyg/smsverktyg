@extends('app')

@section('breadcrumb')
    <li><a href="{{ url('/') }}">Startsida</a></li>
    <li class="active">Installation</li>
@stop

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Skapa en superadmin</h3>
        </div>
        <div class="panel-body">
            <form method="POST">
                {!! csrf_field() !!}

                <div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
                    <label class="control-label">Användarnamn:</label>
                    <input type="text" value="{{ old('username') }}" name="username" class="form-control">
                    <p class="help-block">{{ $errors->first('username') }}</p>
                </div>

                <div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
                    <label class="control-label">Lösenord:</label>
                    <input type="text" value="{{ old('username') }}" name="username" class="form-control">
                    <p class="help-block">{{ $errors->first('username') }}</p>
                </div>

                <div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
                    <label class="control-label">Lösenord igen:</label>
                    <input type="text" value="{{ old('username') }}" name="username" class="form-control">
                    <p class="help-block">{{ $errors->first('username') }}</p>
                </div>

                <div class="form-group">
                    <input type="submit" value="Installera" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@stop