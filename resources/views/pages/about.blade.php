@extends('layouts.main')

@section('styles')

@endsection

@section('content')
	<section id="top">
		<div class="uk-container uk-text-center">
			<div class="title wow bounceInUp">
				<h1><span>{!! $titre !!}</span></h1>
			</div>

			<div class="about">
				<div class="uk-child-width-expand@s uk-text-center" data-uk-grid>
					<div class="wow bounceInLeft">
						<img src="{{ wp_get_attachment_image_src($logo, 'logo')[0] }}" alt="Gogo08">
					</div>
					<div class="wow bounceInRight">
						{!! $intro_about !!}

						<div class="uk-container uk-container-xsmall uk-text-center">
				      <div class="social uk-flex-center uk-child-width-expand" data-uk-grid>
				        <div><a href="{!! get_option('th_youtube') !!}" target="_blank" class="social_icon youtube"><i class="fab fa-youtube"></i></a></div>
				        <div><a href="{!! get_option('th_twitch') !!}" target="_blank" class="social_icon twitch"><i class="fab fa-twitch"></i></a></div>
				        <div><a href="{!! get_option('th_discord') !!}" target="_blank" class="social_icon discord"><i class="fab fa-discord"></i></a></div>
				        <div><a href="{!! get_option('th_twitter') !!}" target="_blank" class="social_icon twitter"><i class="fab fa-twitter"></i></a></div>
				        <div><a href="{!! get_option('th_instagram') !!}" target="_blank" class="social_icon instagram"><i class="fab fa-instagram"></i></a></div>
				        <div><a href="{!! get_option('th_github') !!}" target="_blank" class="social_icon github"><i class="fab fa-github"></i></a></div>
				      </div>
				    </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="faq wow bounceInLeft">
		<div class="uk-container uk-container-xsmall">

			<div class="title uk-text-center">
				<h2><span>{!! $titre_faq !!}</span></h2>
			</div>
			{!! do_shortcode($faq_shortcode) !!}

		</div>
	</section>

	<section id="partenaires wow bounceInUp">
		<div class="uk-container uk-container-xsmall uk-text-center">
			<div class="title">
				<h2><span>{!! $titre_partenaire !!}</span></h2>
			</div>

			<div class="partenaires_slider" data-uk-slider="autoplay: true">
				<div class="uk-position-relative uk-visible-toggle">
					<div class="uk-slider-container">
						<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-1@m uk-grid">
							@foreach($list_partenaires as $item)
								<li>
									<img src="{{ wp_get_attachment_image_src($item['logo'], 'partenaire')[0] }}" alt="{!! $item['title'] !!}">
									<h3>{!! $item['title'] !!}
									<p>{!! $item['desc'] !!}</p>

									<div class="button">
										<a class="uk-button uk-button-default" target="_blank" href="{{$item['url']}}">Découvrir <i class="fas fa-chevron-right"></i></a>
									</div>
								</li>
							@endforeach
						</ul>
					</div>
					<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('javascript')

@endsection
