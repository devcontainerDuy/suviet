@extends('app')

@section('content')
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
                <li class="breadcrumb-item"><a href="">Danh mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm danh mục</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Thêm danh mục</h4>
                    </div>
                    <div class="card-body">
                        <form action="/admin/danh-muc/" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nhập tên danh mục" required>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Lưu thay
                                    đổi</button>
                                <a href="/admin/danh-muc/" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Quay
                                    lại</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
