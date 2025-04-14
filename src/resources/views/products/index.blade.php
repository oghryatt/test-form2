@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('content')
<div class="container">
    <header class="header">
        
        <h2>商品一覧</h2>
         <div class="add-product">
        <a href="{{ route('products.create') }}">
            <button type="button">+ 商品を追加</button>
        </a>
    </div>
    </header>
    <div class="search-bar">
        <form method="GET" action="{{ route('products.index') }}">
            <input type="text" name="search" placeholder="商品名で検索" value="{{ request('search') }}">
            <button type="submit">検索</button>
        </form>
    </div>

    <div class="sort-dropdown">
        <form method="GET" action="{{ route('products.index') }}">
            <label for="price-sort">価格順で表示:</label>
            <form method="GET" action="{{ route('products.index') }}">
   <p> <select id="price-sort" name="sort" onchange="this.form.submit()">
        <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>低い順</option>
        <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>高い順</option>
    </select></p>
</form>

            
        </form>
    </div>

    <div class="product-list">
            @foreach ($products as $product)
        <a href="{{ route('products.show', $product->id) }}" class="product-item"> 
           <p> <img src="{{ asset('storage/fruits-img/' . $product->image) }}" alt="{{ $product->name }}">
           <p style="display: inline;">{{ $product->name }}</p>
           <span style="display: inline; margin-left: 10px;">¥{{ number_format($product->price) }}</span>
        </p>
        </a> 
    @endforeach

    </div>

    <div class="pagination">
    <a href="{{ $products->previousPageUrl() }}">&lt;</a>
    <a href="{{ $products->url(1) }}" class="{{ $products->currentPage() == 1 ? 'active' : '' }}">1</a>
    <a href="{{ $products->url(2) }}" class="{{ $products->currentPage() == 2 ? 'active' : '' }}">2</a>
    <a href="{{ $products->url(3) }}" class="{{ $products->currentPage() == 3 ? 'active' : '' }}">3</a>
    <a href="{{ $products->nextPageUrl() }}">&gt;</a>
</div>

   
@endsection
