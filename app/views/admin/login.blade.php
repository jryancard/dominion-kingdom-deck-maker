@extends('admin._layouts.default')
 
@section('main')
<div class="row">
    <div class="col-4 col-offset-4 text-center">
        <h1 class="text-center">Login</h1>   
        <div>
            
            {{ Form::open() }}
                @if ($errors->has('login'))
                    <div class="alert alert-error">{{ $errors->first('login', ':message') }}</div>
                @endif
     
                <div class="control-group">
                    {{ Form::label('email', 'Email') }}
                    <div class="controls">
                        {{ Form::text('email') }}
                    </div>
                </div>
     
                <div class="control-group">
                    {{ Form::label('password', 'Password') }}
                    <div class="controls">
                        {{ Form::password('password') }}
                    </div>
                </div>
     
                <div class="form-actions">
                    {{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
                </div>
     
            {{ Form::close() }}
        </div>
     </div>
</div>
 
@stop