<?php

namespace Junaidiar\PHP\MVC\Controllers;

class ProductController
{
  public function index(): void
  {
    echo "Product index";
  }

  public function categories(string $productId, string $categoryId): void
  {
    echo "Product $productId categories $categoryId";
  }
}
