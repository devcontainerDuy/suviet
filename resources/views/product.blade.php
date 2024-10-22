@extends('app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <a href="{{ route('products.create') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Thêm mới</a>

        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">STT</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-primary">Xem</a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">Sửa</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
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
            {{ $products->links() }}
        </div>
    </div>
@endsection
