<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\ProductCategoryService;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    protected ProductCategoryService $productCategoryService;

    public function __construct(ProductCategoryService $productCategoryService)
    {
        $this->productCategoryService = $productCategoryService;
    }


    public function index()
    {
        return view('admin.pages.product-category.add');
    }

    public function store(Request $request)
    {
        $this->productCategoryService->create($request);

        return back();
    }
}
