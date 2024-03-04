@extends('layout')
@section('title-user')
    Sản phẩm
@endsection
@section('content-layout')
    <div class="wrapper container py-4">
        {{--  best product  --}}
        <div class="product--bestSeller">
            @foreach ($products as $pr)
                <h3 class="title"></h3>
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
            @endforeach
            <h3 class="title">SẢN PHẨM TIÊU BIỂU</h3>
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


        {{--  cuision  --}}
        <div class='cuision py-4'>
            <h3 class="title">ĐẶC SẢN MƯỜNG HOA</h3>
            <div class="row">
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
        {{--  farbric  --}}
        <div class='farbric py-4'>
            <h3 class="title">THỔ CẨM DỆT MAY</h3>
            <div class="row">
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
        {{--  fruit  --}}
        <div class='fruit'>
            <h3 class="title">HOA QUẢ BỐN MÙA</h3>
            <div class="row">
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
        {{--  beverage  --}}
        <div class='beverage'>
            <h3 class="title">THỨC UỐNG</h3>
            <div class="row">
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
    </div>
@endsection
