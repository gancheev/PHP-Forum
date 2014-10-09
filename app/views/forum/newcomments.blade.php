@extends('layouts.master')

@section('head')
	@parent
	<title></title>
@stop

@section('content')
<div class="well">
	<h1>New Comment</h1>

	<form action="{{ URL::route('forum-store-comment', $id) }}" method="post">
		

		<div class="form-group">
			<label for="body">Body: </label>
			<textarea class="form-control" rows="12" name="body" id="body"></textarea>
		</div>
		{{ Form::token() }}
		<div class="form-group">
			<input type="submit" value="Save Thread" class="btn btn-primary">
		</div>
	</form>
</div>
@stop