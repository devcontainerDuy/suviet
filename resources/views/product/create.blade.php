@extends('app')

@section('content')
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
                <li class="breadcrumb-item"><a href="/admin/san-pham">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Thêm sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        <form action="/admin/san-pham/" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Nhập tên sản phẩm" required>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Giá</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    placeholder="Nhập giá sản phẩm" required>
                            </div>

                            <div class="mb-3">
                                <label for="sale" class="form-label">Sale</label>
                                <input type="number" class="form-control" id="sale" name="sale"
                                    placeholder="Nhập giá sale (nếu có)">
                            </div>

                            <div class="mb-3">
                                <label for="import_date" class="form-label">Ngày nhập</label>
                                <input type="date" class="form-control" id="import_date" name="import_date">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Mô tả</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="short_description" class="form-label">Mô tả ngắn</label>
                                <input type="text" class="form-control" id="short_description" name="short_description"
                                    placeholder="Nhập mô tả ngắn" maxlength="300">
                            </div>

                            <div class="mb-3">
                                <label for="is_show" class="form-label">Hiển thị</label>
                                <select class="form-select" id="is_show" name="is_show" required>
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="category_id" class="form-label">Danh mục</label>
                                <select class="form-select" id="category_id" name="category_id" required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="quantity" class="form-label">Số lượng</label>
                                <input type="number" class="form-control" id="quantity" name="quantity"
                                    placeholder="Nhập số lượng" required>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Hình ảnh</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Thêm sản
                                    phẩm</button>
                                <a href="/admin/san-pham" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>
                                    Quay lại</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
