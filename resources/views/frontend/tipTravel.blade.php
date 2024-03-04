@extends('layout')
@section('title-user')
    Cẩm nang du lịch
@endsection
@section('content-layout')
    <div class="container">
        <div class="tips-travel">
            <img src="{{ asset('source/assets/frontend/images/tau_hoa_leo_nui.jpeg') }}" style="width: 100%; height: 400px;"
                alt="">
            <span class="caption-tips">khám phá thung lũng mường hoa cùng HTX mường hoa</span>
            <button class="button-tips"><a href="">dịch vụ của chúng tôi</a></button>
        </div>
    </div>
    <div class="container" style="margin-bottom: 30px;">
        <div style="text-align: center;">
            <h3 style="font-weight: bold;">Cẩm nang du lịch</h3>
            <p style="font-style: italic; font-weight: lighter;">
                tất cả những thông tin hữu ích bạn cần tham khảo để
                lên kế hoạch chuẩn bị tốt nhất cho chuyến du lịch của mình
                sẽ có ở đây</p>
        </div>

        <div class="tip1" onclick="toggleCardContent(this)">
            <div class="tip-title">
                <h5>Mùa du lịch</h5>
            </div>
            <div class="tip-content">
                <span>Những thời điểm tốt nhất bạn nên đến trong năm</span>
            </div>
        </div>
        <div class="tip2" onclick="toggleCardContent(this)">
            <div class="tip-title">
                <h4>Chi phí</h4>
            </div>
            <div class="tip-content">
                <span>thông tin những khoản chi phí bạn cần dự trù cho chuyển đi của mình</span>
            </div>
        </div>
        <div class="tip3" onclick="toggleCardContent(this)">
            <div class="tip-title">
                <h4>Địa điểm đẹp</h4>
            </div>
            <div class="tip-content">
                <span>các địa điểm bạn cần tới khi đến với chúng tôi</span>
            </div>
        </div>
        <div class="tip4" onclick="toggleCardContent(this)">
            <div class="tip-title">
                <h4>Phương tiện di chuyển</h4>
            </div>
            <div class="tip-content">
                <span>thông tin các phuong tiện bạn có thể sử dụng để di chuyển đến các điểm du lịch</span>
            </div>
        </div>
    </div>
@endsection
