@extends('layout')
@section('title-user')
    Thông tin khách hàng
@endsection
@section('content-layout')
    <style>
        .main {
            width: 90%;
            background-color: #f2f2f2cd;
            border-radius: 6px;
            padding: 0 20px;
            {{--  margin: auto;  --}} margin-bottom: 30px;
        }

        .infor {
            padding: 20px;
        }

        .infor2>* {
            margin-bottom: 20px;
        }

        .infor2 {
            display: flex;
            flex-direction: column;
        }

        .infor2 input {
            padding: 13px;
            border: 1px solid rgb(161, 156, 156);
            border-radius: 3px;
            outline: none;

        }

        .hoten {
            display: flex;
            justify-content: space-between;
        }

        .hoten input {
            width: 45%;
        }

        ::placeholder {
            font-weight: 500;
            font-size: 15px;
        }

        .require_1 {
            position: absolute;
            left: 12%;
            bottom: 63%;
            color: red;
        }

        .require_2 {
            position: absolute;
            left: 63%;
            bottom: 63%;
            color: red;
        }

        .require_3 {
            position: absolute;
            top: 43%;
            right: 89%;
            color: red;
        }

        .require_4 {
            position: absolute;
            top: 53%;
            right: 88%;
            color: red;
        }

        .vanchuyen,
        .pttt {
            padding: 10px;
            margin-bottom: 30px;
            border: 2px solid rgb(161, 156, 156);
            border-radius: 3px;
            display: flex;
        }

        .delivery,
        .payment {
            flex: 1;
        }

        input[type=radio] {
            margin-right: 15px;

        }

        .button {
            background-color: rgb(1, 86, 1);
            border-radius: 5px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            text-align: center;
            border: none;
            width: 100%;
            padding: 20px;
        }
    </style>
    </style>
    <h2 style="margin: 20px 80px ">THÔNG TIN KHÁCH HÀNG</h2>
    <div class="main container mx-3">
        <div class="infor">
            <div class="infor2">
                <div class="hoten">
                    <input type="text" name="" id="hoten" placeholder="HỌ TÊN"> <span class="require_1">*</span>
                    <input type="text" name="" id="sdt" placeholder="SỐ ĐIỆN THOẠI"><span
                        class="require_2">*</span>
                </div>
                <input type="text" id='email' placeholder="EMAIL"><span class="require_3">*</span>
                <input type="text" id='diachi' placeholder="ĐỊA CHỈ"><span class="require_4">*</span>
                <input type="text" id='ghichu' placeholder="GHI CHÚ">
            </div>
            <p><b>ĐƠN VỊ VẬN CHUYỂN</b></p>
            <div class="vanchuyen">
                <div class="delivery"><input type="radio" name="">GIAO HÀNG TIẾT KIỆM</div>
                <div class="delivery"><input type="radio" name="">GIAO HÀNG NHANH</div>
                <div class="delivery"><input type="radio" name="">J&T EXPRESS</div>
            </div>

            <p><b>PHƯƠNG THỨC THANH TOÁN</b></p>
            <div class="pttt">
                <div class="payment"><input type="radio" name="">THANH TOÁN KHI NHẬN HÀNG</div>
                <div class="payment"><input type="radio" name="">CHUYỂN KHOẢN NGÂN HÀNG</div>
                <div class="payment"><input type="radio" name="">QUA THẺ</div>
            </div>
            <div>
                <button type="button" class='button'>
                    <a href="{{ route('getSuccess') }}">
                        ĐẶT HÀNG <br>HOTLINE: 0394407543 (24/7)
                    </a>

                </button>
            </div>
        </div>
    </div>
@endsection
