<?php

namespace App\Services\Admin;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\Session;

class ProductCategoryService
{
    public function create($request)
    {

        $this->validateRequest($request);

        try {
            ProductCategory::create([
                'name' => strtolower($request->input('name'))
            ]);
        } catch (\Exception $error) {
            Session::flash('error', 'Thêm danh mục thất bại.');
        }


    }

    public function getAllCategories()
    {
        return ProductCategory::all()->sortByDesc('created_at');
    }

    public function getCategoryById($id)
    {
        return ProductCategory::find($id);

    }

    public function updateCategoryById($request, $id)
    {
        $this->validateRequest($request);

        try {
            ProductCategory::where('id', $id)->update([
                'name' => strtolower($request->input('name'))
            ]);
            return true;
        } catch (\Exception $error) {
            return false;
        }

    }

    public function validateRequest($request)
    {
        $request->validate([
            'name' => 'required|max:100|unique:product_categories'
        ], [
            'name.required' => 'Tên danh mục là bắt buộc.',
            'name.max' => 'Tên danh mục không dài quá 100 ký tự.',
            'name.unique' => "Tên danh mục đã tồn tại."
        ]);
    }
}
