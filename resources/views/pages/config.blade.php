@extends('layouts.main')

@section('styles')

@endsection

@section('content')
	<section id="top">
		<div class="uk-container">
			<div class="title uk-text-center wow bounceInUp">
				<h1><span>{!! $titre !!}</span></h1>
				<p>{!! $intro !!}</p>
			</div>
		</div>
	</section>

	<section id="list_config">
		<div class="uk-container">
			<div class="uk-grid-match uk-child-width-1-2@m uk-child-width-1-1@s uk-text-center" data-uk-grid>
				<div>
	        <div class="uk-card uk-card-default uk-card-body wow bounceInLeft">
	            <h3 class="uk-card-title"><span>{!! $titre_pc !!}</span></h3>
							<p><span><i class="icon-case-data"></i></span> {{ $boitier }}</p>
							<p><span><i class="icon-battery-full"></i></span> {{ $alim }}</p>
							<p><span><i class="icon-graphics-card"></i></span> {{ $cg }}</p>
							<p><span><i class="fas fa-memory"></i></span> {{ $ram }}</p>
							<p><span><i class="icon-hardware"></i></span> {{ $cm }}</p>
							<p><span><i class="fas fa-microchip"></i></span> {{ $proco }}</p>
							<p><span><i class="icon-fan-propellers"></i></span> {{ $wc }}</p>
							<p><span><i class="icon-hdd"></i></span> {{ $dd }}</p>
							<p><span><i class="icon-hdd"></i></span> {{ $ssd1 }}</p>
							<p><span><i class="icon-hdd"></i></span> {{ $ssd2 }}</p>
	        </div>
		    </div>
				<div>
	        <div class="uk-card uk-card-default uk-card-body wow bounceInRight">
	            <h3 class="uk-card-title"><span>{!! $titre_hardware !!}</span></h3>
	            <p><span><i class="fas fa-desktop"></i></span> {{ $screen }}</p>
							<p><span><i class="icon-mouse"></i></span> {{ $souris }}</p>
							<p><span><i class="icon-keyboard"></i></span> {{ $clavier }}</p>
							<p><span><i class="icon-headphone"></i></span> {{ $casque }}</p>
							<p><span><i class="fas fa-microphone"></i></span> {{ $micro }}</p>
							<p><span><i class="icon-speaker"></i></span> {{ $enceinte }}</p>
							<p><span><i class="fas fa-video"></i></span> {{ $cam }}</p>
							<p><span><i class="icon-settings"></i></span> {{ $sd }}</p>
							<p><span><i class="icon-lamp"></i></span> {{ $kl }}</p>
	        </div>
		    </div>
			</div>
		</div>
	<section>

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
