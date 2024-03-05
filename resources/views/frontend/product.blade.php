@extends('layout')
@section('title-user')
    Sản phẩm
@endsection
@section('content-layout')
    <div class="wrapper container py-4">
        {{-- Hiển thị sản phẩm theo từng danh mục --}}
        @foreach ($productsByCategory as $categoryName => $products)
            <div class="product--category">
                <h3 class="title">{{ $categoryName }}</h3>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-3 information_products">
                            <a href="{{ route('detailProduct', $product->id) }}" style="text-decoration: none;">
                                <img class='picture' src="{{ asset('source/images/product/' . $product->image) }}"
                                    alt="{{ $product->name }}">
                                <p class="name">{{ $product->name }}</p>
                                <p class="price"><b>{{ number_format($product->price) }} VNĐ</b></p>
                            </a>
                            <button class="btnCart">Thêm giỏ hàng</button>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
