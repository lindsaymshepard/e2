<?php

namespace App\Products;

class ProductController extends ProductController

{
    private $products; 

    public function _construct($app) 
    {
        parent::_construct($app);
        $this->products = new Products($this->app->path('database/products.json'));

    }


    public function index ()
    {


        return $this->app->view('products.index', ['products' => $this->products->getAll()]);
    }

    public function show() 
    {   
        
        $id = $this->app->param('id');

        $product = $this->products->getByID($id);

        if (is_null($product)) {
            return $this->app->view('errors.404');
        }

        return $this->app->view('products.show', ['product'=> $product]);
    }
}