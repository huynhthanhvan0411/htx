@extends('layout')
@section('title-user')
    Chi tiết đơn hàng
@endsection
@section('content-layout')
    <style>
        <style>.main {
            width: 90%;
            margin: auto;
            padding: 20px;
        }

        .infor {
            display: flex;
            border: 1px dashed rgb(161, 156, 156);
            padding: 20px 30px;
            margin-bottom: 15px;
            font-size: 15px;
        }

        .infor_detail {
            margin-left: 20px;
            font-weight: 700;
        }

        table {
            width: 100%;
        }

        th,
        td {
            border-bottom: 1px solid black;
            border-collapse: collapse;
            padding: 10px 0;
        }

        tr.note td {
            border-bottom: none;
        }

        .Product_name {
            text-align: left;
        }

        .price {
            text-align: right;
        }
    </style>
    </style>
    <div class="main">
        <h2 style="margin-bottom: 20px;">ĐẶT HÀNG THÀNH CÔNG</h2>
        <p>CẢM ƠN QUÝ KHÁCH ĐÃ MUA HÀNG TẠI ...VN</p>
        <p>TƯ VẤN VIÊN SẼ LIÊN HỆ ĐẾN QUÝ KHÁCH TRONG THỜI GIAN SỚM NHẤT (<i>GIỜ LÀM VIỆC 9H-20H</i>) </p>
        <div class="infor">
            <div>
                <p>MÃ ĐƠN HÀNG</p>
                <p>NGÀY</p>
                <p>EMAIL</p>
                <p>SỐ ĐIỆN THOẠI</p>
                <p>TỔNG CỘNG</p>
                <p>PHƯƠNG THỨC THANH TOÁN</p>
            </div>
            <div class='infor_detail'>
                <p>: 59435</p>
                <p>: 20/01/2020</p>
                <p>: abc@gmail.com</p>
                <p>: 0394407543</p>
                <p>: 1,302,200</p>
                <p>: TRẢ TIỀN MẶT KHI NHẬN HÀNG</p>
            </div>
        </div>
        <h2>CHI TIẾT ĐƠN HÀNG</h2>
        <div>
            <table>
                <tr>
                    <th class='Product_name'>SẢM PHẨM</th>
                    <th class="price">TỔNG</th>
                </tr>
                <tr>
                    <td class='Product_name'>CƠM LAM <br> x 2</td>
                    <td class="price">240.000đ</td>
                </tr>
                <tr>
                    <td class='Product_name'>CƠM LAM <br> x 2</td>
                    <td class="price">240.000đ</td>
                </tr>
                <tr>
                    <td class='Product_name'>CƠM LAM <br> x 2</td>
                    <td class="price">240.000đ</td>
                </tr>
                <tr>
                    <td class='Product_name'>CƠM LAM <br> x 2</td>
                    <td class="price">240.000đ</td>
                </tr>
                <tr class="note">
                    <td class='Product_name'>GHI CHÚ </td>
                    <td class="price">KHÔNG BIẾT</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
