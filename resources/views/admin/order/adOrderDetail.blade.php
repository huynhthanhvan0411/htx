@extends('admin.admin')
@section('title-ad')
    Danh mục sản phẩm
@endsection
@section('content-admin')
  <form action="./?module=admin&controller=banner&action=searchBannerFull"
                                        class="form-inline" method="post">

                                        <div class="form-group">
                                            <input class="form-control search-input" name="bannerSearch"
                                                placeholder="Search By Name..">
                                        </div>

                                        <button type="submit" class="btn btn-root search-btn">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </form>
                                    <hr>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Created Date</th>
                                                <th>Updated Date</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Milk Tea</td>
                                                <td>
                                                    <span class="badge badge-success">Visible</span>
                                                </td>
                                                <td>2023-10-23 21:45:57</td>
                                                <td>
                                                    2023-10-23 21:45:57
                                                </td>
                                                <td class="text-right">
                                                    <a href="#" class="btn btn-sm btn-success">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-danger btndelete"
                                                        onclick="return confirm('Are you sure to delete this banner ?')">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
@endsection
