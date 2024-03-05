@extends('layout')
@section('title-user')
    Chi tiết sản phẩm
@endsection
@section('content-layout')
    <div class="detail container  py-4">
        <div class="  picture--product ">
            <img src="{{ asset('source/images/product/' . $product->image) }}" alt="">
        </div>
        <div class=" information_product">
            <h3>{{ $product->name }}</h3>
            <h3></h3>
            <p class="discount--detail"> <span>{{ number_format($product->sale_price) }} VND</span> <span
                    style="text-decoration: line-through;">{{ number_format($product->price) }} VND</span> </p>
            <p>NHÃN HIỆU: <span>{{ $product->category->name }}</span> </p>
            <p>Nguồn gốc <span>{{ $product->origin->address }}</span></p>
            <p>MÔ TẢ: <span> {{ $product->description }}</span>
            </p>
            <div id="buy-amount">
                <button class="plus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
                <input type="number" min="1" class="numberCart"="number" value="1">
                <button class="minus"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                    </svg>
                </button>
                <button class="add">Thêm vào giỏ hàng</button>
            </div>

        </div>
    </div>
    <hr>
    <div class="  container py-4  ">
        <h3 class="title">SẢN PHẨM LIÊN QUAN</h3>
        <div class="row">
            @foreach ($relatedProducts as $relatedProduct)
                <div class="col-3 information_products">
                    <a href="{{ route('detailProduct', $relatedProduct->id) }}" style="text-decoration: none;">
                        <img class='picture' src="{{ asset('source/images/product/' . $relatedProduct->image) }}"
                            alt="">
                        <p class="name">{{ $relatedProduct->name }}</p>
                        <p class="price"><b>{{ number_format($relatedProduct->price) }} VNĐ</b></p>
                    </a>
                    <form action="#" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $relatedProduct->id }}">
                        <!-- Các trường ẩn khác nếu cần -->
                        <button type="submit" class="btnCart">Thêm vào giỏ hàng</button>
                    </form>
                </div>
            @endforeach
        </div>
        <hr>
    </div>
@endsection
