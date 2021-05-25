<?php
use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Page;
use Themosis\Support\Section;

$page = Page::make('page-theme-footer', 'Footer')->set();

$page->addSections([
  new Section('section-slug-rs', 'Réseaux sociaux')
]);

$page->addSettings([
    'section-slug-rs' => [
      Field::text('youtube', ['label' => 'Youtube']),
      Field::text('twitch', ['label' => 'Twitch']),
      Field::text('Discord', ['label' => 'discord']),
      Field::text('instagram', ['label' => 'Instagram']),
      Field::text('github', ['label' => 'GitHub']),
      Field::text('twitter', ['label' => 'Twitter'])
    ]
]);
