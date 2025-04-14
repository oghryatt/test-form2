@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="title">商品登録</div>
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="productName">商品名 <span class="required">必須</span></label>
            <input type="text" id="productName" name="name" placeholder="商品名を入力" value="{{ old('name') }}">
            @error('name') <p class="error" style="color:red;">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <label for="price">値段 <span class="required">必須</span></label>
            <input type="text" id="price" name="price" placeholder="値段を入力" value="{{ old('price') }}">
            @error('price') <p class="error" style="color:red;">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <label for="productImage">商品画像 <span class="required">必須</span></label>
            <input type="file" id="productImage" name="image">
            @error('image') <p class="error" style="color:red;">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <label>季節 <span class="required">必須</span> <span class="optional">複数選択可</span></label>
            <div class="season">
                <label><input type="checkbox" name="season[]" value="春" {{ is_array(old('season')) && in_array('春', old('season')) ? 'checked' : '' }}> 春</label>
                <label><input type="checkbox" name="season[]" value="夏" {{ is_array(old('season')) && in_array('夏', old('season')) ? 'checked' : '' }}> 夏</label>
                <label><input type="checkbox" name="season[]" value="秋" {{ is_array(old('season')) && in_array('秋', old('season')) ? 'checked' : '' }}> 秋</label>
                <label><input type="checkbox" name="season[]" value="冬" {{ is_array(old('season')) && in_array('冬', old('season')) ? 'checked' : '' }}> 冬</label>
            </div>
            @error('season') <p class="error" style="color:red;">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <label for="description">商品説明 <span class="required">必須</span></label>
            <textarea id="description" name="description" placeholder="商品の説明を入力">{{ old('description') }}</textarea>
            @error('description') <p class="error" style="color:red;">{{ $message }}</p> @enderror
        </div>
        <div class="buttons">
            <button type="button" class="back" onclick="location.href='{{ route('products.index') }}'">戻る</button>
            <button type="submit" class="submit">登録</button>
        </div>
    </form>
</div>
@endsection
