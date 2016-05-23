@extends('layouts.master')
<!-- @ author Jens Wallhoff -->
@section('content')


<div class="main">

    <h3 class="info-text2">Login</h3>
    
    @if ($errors->has())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
 
    {{ Form::open(['role' => 'form']) }}
 
    <div class='form-group'>
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) }}
    </div>
 
    <div class='form-group'>
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
    </div>
 
    {{ Form::close() }}
</div>
@stop