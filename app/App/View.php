<?php

namespace Junaidiar\PHP\MVC\App;

class View
{
  public static function render(string $view, $data)
  {
    require __DIR__ . "/../Views/$view.php";
  }
}
