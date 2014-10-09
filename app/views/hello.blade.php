@extends('layouts.master')

@section('head')
	@parent
	<title>Home page</title>
@stop 

@section('content')
	<h1 class="text-center">News</h1>
	<section>
		<article><div class="well news"> <img src="/images/image.jpg" class="img-responsive "> This is some text This is some text This is some text This is some text This is some text </div></article>
		<article><div class="well news"> <img src="/images/image.jpg" class="img-responsive "> This is some text This is some text This is some text This is some text This is some text </div></article>
	</section>


	@if(Session::has('success'))
		<div class="alert alert-success">{{ Session::get('success') }}</div>
	@elseif(Session::has('fail'))
		<div class="alert alert-danger">{{ Session::get('fail') }}</div>
	@endif
	
@stop