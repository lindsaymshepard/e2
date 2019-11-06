<?php

namespace App\Products;

class ProductController extends ProductController

{
    public function index ()
    {
        $products = new Products($this->app->path('database/products.json'));

        dump($products);

        return 'Show all the products here...';
    }
}