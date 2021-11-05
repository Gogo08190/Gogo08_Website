@extends('layouts.main')

@section('content')
	<section id="top">
		<div class="uk-container uk-container-small">
			<div class="uk-text-center">
				<h1>{{ Loop::title() }}</h1>
			</div>
		</div>
	</section>

	<div id="actu">
		<div class="uk-container texte">
			{!! Loop::content() !!}
		</div>
	</div>
@endsection
