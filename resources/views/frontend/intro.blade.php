@extends('layout')
@section('title-user')
   Giới thiệu
@endsection
@section('content-layout')
    {{--  about us   --}}
    <div class="intro pt-5 container ">
        <div class="row g-0">
            <div class="col-md-6">
                <div class="intro-body ">
                    <h5>Lịch sử hình thành</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis
                        dolor ipsam reiciendis dolore esse officiis nam, nisi aspernatur pariatur. Eius beatae repellat
                        suscipit porro aut ad aperiam, nostrum debitis.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, corporis. Beatae omnis, architecto
                        obcaecati sapiente vero vel maiores earum veritatis alias, nesciunt vitae illum dolore atque? Ad
                        voluptates doloremque repellendus.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis
                        dolor ipsam reiciendis dolore esse officiis nam, nisi aspernatur pariatur. Eius beatae repellat
                        suscipit porro aut ad aperiam, nostrum debitis.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, corporis. Beatae omnis, architecto
                        obcaecati sapiente vero vel maiores earum veritatis alias, nesciunt vitae illum dolore atque? Ad
                        voluptates doloremque repellendus.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('source/assets/frontend/images/tau_hoa_leo_nui.jpeg') }}" class="img-intro"
                    style="width: 100%;height: auto;" alt="...">
            </div>
        </div>
        <div class="row g-0 pt-5">
            <div class="col-md-6">
                <img src="{{ asset('source/assets/frontend/images/tau_hoa_leo_nui.jpeg') }}" class="img-intro"
                    style="width: 100%; height: auto;" alt="...">
            </div>
            <div class="col-md-6">
                <div class="intro-body">
                    <h5>Về chúng tôi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis
                        dolor ipsam reiciendis dolore esse officiis nam, nisi aspernatur pariatur. Eius beatae repellat
                        suscipit porro aut ad aperiam, nostrum debitis.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, corporis. Beatae omnis, architecto
                        obcaecati sapiente vero vel maiores earum veritatis alias, nesciunt vitae illum dolore atque? Ad
                        voluptates doloremque repellendus.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis
                        dolor ipsam reiciendis dolore esse officiis nam, nisi aspernatur pariatur. Eius beatae repellat
                        suscipit porro aut ad aperiam, nostrum debitis.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, corporis. Beatae omnis, architecto
                        obcaecati sapiente vero vel maiores earum veritatis alias, nesciunt vitae illum dolore atque? Ad
                        voluptates doloremque repellendus.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mission container py-4">
        <h3 class="title">SỨ MỆNH DOANH NGHIỆP</h3>
        <div class="mission--card animate__animated animate__pulse">
            <div class="mission--item">
                <h5 class="card-title">Phương châm</h5>
                <ul>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                </ul>
            </div>
            <div class="mission--item">
                <h5 class="card-title">Sứ mệnh</h5>
                <ul>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                </ul>
            </div>
            <div class="mission--item">
                <h5 class="card-title">Tầm nhìn</h5>
                <ul>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                    <li><i class="fa fa-arrow-right"></i>Lorem, ipsum dolor.lorem yuhikkk</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
