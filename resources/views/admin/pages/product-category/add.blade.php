@extends('layouts.admin')

@section('content')

    @include('admin.blocks.alert')
    <a href="{{route('category.list')}}" class="btn btn-outline-secondary mb-3"><i class="fas fa-arrow-left"></i> Quay
        lại</a>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm Danh Mục Sản Phẩm</h3>
        </div>
        <form action="{{route('category.add')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Tên danh mục</label>

                    <input type="text" name="name"
                           class="form-control @error('name') is-invalid @enderror"
                           id="name" placeholder="Nhập tên danh mục">

                    @error('name')
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
