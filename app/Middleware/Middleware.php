<?php

namespace Junaidiar\PHP\MVC\Middleware;

interface Middleware
{
  function before(): void;
}
