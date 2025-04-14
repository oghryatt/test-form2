@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection
@section('content')
<div class="container">

    <h2>商品詳細</h2>
    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST') 

        <div class="form-group">
            <label for="file">ファイルを選択</label>
            <input type="file" id="file" name="image" accept=".png, .jpg, .jpeg">
            @error('image') <p style="color:red;">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="productName">商品名</label>
            <input type="text" id="productName" name="name" value="{{ old('name', $product->name) }}" placeholder="商品名を入力してください">
            @error('name') <p style="color:red;">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="price">値段</label>
            <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}" placeholder="値段を入力してください">
            @error('price') <p style="color:red;">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label>季節</label>
            <div>
                <label><input type="radio" name="season" value="春" {{ $product->season == '春' ? 'checked' : '' }}> 春</label>
                <label><input type="radio" name="season" value="夏" {{ $product->season == '夏' ? 'checked' : '' }}> 夏</label>
                <label><input type="radio" name="season" value="秋" {{ $product->season == '秋' ? 'checked' : '' }}> 秋</label>
                <label><input type="radio" name="season" value="冬" {{ $product->season == '冬' ? 'checked' : '' }}> 冬</label>
            </div>
            @error('season') <p style="color:red;">{{ $message }}</p> @enderror
        </div>

        <div class="form-group">
            <label for="description">商品説明</label>
            <textarea id="description" name="description" maxlength="100" placeholder="商品説明を入力してください">{{ old('description', $product->description) }}</textarea>
            @error('description') <p style="color:red;">{{ $message }}</p> @enderror
        </div>

       <div class="form-buttons">
    <form action="{{ route('products.index') }}" method="GET" style="display:inline;">
        <button type="submit">戻る</button>
    </form>

   
    <button type="submit">変更を保存</button>
</div>

    </form>
</div>
@endsection

