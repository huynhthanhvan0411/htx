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
            margin: auto;
            margin-bottom: 30px;
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

        .delivery,
        .payment {
            padding: 10px;
            margin-bottom: 30px;
            border: 2px solid rgb(161, 156, 156);
            border-radius: 3px;
            display: flex;
        }

        .delivery--name,
        .payment--name {
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
    <h2 style="margin: 20px 80px ">THÔNG TIN KHÁCH HÀNG</h2>
    <div class="main">
        @guest
            {{--  if no login   --}}
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

            </div>
        @else
            {{--  if login   --}}
            <div class="infor row">
                <div class="col-6">
                    <div class="infor2">
                        <div class="hoten">
                            <input type="text" name="name" id="name" placeholder="HỌ TÊN"
                                value="{{ Auth::user()->name }}">
                            <input type="tel" name="" id="sdt" placeholder="SỐ ĐIỆN THOẠI"
                                value="{{ Auth::user()->phone }}">
                        </div>
                        <input type="email" id='email' name="email" value="{{ Auth::user()->email }}"
                            placeholder="EMAIL">
                        <input type="text" id='address' name="address" placeholder="ĐỊA CHỈ"
                            value="{{ Auth::user()->address }}">
                        <input type="text" id='note' name="note" placeholder="GHI CHÚ">
                    </div>
                    <p><b>ĐƠN VỊ VẬN CHUYỂN</b></p>
                    <div class="delivery">
                        <div class="delivery--name"><input type="radio" value="1">GIAO HÀNG TIẾT KIỆM</div>
                        <div class="delivery--name"><input type="radio" value="2">GIAO HÀNG NHANH</div>
                        <div class="delivery--name"><input type="radio" value="3">J&T EXPRESS</div>
                    </div>

                    <p><b>PHƯƠNG THỨC THANH TOÁN</b></p>
                    <div class="payment">
                        <div class="payment--name"><input type="radio" value="1">THANH TOÁN KHI NHẬN HÀNG</div>
                        <div class="payment--name"><input type="radio" value="2">CHUYỂN KHOẢN NGÂN HÀNG</div>
                        <div class="payment--name"><input type="radio" value="3">QUA THẺ</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="checkout--title">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th class="">Sản Phẩm</th>
                                    <th class="">Đơn giá</th>
                                    <th class="">Số lượng</th>
                                    <th class="">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $productId => $item)
                                    <tr class="">
                                        <td class="number">{{ $loop->iteration }}</td>
                                        <td class="name">{{ $item['product']->name }}</td>
                                        <td class="price">{{ number_format($item['product']->price) }} đ</td>
                                        <td class="quantity">{{ $item['quantity'] }}</td>
                                        <td class="total-price">{{ number_format($item['total_price']) }} đ</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row" style="width: 100%">

                <button type="button" class='button'>
                    <a href="{{ route('getSuccess') }}"> ĐẶT HÀNG <br>HOTLINE: 0394407543 (24/7)</a>
                </button>

            </div>
        @endguest
    </div>
@endsection
