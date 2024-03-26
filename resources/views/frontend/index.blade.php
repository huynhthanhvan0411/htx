@extends('layout')
@section('title-user')
    Trang chủ
@endsection
@section('content-layout')
    {{--  PHP CONTENT   --}}
    {{--  CAROUSEL   --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($banners as $key => $banner)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($banners as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img class="d-block w-100" src="{{ asset('source/images/banner/' . $banner->image) }}"
                        alt="{{ $banner->name }}">
                </div>
            @endforeach
        </div>
    </div>
    {{--  CUISION   --}}
    <div class="container my-5">
        <h3 class="title">Sản phẩm tại mường hoa</h3>
        <div class="row">

            @foreach ($latest_product as $lt)
                <div class="col-3 information_products">
                    <a href="{{ route('detailProduct', $lt->id) }}" style="text-decoration: none;">
                        <img class='picture' src="{{ asset('source/images/product/' . $lt->image) }}"
                            alt="{{ $lt->name }}">
                        <p class="name">{{ $lt->name }}</p>
                        <p class="price"><b>{{ number_format($lt->price) }} VNĐ</b></p>
                    </a>
                    <button class="btnCart">
                        <a href="{{ route('detailProduct', $lt->id) }}"> Thêm giỏ hàng</a>
                    </button>
                </div>
            @endforeach
        </div>
    </div>
    {{--  FEEDBACK   --}}
    {{-- <div class="container my-5">
        <h3 class="title">Cảm nhận của khách hàng</h3>
        <div class="container-comment" style="margin-bottom: 30px; display: flex; justify-content: space-between;">
            <div class="card-comment">
                <a href="">
                    <div class="card-comment mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/assets/frontend/images/bep_muong_hoa.webp') }}"
                                    class="img-fluid " alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card-comment">
                <a href="">
                    <div class="card-comment mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('source/assets/frontend/images/bep_muong_hoa.webp') }}"
                                    class="img-fluid " alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div> --}}
    {{--  NEWS  --}}
    <div class="container my-5">
        <h3 class="title">tin tức mới nhất</h3>
        <div class="news2 row " style="margin-bottom: 30px; display: flex; justify-content: space-between;">
            @foreach ($latest_news as $item)
                <div class="card-news2 col-3">
                    <a href="{{ route('getDetailNews', $item->id) }}">
                        <img style="height: 270px; width: 250px;" src="{{ asset('source/images/news/' . $item->image) }}"
                            class="img-news" width="100%" alt="...">
                        <div class="card-body">
                            <h4 class="new2-title" style="text-align: left;">{{ $item->title }}</h4>
                            <p class="new2-text" style="text-align: justify;">{{ $item->created_at->format('d.m.Y') }}</p>
                            <p class="new2-text" style="text-align: justify; font-size: 12px;">
                                {{ $item->content }}
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
