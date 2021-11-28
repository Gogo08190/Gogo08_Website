@extends('layouts.main')

@section('content')

  <div id="top">
    <div class="uk-container">
      <div class="uk-text-center">
				<div class="title">
					<h2><span>{!! $top_roulette !!}</span></h2>
          <p>{!! $texte_roulette !!}</p>
				</div>
      </div>
      <div class="roulette">
        <button id="spin">Spin</button>

        <span class="arrow"></span>

        <div class="container">
          <div class="one">1</div>
          <div class="two">2</div>
          <div class="three">3</div>
          <div class="four">4</div>
          <div class="five">5</div>
          <div class="six">6</div>
          <div class="seven">7</div>
          <div class="eight">8</div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('javascript')

  <script>
    let container = document.querySelector(".container");
    let btn = document.getElementById("spin");
    let number = Math.ceil(Math.random() * 1000);

    btn.onclick = function () {
    	container.style.transform = "rotate(" + number + "deg)";
    	number += Math.ceil(Math.random() * 1000);
    }
  </script>

@endsection
