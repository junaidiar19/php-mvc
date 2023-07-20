<?php

namespace Junaidiar\PHP\MVC\Controllers;

use Junaidiar\PHP\MVC\App\View;
use Junaidiar\PHP\MVC\Models\Home;

class HomeController
{
  public function index(): void
  {
    $home = Home::title();

    View::render('Home/index', $home);
  }

  public function about(): void
  {
    echo "about page";
  }
}
