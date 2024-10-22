@extends('app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
                <li class="breadcrumb-item"><a href="#">Tài khoản</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách tài khoản</li>
            </ol>
        </nav>

        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Danh sách tài khoản</h6>
                <a class="btn btn-success" href="#"><i class="fas fa-plus"></i> Thêm mới</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col"><input class="form-check-input" type="checkbox" id="select-all"></th>
                            <th scope="col">STT</th>
                            <th scope="col">Ngày Tạo</th>
                            <th scope="col">Ngày Cập Nhật</th>
                            <th scope="col">Tên Đăng Nhập</th>
                            <th scope="col">Tên Người Dùng</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Chỉnh sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                <td>{{ $user->updated_at->format('d/m/Y') }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->status ? 'Kích hoạt' : 'Vô hiệu' }}</td>
                                <td><a class="btn btn-sm w-100 btn-primary" href="{{ route('users.edit', $user->id) }}">Cập
                                        Nhật</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button class="btn btn-danger" id="delete-selected"><i class="fas fa-trash-alt"></i> Xóa tài khoản đã
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
            if (confirm('Bạn có chắc muốn xóa các tài khoản đã chọn?')) {
                // 
            }
        });
    </script>
@endsection
