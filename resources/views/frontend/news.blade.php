@extends('layout')
@section('title-user')
   Tin tức
@endsection
@section('content-layout')
    <div class="container pt-4">
        <div class="news1" style="display: flex; justify-content: center;">
            <div class="col-md-7">
                <img src="{{ asset('source/assets/frontend/images/BAMBOO_SAPA_HOTEL.jpg') }}" class="img-news"
                    style="width: 100%; height: 350px;" alt="">
            </div>
            <div class="col-md-5" style="margin: 30px; ">
                <div class="news1-title">
                    <h3>Tin mới</h3>
                </div>
                <ul class="list-news1 list-group-flush">

                    <a class="list-group-item" href="">
                        <li>mùa hoa siêu đẹp</li>
                    </a>
                    <a class="list-group-item" href="">
                        <li>mùa hoa siêu đẹp</li>
                    </a>
                    <a class="list-group-item" href="">
                        <li>mùa hoa siêu đẹp</li>
                    </a>
                    <a class="list-group-item" href="">
                        <li>mùa hoa siêu đẹp</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <h3 class="title">Tin tức & sự kiện</h3>
        <div class="news2 " style="margin-bottom: 30px; display: flex; justify-content: space-between;">
            <div class="card-news2 ">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/BAMBOO_SAPA_HOTEL.jpg') }}" class="img-news"
                        width="100%" alt="...">
                    <div class="card-body">
                        <h4 class="new2-title" style="text-align: center;">Khách sạn villa chính thức khai trương</h4>
                        <p class="new2-text" style="text-align: justify;">22.1.2024</p>
                        <p class="new2-text" style="text-align:justify; font-size: 12px">
                            ngày 28/1/2024 khách sạn đã chính thức trở thành khách sạn đầu tiên ở mường hoa khai trương là
                            khách sạn 3 sao</p>
                    </div>
                </a>
            </div>
            <div class="card-news2 px-4">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/BAMBOO_SAPA_HOTEL.jpg') }}" class="img-news"
                        width="100%" alt="...">
                    <div class="card-body">
                        <h4 class="new2-title" style="text-align: center;">Khách sạn villa chính thức khai trương</h4>
                        <p class="new2-text" style="text-align: justify;">22.1.2024</p>
                        <p class="new2-text" style="text-align:justify; font-size: 12px">
                            ngày 28/1/2024 khách sạn đã chính thức trở thành khách sạn đầu tiên ở mường hoa khai trương là
                            khách sạn 3 sao</p>
                    </div>
                </a>
            </div>
            <div class="card-news2">
                <a href="#">
                    <img src="{{ asset('source/assets/frontend/images/BAMBOO_SAPA_HOTEL.jpg') }}" class="img-news"
                        width="100%" alt="...">
                    <div class="card-body">
                        <h4 class="new2-title" style="text-align: center;">Khách sạn villa chính thức khai trương</h4>
                        <p class="new2-text" style="text-align: justify;">22.1.2024</p>
                        <p class="new2-text" style="text-align:justify; font-size: 12px">
                            ngày 28/1/2024 khách sạn đã chính thức trở thành khách sạn đầu tiên ở mường hoa khai trương là
                            khách sạn 3 sao</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
