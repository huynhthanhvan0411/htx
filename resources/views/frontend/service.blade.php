@extends('layout')
@section('content-layout')
    <div class="container">
        <div class="service" style="display: flex; justify-content: center;">
            <div class="filter ">
                <div>
                    <h4 style="text-align: center; color: rgb(19, 16, 121);"> Bộ lọc tìm kiếm </h4>
                </div>
                <div class="start">
                    <h5 style="padding: 10px; color: rgb(19, 16, 121);">Điểm đi</h5>
                    <div class="dropdown">
                        <button class="dropdown-toggle" onclick="toggleDropdown()">---Chọn điểm đi---</button>
                        <ul class="dropdown-menu" id="myDropdown">
                            <li><a href="#">Option 1</a></li>
                            <li><a href="#">Option 2</a></li>
                            <li><a href="#">Option 3</a></li>
                        </ul>
                    </div>
                </div>
                <div class="day-numbers">
                    <h5 style="padding: 10px; color: rgb(19, 16, 121);">Số ngày đi</h5>
                    <div class="btn-group filter-day-mubers ">
                        <div class="row g-2">
                            <div class="col-6">
                                <button type="button" class="btn w-100" value="1-3">1-3 ngày</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn w-100" value="3-5">3-5 ngày</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn w-100" value="5-8">5-8 ngày</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn w-100" value="8-20">trên 8 ngày</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="day-start">
                    <h5 style="padding: 10px; color: rgb(19, 16, 121);">Ngày đi</h5>
                    <div style="text-align: center;">
                        <input type="date" id="datePicker" name="selectedDate" style="width: 90%;">
                    </div>
                </div>
                <div class="move">
                    <h5 style="padding: 10px; color: rgb(19, 16, 121);">Thông tin di chuyển</h5>
                    <div class="move1" style="margin-bottom: 10px;">
                        <h6 style="text-align: center;"> loại xe </h6>
                        <div class="row g-2">
                            <div class="col-6">
                                <button type="button" class="btn w-100">giường nằm</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn w-100">ghế ngồi</button>
                            </div>
                        </div>
                    </div>
                    <div class="move2">
                        <h6 style="text-align: center;"> chỗ ngồi </h6>
                        <div class="row g-2">
                            <div class="col-6">
                                <button type="button" class="btn w-100">16 chỗ</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn w-100">32 chỗ</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn w-100">64 chỗ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-sv" style="margin-left: 30px;">
                <div class="intro-car" style="margin-bottom: 30px;">
                    <div class="header-intro-car">
                        <h3 style="text-align: center;">Thông tin về phương tiện của chúng tôi</h3>
                        <span style="text-align: justify;">Ô tô hay xe hơi hay xe con hoặc car là loại phương tiện giao
                            thông chạy bằng 4 bánh có chở theo động cơ của chính nó.
                            Tên gọi ô-tô được nhập từ tiếng Pháp tên tiếng Pháp xuất phát từ từ auto tiếng Hy
                            Lạp, nghĩa là tự thânvà từ mobilis tiếng La Tinh, nghĩa là vận động.
                            Từ automobile ban đầu chỉ những loại xe tự di chuyển được gồm xe không ngựa và xe có động cơ.
                            Còn từ ô tô trong tiếng Việt chỉ dùng để chỉ các loại có 4 bánh. Chữ "xe hơi" bắt nguồn từ chữ
                            Hoa phát âm theo Hán Việt là khí xa.
                            Còn người Nhật gọi xe hơi là 自動車 Tự động xa nghĩa là xe tự động. Các kiểu khác nhau của xe hơi
                            gồm các loại xe: xe buýt, xe tải.</span>
                    </div>
                    <div class="-inf-car" style="margin-top: 30px;">
                        <div style=" display: flex; justify-content: space-between;">
                            <div>
                                <img src="./client/assets/image/DELASOL_PHAT_LINH_SAPA.jpg" class="card-img-food"
                                    style="margin: 10px;width: 95%; height: 60%;" alt="...">
                            </div>
                            <div>
                                <img src="./client/assets/image/DELASOL_PHAT_LINH_SAPA.jpg" class="card-img-food"
                                    style="margin: 10px;width: 95%; height: 60%;" alt="...">
                            </div>
                            <div>
                                <img src="./client/assets/image/DELASOL_PHAT_LINH_SAPA.jpg" class="card-img-food"
                                    style="margin: 10px;width: 95%; height: 60%;" alt="...">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="intro-room">
                    <div class=""style="text-align: center; margin-bottom: 15px;">
                        <h4>Các loại phòng chúng tôi có</h4>
                        <span style="font-size: 10px;">Nhấn vào ảnh để xem chi tiết phòng</span>
                    </div>
                    <div class="slider-room">
                        <div id="carouselExampleControlsRoom" class="carousel slider" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href=""><img src="./client/assets/image/slide1.webp"
                                            class="d-block w-100 slider" alt="..."></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="./client/assets/image/slide2.webp"
                                            class="d-block w-100 slider" alt="..."></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="./client/assets/image/slide3.webp"
                                            class="d-block w-100 slider" alt="..."></a>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControlsRoom" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControlsRoom" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="intro-tour">
                    <div class=""style="text-align: center; margin-bottom: 15px;">
                        <h4>Các tour nổi bật</h4>
                        <span style="font-size: 10px;">Nhấn vào ảnh để xem chi tiết tour</span>
                    </div>
                    <div class="slider-tour">
                        <div id="carouselExampleControlsTour" class="carousel slider" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href=""><img src="./client/assets/image/slide1.webp"
                                            class="d-block w-100 slider" alt="..."></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="./client/assets/image/slide2.webp"
                                            class="d-block w-100 slider" alt="..."></a>
                                </div>
                                <div class="carousel-item">
                                    <a href=""><img src="./client/assets/image/slide3.webp"
                                            class="d-block w-100 slider" alt="..."></a>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControlsTour" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControlsTour" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
