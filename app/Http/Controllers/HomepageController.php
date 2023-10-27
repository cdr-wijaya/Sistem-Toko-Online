<?php

namespace App\Http\Controllers;

use App\Services\Category\CategoryService;
use App\Services\Product\ProductService;

class HomepageController extends Controller
{
    private $productService, $categoryService;
    
    /**
     * __construct
     *
     * @param  mixed $productService
     * @param  mixed $categoryService
     * @return void
     */
    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }
    
    /**
     * Homepage Index
     *
     * @return void
     */
    public function index()
    {
        $data = [
            "rec_products"  => $this->productService->getRecomendationProduct(),
            "best_seller"   => $this->productService->getBestSellerProducts(),
            "categories"    => $this->categoryService->getAllCategory(),
        ];

        return view('apps.homepage', $data);
    }

    public function showProductsByCategory($slug)
    {
        $data = [
            "categories"    => $this->categoryService->getAllCategory(),
            "category"      => $this->categoryService->getCategoryBySlug($slug),
            "products"      => $this->productService->getProductsByCategorySlug($slug),
        ];

        return view('apps.products-by-category', $data);
    }
}
