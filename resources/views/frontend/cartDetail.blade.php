@extends('layout')
@section('title-user')
    Chi tiết giỏ hàng
@endsection
@section('content-layout')
    <div class="container">
        <div class="icon-cart" style="font-size: 20px;font-weight: bold;margin-top: 20px;">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>| Giỏ hàng của bạn</span>
        </div>
        <div class="title-cart">
            <span class="tt0">STT</span>
            <span class="tt1">Sản Phẩm</span>
            <span class="tt2">Đơn giá</span>
            <span class="tt3">Số lượng</span>
            <span class="tt4">Thành tiền</span>
            <span class="tt5">Thao tác</span>
        </div>
    </div>
    <div class="container">
        <div class="cart">
            <div class="item-cart">
                <div class="number" style="margin-right: 15px;">1</div>
                <div class="img-cart">
                    <img src="/picture/lẩu cá tầm.jpg" style="width: 100%;" alt="">
                </div>
                <div class="name">Lẩu mường hoa</div>
                <div class="price">1000000 đ</div>
                <div class="quantity">
                    <button class="quantity-btn minus-btn">-</button>
                    <input type="number" class="quantity-num" value="1">
                    <button class="quantity-btn plus-btn">+</button>
                </div>
                <div class="total-price" style="margin-left: 50px;margin-right: 30px;">1000000 đ</div>
                <div class="action">
                    <a href=""><i class="fa-solid fa-trash"></i></a>
                </div>
            </div>
        </div>
        <div>
        </div>
    </div>
    <div class="container">
        <div class="item-order">

            <div class="order">
                <button>
                    <a href="{{ route('getCheckout') }}">Đặt mua</a>
                </button>
            </div>

        </div>
    </div>
@endsection
