@extends('layouts.admin')

@section('content')

    @include('admin.blocks.alert')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm Danh Mục Sản Phẩm</h3>
        </div>
        <form action="{{route('add-category')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="product-category">Tên danh mục</label>

                    <input type="text" name="product-category"
                           class="form-control @error('product-category') is-invalid @enderror"
                           id="product-category" placeholder="Nhập tên danh mục">

                    @error('product-category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tạo danh mục</button>
            </div>
        </form>
    </div>
@endsection
