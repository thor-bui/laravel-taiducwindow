@extends('layouts.admin')

@section('content')
    @include('admin.blocks.alert')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh sách danh mục</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Tên danh mục</th>
                        <th>Ngày tạo</th>
                        <th style="width: 100px">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ date('d/m/y', strtotime($category->created_at)) }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button class="btn btn-secondary mr-1"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <p class="text-warning text-bold">Không có danh mục sản phẩm nào.</p>
                    @endforelse

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
    </div>
@endsection
