@extends('layout')
@section('title-user')
    Dịch vụ
@endsection
@section('content-layout')
    <div class="container">
        <div class="room-title">
            <div class="name-room">
                <h3>Phòng ngủ 2 giường nằm rộng rãi thoáng mát </h3>
            </div>
            <div class="room-contact">
                <a href=""><button type="button" class="btn-room-contact">Liên hệ tư vấn</button></a>
            </div>
        </div>
        <div class="room-img" style="margin: 20px;">
            <div class="row animate__fadeIn animate__animated">
                <div class="col-lg-7 col-md-12 col-sm-12 left">
                    <div class="">
                        <img src="./client/assets/image/PAO’S_SAPA_LEISURE_HOTEL.webp" class="img-room" alt="hình ảnh"
                            style="width: 100%;height: 500px;">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 right">
                    <div class="row gy-4">
                        <div class="col-md-12 col-12 small">
                            <div class="row mb-2">
                                <div class="col-6">
                                    <div class="">
                                        <img src="./client/assets/image/KK_SAPA_HOTEL.jpg" class="img-room" alt="hình ảnh"
                                            style="width: 100%; height: 200px;">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="">
                                        <img src="./client/assets/image/MUONG_HOA_VIEW_HOTEL.jpg" class="img-room"
                                            alt="hình ảnh" style="width: 100%; height: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-12 big">
                            <div class="image">
                                <img src="./client/assets/image/DELASOL_PHAT_LINH_SAPA.jpg" class="img-room" alt="hình ảnh"
                                    style="width: 100%; height: 268px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="room-content " style="margin: 20px; display: flex; justify-content: center;">
            <div class="room-reveiw">
                <h4>Giới thiệu phòng</h4>
                <ul class="list-reveiw-room">
                    <li>siêu đẹp</li>
                    <li>siêu rẻ</li>
                    <li> hai phòng ngủ</li>
                    <li>nhà tắm có phòng bồn ngâm</li>
                </ul>
            </div>

        </div>
    </div>
@endsection
