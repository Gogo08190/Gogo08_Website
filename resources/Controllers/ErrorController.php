<?php

namespace Theme\Controllers;

use Theme\Models\Post;
use Illuminate\Routing\Controller as BaseController;

class ErrorController extends BaseController
{

    public function __construct() {


    }


    public function index(Post $model) {
  	  return view('pages.error', [


      ]);
    }
}
