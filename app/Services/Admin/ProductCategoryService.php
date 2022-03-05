<?php

namespace App\Services\Admin;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\Session;

class ProductCategoryService
{
    public function create($request)
    {

        $request->validate([
            'name' => 'required|max:100|unique:product_categories'
        ], [
            'name.required' => 'Tên danh mục là bắt buộc.',
            'name.max' => 'Tên danh mục không dài quá 100 ký tự.',
            'name.unique' => "Tên danh mục đã tồn tại."
        ]);
        try {
            ProductCategory::create([
                'name' => strtolower($request->input('name'))
            ]);

            Session::flash('success', 'Thêm danh mục thành công.');
        } catch (\Exception $error) {
            Session::flash('error', 'Thêm danh mục thất bại.');
        }


    }

    public function getAllCategory()
    {
        return ProductCategory::all();
    }
}
