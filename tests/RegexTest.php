<?php

namespace Junaidiar\PHP\MVC;

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
  /** @test */
  public function regex()
  {
    $path = '/products/12345/categories/abcd';

    $pattern = '#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#';

    $result = preg_match($pattern, $path, $variables);

    self::assertEquals(1, $result);

    var_dump($variables);

    array_shift($variables);
    var_dump($variables);
  }
}
