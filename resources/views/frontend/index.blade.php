@extends('layout')
@section('title-user')
    Trang chủ
@endsection
@section('content-layout')
    {{--  PHP CONTENT   --}}
    {{--  CAROUSEL   --}}
    {{--  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('source/assets/frontend/images/slide1.webp') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="{{ asset('source/assets/frontend/images/slide2.jpg') }}asset('source/assets/frontend/images/slide2.jpeg')"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('source/assets/frontend/images/slide3.jpg') }}" alt="Third slide">
            </div>

        </div>
    </div>  --}}
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

    {{--  TOUR   --}}
    <div class="container my-5">
        <h3 class="title">Tour du lịch mường hoa</h3>
        <div class="container-tour" style="margin-bottom: 30px; display: flex; justify-content: space-between;">
            <div class="card-tour">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/bai_da_co_muong_hoa.jpg') }}" class="card-img-tour"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">phương đẹp trai</h5>
                        <h6 class="card-title"> siêu cấp vũ trụ </h6>
                        <br>
                        <p class="card-text-number">09347237</p>
                    </div>
                </a>
            </div>
            <div class="card-tour">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/bai_da_co_muong_hoa.jpg') }}" class="card-img-tour"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">phương đẹp trai</h5>
                        <h6 class="card-title"> siêu cấp vũ trụ </h6>
                        <br>
                        <p class="card-text-number">09347237</p>
                    </div>
                </a>
            </div>
            <div class="card-tour">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/bai_da_co_muong_hoa.jpg') }}" class="card-img-tour"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">phương đẹp trai</h5>
                        <h6 class="card-title"> siêu cấp vũ trụ </h6>
                        <br>
                        <p class="card-text-number">09347237</p>
                    </div>
                </a>
            </div>
            <div class="card-tour">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/bai_da_co_muong_hoa.jpg') }}" class="card-img-tour"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">phương đẹp trai</h5>
                        <h6 class="card-title"> siêu cấp vũ trụ </h6>
                        <br>
                        <p class="card-text-number">09347237</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{--  CUISION   --}}
    <div class="container my-5">
        <h3 class="title">Đặc sản mường hoa</h3>
        <div class="container-food " style="margin-bottom: 30px; display: flex; justify-content: space-between;">
            <div class="card-food">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/ca_suoi_nuong.jpg') }}" class="card-img-food"
                        alt="...">
                    <div class="card-body">
                        <h6 class="card-title"> đức đẹp trai</h6>
                        <h5 class="card-title">phương đẹp trai</h5>
                    </div>
                </a>
            </div>
            <div class="card-food">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/ca_suoi_nuong.jpg') }}" class="card-img-food"
                        alt="...">
                    <div class="card-body">
                        <h6 class="card-title"> đức đẹp trai</h6>
                        <h5 class="card-title">phương đẹp trai</h5>
                    </div>
                </a>
            </div>
            <div class="card-food">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/ca_suoi_nuong.jpg') }}" class="card-img-food"
                        alt="...">
                    <div class="card-body">
                        <h6 class="card-title"> đức đẹp trai</h6>
                        <h5 class="card-title">phương đẹp trai</h5>
                    </div>
                </a>
            </div>
            <div class="card-food">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/ca_suoi_nuong.jpg') }}" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h6 class="card-title"> đức đẹp trai</h6>
                        <h5 class="card-title">phương đẹp trai</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{--  FEEDBACK   --}}
    <div class="container my-5">
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
    </div>
    {{--  TIPTRAVEL   --}}
    <div class="container my-5">
        <h3 class="title">Cẩm nang du lịch</h3>
        <div class="container-handbook " style="margin-bottom: 30px; display: flex; justify-content: space-between;">
            <div class="card-handbook">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/BAMBOO_SAPA_HOTEL.jpg') }}" class="card-img-food"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text" style="text-align: center;">một con vịt xòe ra hai cái cánh</p>
                        <p class="card-text">22.1.2024</p>
                    </div>
                </a>
            </div>
            <div class="card-handbook">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/BAMBOO_SAPA_HOTEL.jpg') }}" class="card-img-food"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text" style="text-align: center;">một con vịt xòe ra hai cái cánh</p>
                        <p class="card-text">22.1.2024</p>
                    </div>
                </a>
            </div>
            <div class="card-handbook">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/BAMBOO_SAPA_HOTEL.jpg') }}" class="card-img-food"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text" style="text-align: center;">một con vịt xòe ra hai cái cánh</p>
                        <p class="card-text">22.1.2024</p>
                    </div>
                </a>
            </div>
            <div class="card-handbook">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/BAMBOO_SAPA_HOTEL.jpg') }}" class="card-img-food"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text" style="text-align: center;">một con vịt xòe ra hai cái cánh</p>
                        <p class="card-text">22.1.2024</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
