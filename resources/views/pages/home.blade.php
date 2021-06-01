@extends('layouts.main')

@endsection

@section('content')
	<section id="top">
		<div class="uk-container uk-text-center">
			<div class="title wow bounceInUp">
				<h1><span>{!! $titre !!}</span></h1>
			</div>
			<div class="stream wow bounceInRight" data-uk-grid>
				<div class="live uk-width-2-3">
					<iframe src="https://player.twitch.tv/?channel=gogo08190&parent=gogo08.fr" frameborder="0" allowfullscreen="true" scrolling="no" height="100%" width="100%"></iframe>
				</div>
				<div class="chat uk-width-1-3">
					<iframe title="chat" id="stream-chat" height="100%" width="100%" style="border: none;" src="https://www.twitch.tv/embed/gogo08190/chat?darkpopout&parent=gogo08.fr"></iframe>
				</div>
			</div>
			<div class="info wow bounceInLeft">
				<p>{!! $twitch_desc !!}</p>
				<div class="uk-flex-center uk-child-width-1-4@m uk-child-width-1-4@s uk-text-center wow bounceInUp" data-uk-grid>
					<div>
						<div class="button">
							<a class="uk-button uk-button-default" target="_blank" href="{{ $twitch_url }}">S'abonnez <i class="fas fa-chevron-right"></i></a>
						</div>
					</div>

					<div>
						<div class="button">
							<a class="uk-button uk-button-default" target="_blank" href="{{ $twitch_don }}">Faire un don <i class="fas fa-chevron-right"></i></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="modo" class="wow bounceInLeft">
		<div class="uk-container uk-text-center">
			<div class="title">
				<h2><span>{!! $titre_team !!}</span></h2>
			</div>

			<div class="list-modos">
				<div class="modos uk-grid-match uk-child-width-1-3@m uk-child-width-1-3@s uk-text-center" data-uk-grid>
					@foreach($list_modo as $item)
					<div>
						<img class="" src="{{ wp_get_attachment_image_src($item['logo'], 'modo')[0] }}" alt="{{ $item['title']}}">
						<h3>{{ $item['title'] }}</h3>
						<p>{!! $item['desc'] !!}</p>
						<div class="modo_social uk-flex-center uk-child-width-1-6@m uk-child-width-1-6@s uk-grid-small uk-text-center" data-uk-grid>
							@if($item['youtube'])
							<div><a href="{{ $item['youtube'] }}" target="_blank" class="social_icon"><i class="fab fa-youtube"></i></a></div>
							@endif
							@if($item['twitch'])
							<div><a href="{{ $item['twitch'] }}" target="_blank" class="social_icon"><i class="fab fa-twitch"></i></a></div>
							@endif
							@if($item['twitter'])
							<div><a href="{{ $item['twitter'] }}" target="_blank" class="social_icon"><i class="fab fa-twitter"></i></a></div>
							@endif
							@if($item['github'])
							<div><a href="{{ $item['github'] }}" target="_blank" class="social_icon"><i class="fab fa-github"></i></a></div>
							@endif
						</div>
					</div>
					@endforeach
				</div>
      </div>
		</div>
	</section>

	<section id="partenaires" class="wow bounceInUp">
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
									<h3>{!! $item['title'] !!}</h3>
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
