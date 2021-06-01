@extends('layouts.main')

@section('content')
	<section id="top">
		<div class="uk-container uk-text-center">
			<div class="title wow bounceInUp">
				<h1><span>{!! $titre !!}</span></h1>
			</div>

			<div class="youtube_video wow bounceInLeft">
				{!! do_shortcode($shortcode) !!}
			</div>
		</div>
	</section>

	<section id="playlist" class="wow bounceInRight">
		<div class="uk-container uk-text-center">
			<div class="title">
				<h2><span>{!! $titre_playlist !!}</span></h2>
			</div>

			<div class="list_playlist">
				<div class="playlist uk-grid-match uk-child-width-1-3@m uk-child-width-1-3@s uk-text-center" data-uk-grid>
					@foreach($list_playlist as $item)
						<div>
							<iframe width="560" height="210" src="https://www.youtube.com/embed/videoseries?list={{ $item['url'] }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					@endforeach
				</div>
				<div class="button">
					<a class="uk-button uk-button-default" target="_blank" href="https://www.youtube.com/user/gogo08190/playlists">Voir plus de playlist <i class="fas fa-chevron-right"></i></a>
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
