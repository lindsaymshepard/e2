@extends('templates.master')

@section('title')
All Products
@endsection

@section('content')

<h2>All Products</h2>

<div id='product-index'></div>

@foreach ($products as $product)
<a href='/product?id={{ $product["id"] }}'></a>
<div class='product'></div>
<div class='product-name' {{ $product['name'] }}></div>
<img class='product-thumb' src="/images/products/{{ $product['id'] }}.jpg">
@endforreach

@endsection