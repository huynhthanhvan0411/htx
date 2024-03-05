@extends('admin.admin')
@section('title-ad')
    Account Managerment
@endsection
@section('nav')
    Danh mục
@endsection
@section('content-admin')
    <form action="{{ route('searchAccount') }}" class="form-inline" method="post">
        @csrf
        <div class="form-group">
            <input class="form-control search-input" name="accountSearch" placeholder="Search By Name..">
        </div>

        <button style ="height: 38px;" type="submit" class="btn btn-root search-btn">
            <i class="fas fa-search"></i>
        </button>
    </form>
    <hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Vai trò</th>
                <th>Hình ảnh</th>
                <th>Trạng thái </th>
                <th>Ngày tạo</th>
                <th class="text-right">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @php
                $count = 1;
            @endphp
            @foreach ($accounts as $account)
                <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $account->name }}</td>
                    <td>{{ $account->email }}</td>
                    <td>
                        @if ($account->role == 1)
                            <i class="fa fa-user-secret"></i>
                        @else
                            <i class="fa fa-user"></i>
                        @endif
                    </td>
                    <td><img style="width: 50px; height: 50px;"
                            src="{{ asset('source/images/account/' . $account->image) }}"></td>
                    <td>
                        @if ($account->status == 1)
                            <span class="badge badge-success">Visible</span>
                        @else
                            <span class="badge badge-danger">Hidden</span>
                        @endif
                    </td>
                    <td>{{ $account->created_at }}</td>
                    <td class="text-right">
                        <a href="{{ route('editAccount', $account->id) }}" class="btn btn-sm btn-success">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="{{ route('deleteAccount', $account->id) }}" class="btn btn-sm btn-danger btndelete"
                            onclick="return confirm('Are you sure to delete this news?')">
                            <i class="fas fa-trash"></i>
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Hiển thị nút phân trang -->
    {{ $accounts->links() }}
    <hr>
@endsection
