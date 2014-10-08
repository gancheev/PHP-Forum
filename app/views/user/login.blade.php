@extends('layouts.master')

@section('head')
	@parent
	<title>Login page</title>
@stop 

@section('content')
	
	<div class="container">
		<h1>Login</h1>
		<form role="form" method="post" action="{{ URL::route('postLogin') }}">
			<div clas="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" class="form-control">	
				@if($errors->has('username'))
						{{ $errors->first('username') }}
					@endif
			</div>
			<div clas="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" class="form-control">	
				@if($errors->has('password'))
						{{ $errors->first('password') }}
					@endif
			</div>
			<div class="checkbox">
				<label for="remember">
					<input type="checkbox" name="remember" id="remember" > 
					Remember me!</label>
			</div>
			{{ Form::token() }}
			<div clas="form-group">
				<input type="submit" value="Login" class="btn btn-default">

			</div>
		</form>
	</div>
@stop