<!doctype html>
<html {!! get_language_attributes() !!}>
	<head>
		<meta charset="{{ get_bloginfo('charset') }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		@yield('styles')

		@head

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/791da63d6e.js" crossorigin="anonymous"></script>
		@yield('javascriptheader')
	</head>

	<body>
		@if( is_front_page() )
		<div id="wrapper" class="home">
		@else
		<div id="wrapper" class="page <?php if(!empty(get_post_meta(Loop::id(), '_wp_page_template', true))) { echo get_post_meta(Loop::id(), '_wp_page_template', true);} else { echo "base"; } ?>">
		@endif
			@include('layouts.header')
			<main>
				@yield('content')
			</main>
			@include('layouts.footer')
		</div>

		@footer
		@yield('javascript')
	</body>
</html>
