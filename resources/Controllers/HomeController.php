<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function index() {
  	  return view('pages.home');
    }
}
