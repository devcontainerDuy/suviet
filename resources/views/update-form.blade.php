@extends('app')

@section('content')
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
                <li class="breadcrumb-item"><a href="#">Tài khoản</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cập nhật tài khoản</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Cập nhật tài khoản</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="fullname" class="form-label">Tên người dùng</label>
                                <input type="text" class="form-control" id="fullname" name="fullname"
                                    placeholder="Nhập tên người dùng" value="{{ $user->fullname }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Nhập email" value="{{ $user->email }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Mật khẩu hiện tại</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Nhập mật khẩu">
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="form-label">Mật khẩu mới</label>
                                <input type="password" class="form-control" id="new_password" name="new_password"
                                    placeholder="Nhập mật khẩu mới">
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Trạng thái</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="1" {{ $user->status ? 'selected' : '' }}>Kích hoạt</option>
                                    <option value="0" {{ !$user->status ? 'selected' : '' }}>Vô hiệu</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Lưu thay
                                    đổi</button>
                                <a href="#" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Quay lại</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
