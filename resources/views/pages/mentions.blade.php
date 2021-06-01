@extends('layouts.main')

@section('styles')

@endsection

@section('content')

  <div id="top">
    <div class="uk-container">
      <div class="uk-text-center">
				<div class="title">
					<h2><span>{!! $top_mentions !!}</span></h2>
				</div>
      </div>
      <div class="mention">
        {!! $texte_mentions !!}
      </div>
    </div>
  </div>

@endsection

@section('javascript')

<script>
    AOS.init();
</script>

@endsection
