@extends('app')

@section('content')
    <div class="container my-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Bảng điều khiển</a></li>
                <li class="breadcrumb-item"><a href="#">Đơn hàng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh sách đơn hàng</li>
            </ol>
        </nav>
        <button class="btn btn-danger mb-3"><i class="fa fa-trash-alt"></i> Xóa tất cả</button>

        <ul class="nav nav-pills mb-3 px-2">
            <li class="nav-item">
                <a class="nav-link active" href="#">All ({{ $allOrdersCount }})</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Just ordered ({{ $justOrderedCount }})</a>
            </li>
        </ul>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th><input class="form-check-input" type="checkbox"></th>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Order date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Setting</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <strong>{{ $order->user->name }}</strong> <br>
                                <span>{{ $order->order_code }}</span> <br>
                                <a href="#">Website</a>
                            </td>
                            <td>{{ $order->created_at->format('H:i\nd-m-Y') }}</td>
                            <td class="text-red">{{ number_format($order->total, 0, ',', '.') }} vnđ</td>
                            <td>
                                <span class="status-badge just-ordered">Just ordered</span> <br>
                                <span class="status-badge unpaid">Unpaid</span>
                            </td>
                            <td><i class="fas fa-ellipsis-v"></i></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
