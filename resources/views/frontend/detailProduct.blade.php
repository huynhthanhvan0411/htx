@extends('layout')
@section('title-user')
    Chi tiết sản phẩm
@endsection
@section('content-layout')
    <div class="detail container  py-4">
        <div class="  picture--product ">
            <img src="{{ asset('source/assets/frontend/images/thit_trau_gac_bep.jpg') }}">
        </div>
        <div class=" information_product">
            <h3>CƠM LAM</h3>
            <p class="discount--detail"> <span>150,000</span> VND</p>
            <p>NHÃN HIỆU: ĐẶC SẢN MƯỜNG HOA</p>
            <p>MÔ TẢ: <span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, qui!</span>
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
    <div class="py-4 container">
        <h3 class="title">SẢN PHẨM LIÊN QUAN</h3>
        <div class="row">
            <div class="col-3 information_products">
                <a href="{{ route('detailProduct') }}" style="text-decoration: none;">
                    <img class='picture' src="{{ asset('source/assets/frontend/images/thit_trau_gac_bep.jpg') }}"
                        alt="">
                    <p class="name">NẤM HƯƠNG RỪNG HOA</p>
                    <p class="price"><b>150.000 VNĐ</b></p>
                </a>

                <button class="btnCart">Thêm giỏ hàng</button>
            </div>
            <div class="col-3 information_products">
                <a href="#" style="text-decoration: none;">
                    <img class='picture' src="{{ asset('source/assets/frontend/images/thit_trau_gac_bep.jpg') }}"
                        alt="">
                    <p class="name">NẤM HƯƠNG RỪNG HOA</p>
                    <p class="price"><b>150.000 VNĐ</b></p>
                </a>
                <button class="btnCart">Thêm giỏ hàng</button>
            </div>
            <div class="col-3 information_products">
                <a href="#" style="text-decoration: none;">
                    <img class='picture' src="{{ asset('source/assets/frontend/images/thit_trau_gac_bep.jpg') }}"
                        alt="">
                    <p class="name">NẤM HƯƠNG RỪNG HOA</p>
                    <p class="price"><b>150.000 VNĐ</b></p>
                </a>
                <button class="btnCart">Thêm giỏ hàng</button>
            </div>
            <div class="col-3 information_products">
                <a href="#" style="text-decoration: none;">
                    <img class='picture' src="{{ asset('source/assets/frontend/images/thit_trau_gac_bep.jpg') }}"
                        alt="">
                    <p class="name">NẤM HƯƠNG RỪNG HOA</p>
                    <p class="price"><b>150.000 VNĐ</b></p>
                </a>
                <button class="btnCart">Thêm giỏ hàng</button>
            </div>
        </div>
    </div>
@endsection
