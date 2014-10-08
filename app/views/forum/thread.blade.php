@extends('layouts.master')

@section('head')
	@parent
	<title>Forum | {{ $thread->title }}</title>
@stop

@section('content')
	<div class="well">
		<FORM><INPUT Type="button" class="btn btn-info" VALUE="Back" onClick="history.go(-1);return true;"></FORM>
		<h1>{{ $thread->title }}</h1>
		<hr>
		<p>{{ nl2br(BBCode::parse($thread->body)) }}</p>
		<hr>
		<h4>Author: {{ $author }} <br>
			<br>
			Created: {{ $thread->created_at }}</h4>
		
		@if(Auth::check() && Auth::user()->isAdmin())
				<div class="clearfix">
				<a id="{{ $thread->id }}" href="#" data-toggle="modal" data-target="#thread_delete" class="btn btn-danger btn-xs pull-right delete_thread">Delete</a>
				</div>
				@endif
	</div>
	@if(Auth::check() && Auth::user()->isAdmin())
<div class="modal fade" id="thread_delete" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-dissen="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Delete Thread</h4>
			</div>
			<div class="modal-body">
				<h3>Are you sure you want to delete this thread?</h3>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a href="#" type="button" class="btn btn-primary" id="btn_delete_thread">Delete</a>
			</div>
		</div>
	</div>
</div>
@endif
@stop

@section('javascript')
	@parent
	<script type="text/javascript" src="/js/app.js"></script>
@stop
