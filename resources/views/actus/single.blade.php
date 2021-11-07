@extends('layouts.main')

@section('content')
	<section id="top_actu">
		<div class="uk-container uk-container-small">
			<div class="uk-text-center">
        <div class="title wow bounceInUp">
  				<h1><span>{{ Loop::title() }}</span></h1>
					<div class="top">
						<?php
							$parentscategory ="";
							foreach((get_the_category()) as $category) {
								if ($category->category_parent == 0) {
									$parentscategory .= "$category->name";
								}
							}
						?>
			      <p class="uk-article-meta"><?php echo $parentscategory; ?> - {{ Loop::date('j F Y') }}</p>
			    </div>
  			</div>
			</div>
		</div>
	</section>

	<div id="actu">
		<div class="uk-container texte">
			{!! Loop::content() !!}
		</div>

    <div class="uk-container share uk-text-center">
      <?php
      $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>

      <div class="share-button-wrapper">
        <span>Partager</span>
        <a target="_blank" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"><i class="fab fa-twitter"></i></a>
        <a target="_blank" class="share-button share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook"><i class="fab fa-facebook"></i></a>
      </div>
    </div>

	</div>
@endsection
