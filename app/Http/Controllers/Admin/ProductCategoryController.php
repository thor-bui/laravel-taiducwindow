<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\ProductCategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductCategoryController extends Controller
{
    protected ProductCategoryService $productCategoryService;

    public function __construct(ProductCategoryService $productCategoryService)
    {
        $this->productCategoryService = $productCategoryService;
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $categories = $this->productCategoryService->getAllCategories();
        return view('admin.pages.product-category.list', compact('categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.pages.product-category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->productCategoryService->create($request);

        return redirect()->route('category.list')->with('success', 'Thêm danh mục thành công.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $category = $this->productCategoryService->getCategoryById($id);
        if (is_null($category)) {
            return redirect()->route('category.list')->with('error', 'Tên danh mục không tồn tại.');
        }
        return view('admin.pages.product-category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $isUpdatedSuccess = $this->productCategoryService->updateCategoryById($request, $id);
        if ($isUpdatedSuccess) {
            return redirect()->route('category.list')->with('success', 'Cập nhật danh mục thành công.');
        }
        return redirect()->route('category.list')->with('success', 'Cập nhật danh mục thất bại.');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Request $request)
    {
        $result = $this->productCategoryService->deleteProductCategoryById($request);
        if ($result) {
            Session::flash('success', 'Xóa danh mục thành công.');
            return response()->json([
                'error' => false,
                'message' => 'Xóa danh mục thành công.'
            ]);
        }

        Session::flash('error', 'Xóa danh mục thất bại.');
        return response()->json([
            'error' => true,
            'message' => 'Xóa danh mục thất bại.'
        ]);
    }
}
