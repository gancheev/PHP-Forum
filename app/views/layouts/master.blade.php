<!doctype html>
<html lang="en">
<head>
	@section('head')
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	@show	
</head>
<body>
		
	<header>
			<div class="navbar">
				<div class="container containerTop">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"> </span>
							<span class="icon-bar"> </span>
							<span class="icon-bar"> </span>
						</button>
						<a href="{{ URL::route('home') }}" class="navbar-brand">MyForum</a>
					</div>
					<div class="navbar-collapse collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="{{ URL::route('home') }}">Home</a></li>
								<li class="active"><a href="{{ URL::route('forum-home') }}">Forum</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								@if(!Auth::check())
									<li><a href="{{ URL::route('getCreate') }}">Register</a></li>
									<li><a href="{{ URL::route('getLogin') }}">Login</a></li>
								@else
									<li><a href="{{ URL::route('getLogout') }}">Logout</a></li>
								@endif

							</ul>
					</div>
				</div>
			</div>
	</header>
		@if(Session::has('success'))
		<div class="container"><div class="alert alert-success">{{ Session::get('success') }}</div></div>
	@elseif(Session::has('fail'))
		<div class="container"><div class="alert alert-danger">{{ Session::get('fail') }}</div></div>
	@endif

	<div class="container">
		@if(!Auth::check())
				<div class="well">
					<p class="text-center">You are not registered. If you want to post in the forum , please
					 <a href="{{ URL::route('getCreate') }}">register</a>!</p>
				</div>
			@else
				<div class="well">
					<p><h2 class="text-center">Hello,dear user</h2></p>
					 
				</div>
			@endif
		@yield('content')

	@section('footer')
	<div class="well footer">
		<div class="php">
	<h4>This is the footer</h4>
		</div>
	</div>
	@show
</div>
	@section('javascript')
	<script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js"></script>
	
</script>

	@show

</body>
</html>
