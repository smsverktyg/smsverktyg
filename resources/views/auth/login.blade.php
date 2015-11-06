@extends('app')

@section('breadcrumb')
    <li><a href="{{ url('/') }}">Startsida</a></li>
    <li class="active">Logga in</li>
@stop

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Inloggning</h3>
        </div>
        <div class="panel-body">
            <form method="POST">
                {!! csrf_field() !!}

                <div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
                    <label class="control-label">Användarnamn:</label>
                    <input type="text" value="{{ old('username') }}" name="username" class="form-control">
                    <p class="help-block">{{ $errors->first('username') }}</p>
                </div>

                <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
                    <label class="control-label">Lösenord:</label>
                    <input type="password" name="password" class="form-control">
                    <p class="help-block">{{ $errors->first('password') }}</p>
                </div>

                <div class="form-group">
                    <input type="submit" value="Logga in" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@stop