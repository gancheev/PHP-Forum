@extends('layouts.master')

@section('head')
	@parent
	<title>Register page</title>
@stop 

@section('content')
	<div class="container">
		<h1>register</h1>
		<form role="form" method="post" action="{{ URL::route('postCreate') }}">
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
			<div clas="form-group {{ ($errors->has('password2')) ? 'has-error' : '' }}">
				<label for="password2">Confirm password:</label>
				<input type="password" name="password2" id="password2" class="form-control">	
				@if($errors->has('password'))
						{{ $errors->first('password') }}
					@endif
			</div>
			{{ Form::token() }}
			<div clas="form-group">
				<input type="submit" value="register" class="btn btn-default">

			</div>
		</form>
	</div>
@stop
@section('javascript')
<script type="text/javascript" src="/js/jquery.complexify.js"></script>
	<script type="text/javascript">
 	 $("#password").complexify(options, callback(valid, complexity){
    alert("Password complexity: " + complexity);
 	 });
 	 @stop