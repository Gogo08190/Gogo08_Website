@extends('layouts.main')

@section('styles')

@endsection

@section('content')
	<section id="top">
		<div class="uk-container">
			<div class="title uk-text-center wow bounceInUp">
				<h1><span>{!! $titre !!}</span></h1>
				<p>{!! $intro_modpack !!}</p>
			</div>

			<div class="list_modpacks">
				@foreach($list_modpack as $item)
					<div class="uk-child-width-expand@s uk-text-center" data-uk-grid>
						<div class="wow bounceInLeft">
							<img src="{{ wp_get_attachment_image_src($item['logo'], 'modpack')[0] }}" alt="{!! $item['title'] !!}">
						</div>
						<div class="wow bounceInRight">
							<h1>{{ $item['title'] }}<br> <span>{{ $item['titre'] }}</span></h1>
							<div class="categories uk-flex-center uk-child-width-1-4@m uk-child-width-1-2@s uk-text-center" data-uk-grid>
								@foreach($item['categorie'] as $key => $value)
									<div><h3>{{ $value }}</h3></div>
								@endforeach
							</div>
							<p>{!! $item['desc'] !!}</p>
							<div class="button">
								<a class="uk-button uk-button-default" target="_blank" href="{{$item['url']}}">Découvrir <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					</div>

				@endforeach
			</div>
		</div>
	</section>

	<section id="partenaires">
		<div class="uk-container uk-container-xsmall uk-text-center wow bounceInUp">
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
