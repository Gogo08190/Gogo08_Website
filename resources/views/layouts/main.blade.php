<!doctype html>
<html {!! get_language_attributes() !!}>
	<head>
		<meta charset="{{ get_bloginfo('charset') }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/csshake/1.5.3/csshake.min.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

		@yield('styles')

		@head

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://kit.fontawesome.com/791da63d6e.js" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
		<div id="menu-mobile" data-uk-offcanvas="mode: push">
	    <div class="uk-offcanvas-bar">
	      <button class="uk-offcanvas-close" type="button" data-uk-close></button>
				{!! wp_nav_menu(['theme_location' => 'nav-mobile', 'container' => false, 'menu_id' => 'mobile-nav']) !!}
	    </div>
	  </div>

		@footer
		@yield('javascript')

		<script src="https://cdn.jsdelivr.net/npm/mailgo@0.9.15/dist/mailgo.min.js"></script>
	</body>
</html>
