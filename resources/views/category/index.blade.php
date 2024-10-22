@extends('app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
                <li class="breadcrumb-item active" aria-current="page">Phân loại sản phẩm</li>
            </ol>
        </nav>

        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Danh sách phân loại sản phẩm</h6>
                <a class="btn btn-success" href="/admin/danh-muc/create"><i class="fas fa-plus"></i> Thêm mới</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col"><input class="form-check-input" type="checkbox" id="select-all"></th>
                            <th scope="col">STT</th>
                            <th scope="col">Tên phân loại</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status ? 'Hiển thị' : 'Ẩn' }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary">Xem</a>
                                    <a href="/admin/danh-muc/{{ $category->id }}/edit "
                                        class="btn btn-sm btn-warning">Sửa</a>
                                    <form action="/admin/danh-muc/{{ $category->id }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button class="btn btn-danger" id="delete-selected"><i class="fas fa-trash-alt"></i> Xóa phân loại đã
                    chọn</button>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('select-all').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        document.getElementById('delete-selected').addEventListener('click', function() {
            if (confirm('Bạn có chắc muốn xóa các phân loại đã chọn?')) {
                // Thực hiện logic xóa ở đây (sử dụng AJAX hoặc form submit)
            }
        });
    </script>
@endsection
