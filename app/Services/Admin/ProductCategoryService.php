<?php

namespace App\Services\Admin;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\Session;

class ProductCategoryService
{
    public function create($request)
    {

        $request->validate([
            'product-category' => 'required|max:100'
        ]);
        try {
            ProductCategory::create([
                'name' => strtolower($request->input('product-category'))
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
