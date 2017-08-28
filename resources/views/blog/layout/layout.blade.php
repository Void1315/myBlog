<!DOCTYPE html>
<html>
	<head>
		<title>Black &amp; White</title>

		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
	    <!-- css -->
		@include('blog.layout.css')
	    <!-- js -->
	    
		@include('blog.layout.js')
	</head>

	<body >
		<div class="container">	
			@include('blog.layout.header')
		</div>
			@yield('index')
			@yield('single')
			@yield('about')
			@yield('full')
			@yield('contact')
		<footer id="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copyright">&copy; 2017  韦天没生病</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- Mobile Menu -->
		@include('blog.layout.mobilemenu')

		

	</body>
	<script src="{{asset('js/blog/script.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
	</html>
