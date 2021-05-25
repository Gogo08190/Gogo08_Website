<?php
use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Page;
use Themosis\Support\Section;

$page = Page::make('page-theme-footer', 'Footer')->set();

$page->addSections([
  new Section('section-slug-copyright', 'Copyright')
]);

$page->addSettings([
    'section-slug-copyright' => [
		Field::text('copyright_texte', ['label' => 'Copyright']),
    ]
]);
