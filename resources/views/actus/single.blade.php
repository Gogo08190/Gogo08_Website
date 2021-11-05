@extends('layouts.main')

@section('content')
	<section id="top_actu">
		<div class="uk-container uk-container-small">
			<div class="uk-text-center">
        <div class="title wow bounceInUp">
  				<h1><span>{{ Loop::title() }}</span></h1>
  			</div>
			</div>
		</div>
	</section>

	<div id="actu">
		<div class="uk-container texte">
			{!! Loop::content() !!}
		</div>
	</div>
@endsection
