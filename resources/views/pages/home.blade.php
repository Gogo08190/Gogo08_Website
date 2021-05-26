@extends('layouts.main')

@section('styles')

@endsection

@section('content')
	<section id="top">
		<div class="uk-container uk-text-center">
			<div class="title">
				<h2><span>Le live</span></h2>
			</div>
			<div class="twitch_player">
				<iframe src="https://player.twitch.tv/?channel=gogo08190&parent=gogo08.fr" frameborder="0" allowfullscreen="true" scrolling="no" height="500" width="742"></iframe>
				<iframe
				  id="chat_embed"
				  src="https://www.twitch.tv/embed/gogo08190/chat?parent=gogo08.fr"
				  height="500"
				  width="350">
				</iframe>
			</div>
		</div>
	</section>

	<section id="modo">
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
						<p>{{ $item['desc'] }}</p>
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
@endsection

@section('javascript')

@endsection
