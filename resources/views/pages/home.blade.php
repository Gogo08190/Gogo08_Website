@extends('layouts.main')

@section('styles')

@endsection

@section('content')
	<section id="top" data-aos="fade-up">
		<div class="uk-container uk-text-center">
			<div class="title">
				<h2><span>Le live</span></h2>
			</div>
			<div class="twitch_player">
				<iframe src="https://player.twitch.tv/?channel=gogo08190&parent=gogo08.fr" frameborder="0" allowfullscreen="true" scrolling="no" height="500" width="742"></iframe>
				<iframe title="chat" id="stream-chat" height="500" width="350" style="border: none;" src="https://www.twitch.tv/embed/gogo08190/chat?darkpopout&parent=gogo08.fr"></iframe>
			</div>
			<div class="info">
				<p>L'abonnement est le meilleur moyen de m'apporter ton soutien tout en obtenant des privilèges.</p>
				<div class="button">
					<a class="uk-button uk-button-default" target="_blank" href="https://secure.twitch.tv/products/gogo08190">S'abonnez <i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</section>

	<section id="modo" data-aos="fade-right">
		<div class="uk-container uk-text-center">
			<div class="title">
				<h2><span>La Team</span></h2>
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

	<section id="partenaires">
		<div class="uk-container uk-container-xsmall uk-text-center">
			<div class="title">
				<h2><span>Les partenaires</span></h2>
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

<script>
    AOS.init();
</script>

@endsection
