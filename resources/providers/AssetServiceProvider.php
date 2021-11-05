<?php

namespace Theme\Providers;

use Illuminate\Support\ServiceProvider;
use Themosis\Core\ThemeManager;
use Themosis\Support\Facades\Asset;

class AssetServiceProvider extends ServiceProvider
{
    /**
     * Theme Assets
     *
     * Here we define the loaded assets from our previously defined
     * "dist" directory. Assets sources are located under the root "assets"
     * directory and are then compiled, thanks to Laravel Mix, to the "dist"
     * folder.
     *
     * @see https://laravel-mix.com/
     */
    public function register()
    {
        /** @var ThemeManager $theme */
        $theme = $this->app->make('wp.theme');

        /* CSS */
        Asset::add('theme_uikit_css', 'https://cdn.jsdelivr.net/npm/uikit@3.8.0/dist/css/uikit.min.css', [], $theme->getHeader('version'))->to('front');
        Asset::add('theme_custom_css', 'css/custom.min.css', [], $theme->getHeader('version'))->to('front');

        /* JS */
        Asset::add('theme_uikit_js', 'https://cdn.jsdelivr.net/npm/uikit@3.8.0/dist/js/uikit.min.js', [], $theme->getHeader('version'))->to('front');
        Asset::add('theme_custom_js', 'js/custom.min.js', [], $theme->getHeader('version'))->to('front');
    }
}
