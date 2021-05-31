@extends('layouts.main')

@section('styles')

@endsection

@section('content')
	<section id="top">
		<div class="uk-container">
			<div class="title uk-text-center animate__animated animate__bounceInRight">
				<h1><span>{!! $titre !!}</span></h1>
				<p>{!! $intro_contact !!}</p>
			</div>

			<div class="uk-container uk-container-xsmall uk-text-center animate__animated animate__bounceInLeft">
				<h3><span>Où directement sur les réseaux :<span></h3>
				<div class="social uk-flex-center uk-child-width-1-5@m uk-child-width-1-5@s" data-uk-grid>
					<div><a href="{!! get_option('th_discord') !!}" target="_blank" class="social_icon discord"><i class="fab fa-discord"></i></a></div>
					<div><a href="{!! get_option('th_twitter') !!}" target="_blank" class="social_icon twitter"><i class="fab fa-twitter"></i></a></div>
					<div><a href="{!! get_option('th_instagram') !!}" target="_blank" class="social_icon instagram"><i class="fab fa-instagram"></i></a></div>
				</div>
			</div>
		</div>
	</section>

	<div id="contact">
		<div class="form animate__animated animate__bounceInUp">
			<div class="uk-container">
				{!! do_shortcode($contact_shortcode) !!}
			</div>
		</div>
	</div>

@endsection

@section('javascript')

@endsection
