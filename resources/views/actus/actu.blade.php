@extends('layouts.main')

@section('content')
	<section id="top">
		<div class="uk-container uk-text-center">
			<div class="title wow bounceInUp">
				<h1><span>{!! $titre !!}</span></h1>
				<p>{!! $desc !!}</p>
			</div>
		</div>
	</section>

  <div id="actus">
		<div class="uk-container">
			<div class="actus uk-grid">
					{!! do_shortcode($shortcode) !!}
			</div>
		</div>
	</div>

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

@section('javascript')

	<script src="{{ plugins_url() }}/ajax-load-more-filters/dist/js/filters.min.js"></script>
	<script>
	/* <![CDATA[ */
	var alm_localize = {"ajaxurl":"{{ get_home_url() }}/cms/wp-admin/admin-ajax.php","alm_nonce":"{{ wp_create_nonce('ajax_load_more_nonce') }}","pluginurl":"{{ plugins_url() }}/ajax-load-more","scrolltop":"false","speed":"200","ga_debug":"false","results_text":"Viewing {post_count} of {total_posts} results.","no_results_text":"No results found.","alm_debug":""};
	var ajax_load_more_1_vars = {"id":"1"};
	/* ]]> */
	</script>

	<script src="{{ plugins_url() }}/ajax-load-more/core/dist/js/ajax-load-more.min.js"></script>

@endsection
