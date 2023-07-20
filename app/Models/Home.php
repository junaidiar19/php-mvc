<?php

namespace Junaidiar\PHP\MVC\Models;

class Home
{
  public static function title()
  {
    $data = [
      "title" => "Home Page",
      "content" => "This is home page content"
    ];

    return $data;
  }
}
