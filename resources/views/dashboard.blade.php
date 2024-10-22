@extends('app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-layer-group fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Tổng danh mục</p>
                        <h6 class="mb-0">{{ $tongDanhMuc }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
